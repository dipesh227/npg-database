<div class="container my-4 py-4 d-flex justify-content-between mx-auto row">
    <div class="col-md-6 col-lg-6 col-sm-6 col-xl-6 mb-4">
        <div class="container logsed">
            <div class="card">
                <div class="card-header">
                    <h2>Citizen Login</h2>
                </div>
                <div class="card-body">
                    <span class="alert" id="fail"></span>
                    <form id="clogin">
                        <div class="form-group">
                            <label for="cemail">Email</label>
                            <input type="email" class="form-control" id="cemail" placeholder="Enter email" name="cemail">
                            <span id="email_error" class="text-danger"></span>
                        </div>
                        <div class="form-group">
                            <label for="cpassword">Password</label>
                            <input type="password" class="form-control" id="cpassword" placeholder="Enter password" name="cpassword">
                            <span id="password_error" class="text-danger"></span>
                        </div>
                        <div class="form-group form-check">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" name="remember"> Remember me
                            </label>
                        </div>
                        <?php
                        if ($this->session->userdata('isslogin')) {
                            echo ' <a href="' . base_url() . 'citizen/" class="btn btn-outline-primary btn-block btn-outline">Login</a>';
                        } else {
                            echo ' <button type="submit" id="cplogin" class="btn btn-outline-primary btn-block btn-outline">Login</button>';
                        }
                        ?>
                    </form>
                </div>
                <?php
                if ($this->session->userdata('isslogin')) {
                    echo '<div class="card-footer">Citizen Registration -> <a href="citizen"> Click Here</a></div>';
                } else {
                    echo '<div class="card-footer">Citizen Registration -> <a href="citizen/registration"> Click Here</a></div>';
                }
                ?>

            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-6 col-sm-6 col-xl-6">
        <div class="container logsed">
            <div class="card">
                <div class="card-header">
                    <h2>Staff Login</h2>
                </div>
                <div class="card-body">
                    <form action="/action_page.php">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                        </div>
                        <div class="form-group">
                            <label for="pwd">Password</label>
                            <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
                        </div>
                        <div class="form-group form-check">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" name="remember"> Remember me
                            </label>
                        </div>
                        <button type="submit" class="btn btn-outline-primary btn-block btn-outline">Submit</button>
                    </form>
                </div>
                <div class="card-footer"> Rregistration -> <a href="citizen-registration"> Click Here</a></div>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        $("#clogin").submit(function() {
            // alert('Successful!');
            $.ajax({
                type: "post",
                url: "<?php echo base_url() ?>citizen/login",
                enctype: 'multipart/form-data',
                processData: false, // tell jQuery not to process the data
                contentType: false, // tell jQuery not to set contentType,
                dataType: 'json',
                data: new FormData(this),
                success: function(data) {
                    if (data.error != '') {
                        if (data.email_error != '') {
                            $('#email_error').html(data.email_error)
                        } else {
                            $('#email_error').html('')
                        }
                        if (data.password_error != '') {
                            $('#password_error').html(data.password_error)
                        } else {
                            $('#password_error').html('')
                        }
                    }
                    if (data.success) {
                        location.href = '<?php echo base_url() ?>citizen';
                    }else{
                        $('#fail').html('Username And Password Is wrong')
                    }
                }
            });
            return false; //stop the actual form post !important!

        });
    })
</script>