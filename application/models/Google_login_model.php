<?php
class Google_login_model extends CI_Model
{
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
