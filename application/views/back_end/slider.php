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
                        <h1 class="m-0 text-dark">Slider</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Slider</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
        <main>
            <div class='container'>
                <div class='row justify-content-center'>
                    <div class='col-lg-12'>
                        <div class='card shadow-lg border-0 rounded-lg mb-5  '>
                            <div class="card-head">
                                <div class='col-md-12 border text-center'>
                                    <h1>Slider Section</h1>
                                </div>
                            </div>
                            <div class='card-body'>
                                <div class="table-responsive border p-3 mb-4">
                                    <table class="table text-center table-bordered table-striped " id="slidertb">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Image</th>
                                                <th>Delete</th>
                                            </tr>
                                        </thead>

                                        <?php
                                        $id = 1;
                                        foreach ($sliderpic as $sliderimg) {
                                            $spic=$sliderimg->sliderpic;
                                            echo $output = '<tr>';
                                            echo $output = "<td>$id</td>";
                                            echo $output = '<td><img class="rounded" style="height: 100px; width:auto" id="' . $id . '" src="data:image/jpeg;base64,' . base64_encode($spic) . '" alt=""></td>';
                                            echo '<td class="align-middle">
                                            <form action="" method="POST">
                                                <input type="hidden" name="delid" value="<?php echo $sliderid; ?>">
                                                <input type="submit" class="btn btn-danger" name="delslider" value="Delete">
                                            </form>
                                        </td>';
                                            echo $output = '</tr>';
                                            ++$id;
                                        }
                                        ?>
                                    </table>
                                </div>
                                <div class="card-footer">
                                    <form class="mb-4 border p-4" id="slideriminsert">
                                        <div class="form-group">
                                            <label for="InputFile">File input</label>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" name="sliderpic" id="sliderpic" required>
                                                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                                </div>
                                                <div class="input-group-append">
                                                    <button type="submit" class="input-group-text" name="addnew" id="addnew">Upload</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    <?php
    $this->load->view('./back_end/include/footer.php');
    $this->load->view('./back_end/include/footerjs.php');
} ?>
    <script>
        $(document).ready(function() {
            $("#slideriminsert").submit(function() {
                $.ajax({
                    type: "post",
                    url: "<?php echo base_url() ?>admin/slideriminsert",
                    enctype: 'multipart/form-data',
                    processData: false, // tell jQuery not to process the data
                    contentType: false, // tell jQuery not to set contentType,
                    dataType: 'json',
                    data: new FormData(this),
                    success: function(data) {
                        alert('Successful!');
                    }
                });
                // return false; //stop the actual form post !important!
            });
        })
    </script>