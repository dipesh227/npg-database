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
                <form id="citizenregister">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="First Name">First Name</label>
                                <input type="text" class="form-control" id="fname" placeholder="Enter First Name" name="fname">
                                <span id="fname_error" class="text-danger"></span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="Last Name">Last Name</label>
                                <input type="text" class="form-control" id="lname" placeholder="Last Name" name="lname">
                                <span id="lname_error" class="text-danger"></span> </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                                <span id="email_error" class="text-danger"></span></div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="Phone Number">Phone Number</label>
                                <input type="text" class="form-control" id="phone" placeholder="Phone Number" name="phone">
                                <span id="phone_error" class="text-danger"></span>
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
                                <span id="ward_error" class="text-danger"></span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="Phone Number">Area Name</label>
                                <select class="form-control" name="area" id="area">
                                    <option value="">Select Area Name</option>
                                </select>
                                <span id="area_error" class="text-danger"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="Phone Number">Image</label>
                                <input class="form-control" type="file" name="citizenpic" id="citizenpic" required>
                                <span id="citizenpic_error" class="text-danger"></span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
                                <span id="password_error" class="text-danger"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="citizenpicdemo">Citizen Image Preview</label>
                                <div id="selectpicdemo">
                                    <img class=" img-thumbnail citizenpicdemo" src="https://www.flaticon.com/svg/static/icons/svg/21/21104.svg" name="citizenpicdemo" id="citizenpicdemo">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="cpassword">Confirm Password</label>
                                <input type="password" class="form-control" id="cpassword" placeholder="Confirm Password" name="cpassword">
                                <span id="cpassword_error" class="text-danger"></span> </div>
                        </div>
                    </div>
                    <div class="form-group form-check">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" name="remember"> Remember me
                        </label>
                    </div>
                    <button type="submit" id="citizenregisterbutton" name="citizenregisterbutton" class="btn btn-outline-primary btn-block btn-outline">Login</button>
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
    const impFile = document.getElementById("citizenpic");
    const previewCon = document.getElementById("selectpicdemo");
    const previewImage = previewCon.querySelector(".citizenpicdemo");
    impFile.addEventListener("change", function() {
        const file = this.files[0];
        // console.log(file);
        if (file) {
            const reader = new FileReader();
            reader.addEventListener("load", function() {
                previewImage.setAttribute("src", this.result);
            });
            reader.readAsDataURL(file);
        }
    })
    $(document).ready(function() {
        // areaname
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

        // submit form
        $("#citizenregister").submit(function() {
            $.ajax({
                type: "post",
                url: "<?php echo base_url() ?>citizen/citizenregister",
                enctype: 'multipart/form-data',
                processData: false, // tell jQuery not to process the data
                contentType: false, // tell jQuery not to set contentType,
                dataType: 'json',
                data: new FormData(this),
                success: function(data) {
                    if (data.error != '') {
                        if (data.fname_error != '') {
                            $('#fname_error').html(data.fname_error)
                        } else {
                            $('#fname_error').html('')
                        }
                        if (data.lname_error != '') {
                            $('#lname_error').html(data.lname_error)
                        } else {
                            $('#lname_error').html('')
                        }
                        if (data.email_error != '') {
                            $('#email_error').html(data.email_error)
                        } else {
                            $('#email_error').html('')
                        }
                        if (data.phone_error != '') {
                            $('#phone_error').html(data.phone_error)
                        } else {
                            $('#phone_error').html('')
                        }
                        if (data.ward_error != '') {
                            $('#ward_error').html(data.ward_error)
                        } else {
                            $('#ward_error').html('')
                        }
                        if (data.area_error != '') {
                            $('#area_error').html(data.area_error)
                        } else {
                            $('#area_error').html('')
                        }
                        if (data.citizenpic_error != '') {
                            $('#citizenpic_error').html(data.citizenpic_error)
                        } else {
                            $('#citizenpic_error').html('')
                        }
                        if (data.password_error != '') {
                            $('#password_error').html(data.password_error)
                        } else {
                            $('#password_error').html('')
                        }
                        if (data.cpassword_error != '') {
                            $('#cpassword_error').html(data.cpassword_error)
                        } else {
                            $('#cpassword_error').html('')
                        }
                    }
                    if (data.success) {
                        // alert('Successful!');
                        location.href = '<?php echo base_url() ?>citizen';
                    }
                }   
            });
            return false; //stop the actual form post !important!

        });
    });
</script>