<?php
class Latterbox extends CI_Model
{
    function patraawali_detials()
    {
        $this->db->select('id,patraawali_detials');
        $this->db->distinct();
        $lockerdetials = $this->db->get('lockrdetials');
        return $lockerdetials->result();
    }
    function locker_no()
    {
        $this->db->select('locker_no');
        $this->db->distinct();
        $locker_no = $this->db->get('lockrdetials');
        return $locker_no->result();
    }
    function section()
    {
        $this->db->select('section,');
        $this->db->distinct();
        $section = $this->db->get('lockrdetials');
        return $section->result();
    }
    function subsection()
    {
        $this->db->select('subsection');
        $this->db->distinct();
        $subsection = $this->db->get('lockrdetials');
        return $subsection->result();
    }
}
