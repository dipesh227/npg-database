<?php
if ($this->session->userdata('isslogin')) {
  redirect(base_url() . 'admin');
} else { ?>

  <!DOCTYPE html>
  <html>

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin Log in</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url() ?>asset/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="<?php echo base_url() ?>asset/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url() ?>asset/dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  </head>

  <body class="hold-transition login-page">
    <div class="login-box">
      <div class="login-logo">
        <a href="<?php echo base_url() ?>">Nagar Panchayt Gularbhoj</a><br>Admin Login
      </div>
      <!-- /.login-logo -->
      <div class="card">
        <div class="card-body login-card-body">
          <p class="login-box-msg">Sign in Here</p>
          <form id="clogin">
            <span id="fail"></span>
            <div class="input-group">
              <br>
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-user"></span>
                </div>
              </div>
              <input type="text" class="form-control" id="user_name" placeholder="User Name" name="user_name">
            </div>
            <small id="user_name_error" class=" text-danger"></small>
            <div class="mt-3 input-group">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-lock"></span>
                </div>
              </div>
              <input type="password" class="form-control" id="cpassword" placeholder="Password" name="cpassword">
            </div>
            <small id="password_error" class="mb-3 text-danger"></small>
            <div class="mt-3">
              <button type="submit" id="cplogin" class="btn btn-outline-primary btn-block">Sign In</button>
            </div>
            <!-- /.col -->

          </form>
        </div>
        <!-- /.login-card-body -->
      </div>
    </div>
    <!-- /.login-box -->

    <!-- jQuery -->
    <script src="<?php echo base_url() ?>asset/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?php echo base_url() ?>asset/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo base_url() ?>asset/dist/js/adminlte.min.js"></script>

  </body>

  </html>
  <script>
    $(document).ready(function() {
      $("#clogin").submit(function() {
        $.ajax({
          type: "post",
          url: "<?php echo base_url() ?>admin/check_login_data",
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
              location.href = '<?php echo base_url() ?>admin';
            } else {
              $('#fail').html('<div class="alert alert-danger">Username And Password Is wrong</div>')
            }
          }
        });
        return false; //stop the actual form post !important!

      });
    })
  </script><?php
          }
            ?>