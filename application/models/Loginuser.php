<?php
class Loginuser extends CI_Model
{
    function login($data)
    {
        $this->db->where('user_name', $data['user_name']);
        $this->db->where('password ', $data['password']);
        $this->db->order_by('id', 'ASC');
        $userlogin = $this->db->get('user');
        if ($userlogin->num_rows() > 0) {
            foreach ($userlogin->result() as $userdata) {
                $session_data = array(
                    'isslogin' => true,
                    'username' => $userdata->user_name,
                    'type' => $userdata->user_type,
                );
                $this->session->set_userdata($session_data);
            }
            return true;
        } else {
            return false;
        }
    }
}
