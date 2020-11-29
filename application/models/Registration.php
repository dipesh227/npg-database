<?php
class Registration extends CI_Model
{
    function wardno()
    {
        $this->db->order_by('wardno', 'ASC');
        $querywardno = $this->db->get('wardno');
        return $querywardno->result();
    }
    function areaname($wardno)
    {
        $this->db->where('wardid', $wardno);
        $this->db->order_by('areaname', 'ASC');
        $query = $this->db->get('areaname');
        echo $output = '<option value="">Select Your Area Name</option>';
        foreach ($query->result() as $arearow) {
            echo $output = "<option value='$arearow->id'>$arearow->areaname</option>";
        }
        if ($query->result() == null) {
            echo $output = '<option value="">Sorry No Area In your Ward Ragistered</option>';
        }
        return $output;
    }
    function citizenregiste($data)
    {
        $respunse = $this->db->insert('citizenregister', $data);
        if ($respunse) {

            return true;
        }
    }
    function citizenlogin($data)
    {
        $this->db->where('email', $data['email']);
        $this->db->where('email ', $data['password']);
        $this->db->order_by('id', 'ASC');
        $citizenlogin = $this->db->get('citizenregister');
        if ($citizenlogin) {
            return true;
        }else{
            return false;
        }
    }
}
