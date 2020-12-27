<?php

if (!$this->session->userdata('isslogin')) {
    redirect(base_url() . 'admin/login');
} else {
    $this->load->view('./back_end/include/css.php');
    $this->load->view('./back_end/include/header.php');
    $this->load->view('./back_end/include/navbar.php');
    $this->load->view('./back_end/include/sidbar.php');
?>
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Edit Post</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Edit Post</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

<?php
    $this->load->view('./back_end/include/footer.php');
    $this->load->view('./back_end/include/footerjs.php');
} ?>