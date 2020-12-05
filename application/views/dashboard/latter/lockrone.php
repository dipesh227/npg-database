<?php
if (!$this->session->userdata('isslogin')) {
    redirect(base_url() . 'login');
} else {
    $this->load->view('./includes/css.php');
    $this->load->view('./includes/header.php');
?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-1 col-sm-1 colmd1">
                <?php $this->load->view('./dashboard/sidebar.php'); ?>
            </div>
            <div class="col-md-11 col-sm-11">
                <div class="container mt-3 text-center">
                    <form id="lockerone">
                        <div class="input-group-prepend">
                            <label for="locker no">फाइल सिलेक्ट करें </label></div>
                        <select name="lockerone" class="custom-select">
                            <option selected>फाइल सिलेक्ट करें </option>
                            <?php
                            foreach ($patraawali_detials as $patraawali_detials) {
                                echo $patraawali_detials = "<option value='$patraawali_detials->id'>$patraawali_detials->patraawali_detials</option>";
                            } ?>
                        </select>
                    </form>
                    <button id="add_file" class="btn btn-outline-primary mt-3">नई फाइल जोड़े</button>
                    <div id="select_data" class="container dbod mb-4 mt-3">

                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
    $this->load->view('./includes/footer.php');
}
?>
<script>
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
        $('#add_file').click(function() {
            $('#select_data').html(`
                <form id="aadfiledatabase" class="text-left mt-2">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="FileName">फाइल नाम </label>
                                <input type="text" class="form-control" id="FileName" placeholder="फाइल नाम डालें" name="FileName">
                                <span id="FileName_error" class="text-danger"></span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                            <label for="Lockr_Number">लॉकर नंबर</label>
                            <select name="Lockr_Number" class="custom-select">
                            <option selected>लॉकर नंबर चुने</option>
                            <?php
                            foreach ($locker_no as $locker_no) {
                                echo $locker_no = "<option value='$locker_no->locker_no'>$locker_no->locker_no</option>";
                            } ?>
                        </select>
                                <span id="Lockr_Number_error" class="text-danger"></span> </div>
                        </div>
                    </div>
                    <div class="row">
                    <div class="col-md-6">
                            <div class="form-group">
                            <label for="section">लॉकर सेक्शन </label>
                            <select name="section" class="custom-select">
                            <option selected>लॉकर सेक्शन चुने</option>
                            <?php
                            foreach ($section as $section) {
                                echo $section = "<option value='$section->section'>$section->section</option>";
                            } ?>
                        </select>
                                <span id="section_error" class="text-danger"></span> </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                            <label for="subsection">लॉकर सब-सेक्शन </label>
                            <select name="subsection" class="custom-select">
                            <option selected>लॉकर सब-सेक्शन चुने</option>
                            <?php
                            foreach ($subsection as $subsection) {
                                echo $subsection = "<option value='$subsection->subsection'>$subsection->subsection</option>";
                            } ?>
                        </select>
                                <span id="subsection_error" class="text-danger"></span> </div>
                        </div>
                    </div>
                    <div class="row">
                       
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="start">सुरुवाती वर्ष</label>
                                <select class="form-control" name="start" id="start">
                                    <option value="">वर्ष चुने </option>
                                    <option value="2015">2015  </option>
                                    <option value="2016">2016  </option>
                                    <option value="2017">2017  </option>
                                    <option value="2018">2018  </option>
                                    <option value="2019">2019  </option>
                                    <option value="2020">2020  </option>
                                    <option value="2021">2021  </option>
                                </select>
                                <span id="start_error" class="text-danger"></span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="end">अंतिम वर्ष</label>
                                <select class="form-control" name="end" id="end">
                                    <option value="">वर्ष चुने </option>
                                    <option value="2015">2015  </option>
                                    <option value="2016">2016  </option>
                                    <option value="2017">2017  </option>
                                    <option value="2018">2018  </option>
                                    <option value="2019">2019  </option>
                                    <option value="2020">2020  </option>
                                    <option value="2021">2021  </option>
                                </select>
                                <span id="_error" class="text-danger"></span>
                            </div>
                        </div>
                    </div>
                    <button type="submit" id="addfiletodatabase" name="addfiletodatabase" class="btn mb-3 btn-outline-primary btn-block btn-outline">जोड़े </button>
            </div>
            </form>`);
        })
    })
</script>
<form></form>