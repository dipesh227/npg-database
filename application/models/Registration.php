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
        if($query->result()==null){
            echo $output ='<option value="">Sorry No Area In your Ward Ragistered</option>';
        }
        return $output;
    }
}
