<?php
$this->load->view('./includes/css.php');
$this->load->view('./includes/header.php');
?>
<div class="container my-4 py-4 d-flex justify-content-between mx-auto row">
    <!-- <div class="col-md-6 col-lg-6 col-sm-6 col-xl-6 mb-4"> -->
    <div class="container logsed">
        <div class="card">
            <div class="card-header">
                <h2>Citizen registration</h2>
            </div>
            <div class="card-body">
                <form action="/action_page.php">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="First Name">First Name</label>
                                <input type="text" class="form-control" id="fname" placeholder="Enter First Name" name="fname">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="Last Name">Last Name</label>
                                <input type="text" class="form-control" id="lname" placeholder="Last Name" name="lname">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="Phone Number">Phone Number</label>
                                <input type="text" class="form-control" id="phone" placeholder="Phone Number" name="phone">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="Phone Number">Ward Number</label>
                                <select class="form-control" name="ward" id="ward">
                                    <option value="">Select Ward Number</option>
                                    <?php
                                    foreach ($ward_no as $row) {
                                        echo $ward_no = "<option value='$row->id'>$row->wardno</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="Phone Number">Area Name</label>
                                <select class="form-control" name="area" id="area">
                                    <option value="">Select Area Name</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="Phone Number">Image</label>
                                <input class="form-control" type="file" name="citizenpic" id="citizenpic">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="Phone Number">Citizen Image Preview</label>
                                <img class=" img-thumbnail" src="https://www.flaticon.com/svg/static/icons/svg/21/21104.svg" name="citizenpicdemo" id="citizenpicdemo">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="cpassword">Confirm Password</label>
                                <input type="password" class="form-control" id="cpassword" placeholder="Confirm Password" name="cpassword">
                            </div>
                        </div>
                    </div>
                    <div class="form-group form-check">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" name="remember"> Remember me
                        </label>
                    </div>
                    <button type="submit" class="btn btn-outline-primary btn-block btn-outline">Login</button>
            </div>
            </form>
            <div class="card-footer">Citizen Login -> <a href="../"> Click Here</a></div>
        </div>
    </div>
    <!-- </div> -->
</div>
</div>
<?php
$this->load->view('./includes/footer.php');
?>
<script>
    $(document).ready(function() {
        $('#ward').change(function() {
            var ward = $('#ward').val();

            if (ward != "") {
                $.ajax({
                    url: '<?php echo base_url() ?>citizen/areaname',
                    method: 'POST',
                    data: {
                        ward: ward
                    },
                    success: function(data) {
                        $('#area').html(data);
                    }
                })
            } else {
                $('#area').html(' <option value="">Select Ward No First</option>');
            }
        })
    })
</script>