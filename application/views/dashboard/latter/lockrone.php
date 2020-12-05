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
            <div class="col-md-10 col-sm-10">
                <div class="container mt-3">
                    <form id="lockerone">
                        <div class="input-group-prepend">
                            <label for="locker no">सेक्शन सिलेक्ट करें </label></div>
                        <select name="lockerone" class="custom-select">
                            <option selected>सेक्शन सिलेक्ट करें </option>
                            <?php
                            foreach ($lockr_no as $row) {
                                echo $lockr_no = "<option value='$row->subsection'>सेक्शन $row->section, सब-सेक्शन -$row->subsection</option>";
                            } ?>
                            <option value="volvo">Volvo</option>
                            <option value="fiat">Fiat</option>
                            <option value="audi">Audi</option>
                        </select>
                    </form>
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
    })
</script>