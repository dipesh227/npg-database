<?php
class Admindb extends CI_Model
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

    function sliderimgget(){
        $this->db->order_by('id', 'ASC');
        $sliderpic = $this->db->get('sliderpic');
        return $sliderpic->result();
    }
    function sliderimginsert($data)
    {
        $respunse = $this->db->insert('sliderpic', $data);
        if ($respunse) {
            $this->db->order_by('id', 'ASC');
            $sliderpic = $this->db->get('sliderpic');
            return $sliderpic->result();
        }
    }
}
