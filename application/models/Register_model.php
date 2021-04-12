<?php
class Register_model extends CI_Model
{
    public function check($user, $pass)
    {
        //$data = [];
        $condition = "username= '$user' OR email= '$user' ";
        $this->db->select('*');
        $this->db->from('register');
        $this->db->where($condition);
        $check_data=$this->db->get()->result();

        if($check_data){
            foreach ($check_data as $val) {
                $hash=$val->password;
            }

           $verify= password_verify($pass,$hash);

           if($verify){

                return $check_data;
           }
        }

        
    }
    public function checkMail($email){
         $this->db->select('*');
        $this->db->from('register');
        $this->db->where('email',$email);
        $check_mail=$this->db->get();
        if($check_mail->num_rows() > 0){
            return true;
        }
        else{
            return false;
        }

    }
    public function insert($data)
    {
        $this->db->insert('register', $data);
        return $this->db->affected_rows();
    }
    function Is_already_register($id)
    {
        $this->db->where('oauth_id', $id);
        $query = $this->db->get('register');
        if ($query->num_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    function Update_user_data($data, $id)
    {
        $this->db->where('oauth_id', $id);
        $this->db->update('register', $data);
    }

    function Insert_user_data($data)
    {
        $this->db->insert('register', $data);
    }
}
?>
