<?php
if (!$this->session->userdata('isslogin')) {
    redirect(base_url() . 'login');
} else {
    $this->load->view('./includes/css.php');
    $this->load->view('./includes/header.php');
?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2 col-sm-2 colmd1">
                <?php $this->load->view('./dashboard/sidebar.php'); ?>
            </div>
            <div class="col-md-10 col-sm-10"></div>
        </div>
    </div>
<?php
    $this->load->view('./includes/footer.php');
}
?>