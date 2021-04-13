<?php
class Register extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        //$this->load->model('modelFolder/' . $this->controller . '_model');
        $this->load->model('Register_model', 'rm');
    }
    public function login()
    {
        //echo"This is Login";
        $this->load->view('users/register/login');
    }
    public function validate()
    {
        $data = [];
        $info = [];
        $url = base_url('users/register/account_details');

        // $url=explode('\',);
        if ($this->input->post() != null) {
            //var_dump($this->input->post());
            $username = $this->input->post('user');
            $password = $this->input->post('pass');
            //var_dump($url);
            //exit();

            $result = $this->rm->check($username, $password);
            // var_dump($result);
            // die();
            if ($result) {
                foreach ($result as $val) {
                    $info = [
                        'email' => $val->email,
                        'id' => $val->id,
                        'nm' => $val->first_name,
                    ];
                }
                //  die(var_dump($info));

                $this->session->set_userdata('logged_in', $info);
                $data = [
                    'code' => 200,
                    'url' => $url,
                ];
            } else {
                $data = ['code' => 210];
            }
            // echo json_encode($data);
            die(json_encode($data));
        }
    }

    public function account_details()
    {
        $this->load->view('users/register/account_details');
    }
    public function profile()
    {
        $this->load->view('users/register/profile');
    }
    public function user_login()
    {
        $this->load->view('users/register/user_login');
    }
    public function logout()
    {
        $this->session->unset_userdata('logged_in');
        $this->session->unset_userdata('access_token');
        redirect('users/register/user_login');
    }

    public function check_mail(){

        if(!empty($this->input->post('checkmail'))){
    
                    $data=[];

                    $email=$this->input->post('checkmail');
                    $check=$this->rm->checkMail($email);
                    if($check){
                        $data=['code'=>200,'msg'=>'Email already exist'];
                    }
                    else{
                         $data=['code'=>210];
                    }
                    echo json_encode($data);
                }
    }

    public function add()
    {
        if ($this->input->post()) {
            //var_dump($this->input->post());
            //die;

            $result = [];
           // $this->load->library('encrypt');
            $hash= $this->input->post('password');
            $password= password_hash($hash, PASSWORD_DEFAULT); 
            $data = [
                'first_name' => $this->input->post('first_name'),
                'last_name' => $this->input->post('last_name'),
                'phone' => $this->input->post('phone'),
                'email' => $this->input->post('email'),
                'dob' => $this->input->post('dob'),
                'username' => $this->input->post('username'),
                'password' => $password,
                'hint' => $this->input->post('password'),
            ];
            $rows = $this->rm->insert($data);
            if ($rows > 0) {
                $result = ['code' => 200];
            } else {
                $result = ['code' => 210];
            }

            echo json_encode($result);
        }
    }

    public function registration()
    {
        include_once APPPATH . 'libraries/vendor/autoload.php';
        $google_client = new Google_Client();
        $google_client->setClientId(
            '284646127364-mvn8taieaeroctdk7kna617ab3ph36lg.apps.googleusercontent.com'
        );
        $google_client->setClientSecret('frWNeY9oQGBqIxITz25MxeKE');
        $google_client->setRedirectUri(
            'http://localhost/DemoProject/users/register/registration'
        );
        $google_client->addScope('email');
        $google_client->addScope('profile');

        if (isset($_GET['code'])) {
            $token = $google_client->fetchAccessTokenWithAuthCode(
                $_GET['code']
            );

            if (!isset($token['error'])) {
                $google_client->setAccessToken($token['access_token']);
                $this->session->set_userdata(
                    'access_token',
                    $token['access_token']
                );

                $google_service = new Google_Service_Oauth2($google_client);
                $data = $google_service->userinfo->get();
                $current_datetime = date('Y-m-d H:i:s');

                if ($this->rm->is_already_register($data['id'])) {
                    //update user data
                    $user_data = [
                        'first_name' => $data['given_name'],
                        'last_name' => $data['family_name'],
                        'email' => $data['email'],
                        'profile_picture' => $data['picture'],
                        'modified' => $current_datetime,
                    ];

                    $this->rm->Update_user_data($user_data, $data['id']);
                } else {
                    //insert user data
                    $user_data = [
                        'oauth_id' => $data['id'],
                        'first_name' => $data['given_name'],
                        'last_name' => $data['family_name'],
                        'email' => $data['email'],
                        'profile_picture' => $data['picture'],
                    ];

                    $this->rm->Insert_user_data($user_data);
                }
                $this->session->set_userdata('user_data', $user_data);
            }
        }
        $login_button = '';
        if (!$this->session->userdata('access_token')) {
            $login_button =
                '<a href="' .
                $google_client->createAuthUrl() .
                '" class="btn btn-danger btn-block"><i class="fa fa-google mr-2" aria-hidden="true"></i>Login with Gmail</a>';
            $data['login_button'] = $login_button;
            $this->load->view('users/register/registration', $data);
        } else {
            //$this->load->view('google_login', $data);
            echo "<script>window.location.href='" .
                base_url('users/register/account_details') .
                "';</script>";
        }
    }
}

?>
