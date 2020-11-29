<?php
echo $this->session->userdata('username');
echo $this->session->userdata('isslogin');
echo '<a href="'.base_url().'citizen/logout">Logout</a>';
?>
