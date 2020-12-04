<?php
if ($this->session->userdata('isslogin')) {
    redirect(base_url() . 'dashboard');
} else {
    $this->load->view('./includes/css.php');
    $this->load->view('./includes/header.php');
?>
    <div class="container">
        <div class="card mx-auto " style="max-width: 30rem;">
            <div class="card-header bg-primary text-white">
                <h3>Login</h3>
            </div>
            <div class="card-body">
                <form id="clogin">
                    <span id="fail"></span>
                    <div class="form-group">
                        <label for="user_name">User Name</label>
                        <input type="text" class="form-control" id="user_name" placeholder="Enter User Name" name="user_name">
                        <span id="user_name_error" class=" alert-danger"></span>
                    </div>
                    <div class="form-group">
                        <label for="cpassword">Password</label>
                        <input type="password" class="form-control" id="cpassword" placeholder="Enter password" name="cpassword">
                        <span id="password_error" class=" alert-danger"></span>
                    </div>
                    <?php
                    echo ' <button type="submit" id="cplogin" class="btn btn-outline-primary btn-block btn-outline">Login</button>';
                    ?>
                </form>
            </div>
            <div class="card-footer">
                <a href="<?php echo base_url() ?>forget_Password">Forget Password ?</a>

            </div>
        </div>
    </div>
<?php
    $this->load->view('./includes/footer.php');
}
?>
<script>
    $(document).ready(function() {
        $("#clogin").submit(function() {
            $.ajax({
                type: "post",
                url: "<?php echo base_url() ?>login/check_login_data",
                // enctype: 'multipart/form-data',
                processData: false, // tell jQuery not to process the data
                contentType: false, // tell jQuery not to set contentType,
                dataType: 'json',
                data: new FormData(this),
                success: function(data) {
                    if (data.error != '') {
                        if (data.user_name_error != '') {
                            $('#user_name_error').html(data.user_name_error)
                        } else {
                            $('#user_name_error').html('')
                        }
                        if (data.password_error != '') {
                            $('#password_error').html(data.password_error)
                        } else {
                            $('#password_error').html('')
                        }
                    }
                    if (data.success) {
                        location.href = '<?php echo base_url() ?>dashboard';
                    } else {
                        $('#fail').html('<div class="alert alert-danger">Username And Password Is wrong</div>')
                    }
                }
            });
            return false; //stop the actual form post !important!

        });
    })
</script>