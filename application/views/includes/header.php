<nav class="navbar navbar-expand-sm d-flex justify-content-between bg-white">
    <a class="navbar-brand text-uppercase" href="<?php echo base_url() ?>">
        <img style="max-height: 4rem;" src="<?php echo base_url(); ?>asset/img/Nagar_Panchayat_Gularbhoj_Office_management_system.gif" alt="Nagar_Panchayat_Gularbhoj_Office_management_system">
    </a>
    <img style="max-height: 4rem;" class="" src="<?php echo base_url(); ?>asset/img/flag_india.gif" alt="Nagar_Panchayat_Gularbhoj_Office_management_system">
    <?php
    if (!$this->session->userdata('isslogin')) {
    ?><a class="navbar-brand text-uppercase" href="<?php echo base_url() ?>login">
            <img style="max-height: 4rem;" src="<?php echo base_url(); ?>asset/img/login.gif" alt="Nagar_Panchayat_Gularbhoj_Office_management_system">
        </a><?php
        } else {
            echo "<div class='text-center'>User Name - : [<a href='" . base_url() . "dashboard/profile'>" . $this->session->userdata('username') . "</a>]<br>User Type - : [<a href='" . base_url() . "dashboard/profile'>" . $this->session->userdata('type') . "</a>]<br>Logout - : [<a  href='" . base_url() . "dashboard/logout'>Logout</a>]</div>";
        }
            ?>
</nav>