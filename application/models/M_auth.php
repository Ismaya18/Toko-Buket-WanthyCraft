<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_auth extends CI_Model
{

    public function login_user($username, $password)
    {
        $this->db->select('*');
        $this->db->from('tbl_admin');
        $this->db->where(array(
            'username' => $username,
            'password' => $password
        ));
        return $this->db->get()->row();
    }
}

/* End of file ModelName.php */
