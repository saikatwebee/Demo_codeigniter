<?php
//defined('BASEPATH') or exit('No direct script access allowed');
class Google_login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Google_login_model', 'gm');
    }

    public function login()
    {
        include_once APPPATH . 'libraries/vendor/autoload.php';
        $google_client = new Google_Client();
        $google_client->setClientId(
            '284646127364-mvn8taieaeroctdk7kna617ab3ph36lg.apps.googleusercontent.com'
        );
        $google_client->setClientSecret('frWNeY9oQGBqIxITz25MxeKE');
        $google_client->setRedirectUri(
            'http://localhost/DemoProject/users/google_login/login'
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

                if ($this->gm->is_already_register($data['id'])) {
                    //update user data
                    $user_data = [
                        'first_name' => $data['given_name'],
                        'last_name' => $data['family_name'],
                        'email' => $data['email'],
                        'profile_picture' => $data['picture'],
                        'modified' => $current_datetime,
                    ];

                    $this->gm->Update_user_data($user_data, $data['id']);
                } else {
                    //insert user data
                    $user_data = [
                        'oauth_id' => $data['id'],
                        'first_name' => $data['given_name'],
                        'last_name' => $data['family_name'],
                        'email' => $data['email'],
                        'profile_picture' => $data['picture'],
                    ];

                    $this->gm->Insert_user_data($user_data);
                }
                $this->session->set_userdata('user_data', $user_data);
            }
        }
        $login_button = '';
        if (!$this->session->userdata('access_token')) {
            $login_button =
                '<a href="' .
                $google_client->createAuthUrl() .
                '" class="btn btn-danger"><i class="fa fa-google mr-2" aria-hidden="true"></i>Login with Gmail</a>';
            $data['login_button'] = $login_button;
            $this->load->view('users/google_login/login', $data);
        } else {
            //$this->load->view('google_login', $data);
            echo "<script>window.location.href='" .
                base_url('users/register/account_details') .
                "';</script>";
        }
    }
}

?>
