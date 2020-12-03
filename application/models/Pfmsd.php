<?php
class Pfmsd extends CI_Model
{
    function pfmsdawash()
    {
        $this->db->order_by('beneficiary_code', 'ASC');
        $awash = $this->db->get('benificiary');
        return $awash->result();
    }
}
