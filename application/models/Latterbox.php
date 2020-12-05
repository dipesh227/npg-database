<?php
class Latterbox extends CI_Model
{
    function lockerone1()
    {
        $this->db->select('section,subsection');
        $this->db->distinct();
        $lockerdetials = $this->db->get('lockrdetials');
        return $lockerdetials->result();
    }
}
