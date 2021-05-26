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
                        <h1 class="m-0 text-dark">Tender</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Tender</li>
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
                                    <h1>Tender Section</h1>
                                </div>
                                <button type="button" class="btn btn-outline-info btn-sm mt-2 ml-3" data-toggle="modal" data-target="#exampleModal">
                                    Add Records
                                </button>
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-xl" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Add Records</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>

                                            <!-- form start -->
                                            <form role="form" class="mb-4 border p-4" id="tenderiminsert">
                                                <div class="modal-body">
                                                    <div class="form-group">
                                                        <label for="tenderpic1">File input</label>
                                                        <div class="input-group">
                                                            <div class="custom-file">
                                                                <input type="file" class="custom-file-input" id="tenderpic1" name='tenderpic1' >
                                                                <label class="custom-file-label" for="tenderpic1" id='tenderpic12'>Choose file</label>
                                                            </div>
                                                            <div class="input-group-append">
                                                                <button type="submit" class="input-group-text" id="">Upload</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                            <!-- /.card-body -->
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class='card-body'>
                                <div class="table-responsive border p-3 mb-4">
                                    <div class="row">
                                        <div class="col-md-12 mt-4">
                                            <div class="table-responsive">
                                                <table class="table" id="records">
                                                    <thead>
                                                        <tr>
                                                            <th>ID</th>
                                                            <th>File</th>
                                                            <th>Name</th>
                                                            <th>Date Of Upload</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="button" class="btn btn-outline-info btn-sm mt-2 ml-3" data-toggle="modal" data-target="#exampleModal">
                                    Add Records
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Edit Record Modal -->
            <div class="modal fade" id="edit_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Edit Record Modal</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <!-- Edit Record Form -->
                            <form method="post" id="edit_form">
                                <input type="hidden" id="edit_record_id" name="edit_record_id" value="">
                                <div class="form-group">
                                    <label for="">Name</label>
                                    <input type="text" id="edit_name" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="edit_email">Choose Tender File</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="edit_email" id="edit_email">
                                            <label class="custom-file-label" for="edit_email">Select File</label>
                                        </div>
                                    </div>
                                </div>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary" id="update">Update</button>
                            </form>
                            <div class="modal-footer">
                                <img class="rounded" style="height: 100px; width:auto" id="preview_pic">
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
        fetchdata();
        $("#tenderiminsert").submit(function() {
            var file = $('#tenderpic1').val();
            if (file == "") {
                toastr["error"]("Please Select The file");
                return false;
            } else {
                
                $.ajax({
                    type: "POST",
                    url: "<?php echo base_url() ?>admin/tenderiminsert",
                    enctype: 'multipart/form-data',
                    processData: false, // tell jQuery not to process the data
                    contentType: false, // tell jQuery not to set contentType,
                    dataType: 'json',
                    data: new FormData(this),
                    success: function(data) {
                        if (data.responce == "success") {
                            
                            $('#records').DataTable().destroy();
                            $("#exampleModal").removeClass("in");
                            $(".modal-backdrop").remove();
                            $("#exampleModal").hide();
                            toastr["success"](data.message);
                            fetchdata();
                        } else {
                            toastr["error"](data.message);
                        }
                    },
                    error: function(data) {
                        
                        toastr["error"]('Went Some Thing Wrong');
                    }
                });
                return false;
                $("#tenderiminsert").reset();
            }
        })


        function fetchdata() {
            $.ajax({
                url: "<?php echo base_url(); ?>admin/tenderfetch",
                type: "post",
                dataType: "json",
                success: function(data) {
                    if (data.responce == "success") {
                        var i = "1";
                        $('#records').DataTable({
                            "data": data.posts,
                            "responsive": true,
                            dom: "<'row'<'col-sm-12 col-md-4'l><'col-sm-12 col-md-4'B><'col-sm-12 col-md-4'f>>" +
                                "<'row'<'col-sm-12'tr>>" +
                                "<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
                            buttons: [
                                'copy', 'excel', 'pdf'
                            ],
                            "columns": [{
                                    "render": function() {
                                        return a = i++;
                                    }
                                },
                                {
                                    // "data": "sliderpic"
                                    "render": function(data, type, row, meta) {
                                        var a = `
                                        <object type="application/pdf" data="data:application/pdf;base64,${row.file}"><img class="rounded" style="height: 40px; width:auto" id="" src="<?php echo base_url() ?>asset/img/pdf-icon.png" alt="file here"></object>
                                    `;
                                        return a;

                                    }
                                },
                                {
                                    "data": "tender_name"
                                },
                                {
                                    "data": "date"
                                },

                             
                                {
                                    "render": function(data, type, row, meta) {
                                        var a = `
                                    <a href="#" value="${row.id}" id="del" class="btn btn-sm btn-outline-danger"><i class="fas fa-trash"></i></a>
                                    <a href="#" value="${row.id}" id="edit" class="btn btn-sm btn-outline-success"><i class="fas fa-edit"></i></a>
                            `;
                                        return a;
                                    }
                                }
                            ]
                        });
                    } else {
                        toastr["error"](data.message);
                    }

                },
                error: function(data) {
                    toastr["error"]('Went Something Wrong');
                }
            });

        }

    })
    $("#edit_form").submit(function() {
        toastr["error"](data.message);
        if (edit_record_id == "" || edit_name == "" || edit_email == "") {
            return false;
        } else {
            alert("Both field is required");
            $.ajax({
                type: "post",
                url: "<?php echo base_url(); ?>admin/update",
                enctype: 'multipart/form-data',
                processData: false, // tell jQuery not to process the data
                contentType: false, // tell jQuery not to set contentType,
                dataType: 'json',
                data: new FormData(this),
                success: function(data) {
                    if (data.responce == "success") {
                        $('#records').DataTable().destroy();
                        fetch();
                        $('#edit_modal').modal('hide');
                        toastr["success"](data.message);
                    } else {
                        toastr["error"](data.message);
                    }
                },
                error: function(data) {
                    toastr["error"]('Went Something Wrong');
                }
            });
            return false;
        }
        return false;
    });
    $('#tenderpic1').change(function() {
        $('#tenderpic12').text($('#tenderpic1').val().split('\\').pop())
    });


    $(document).on("click", "#edit", function(e) {
        e.preventDefault();

        var edit_id = $(this).attr("value");
        // alert(edit_id)

        $.ajax({
            url: "<?php echo base_url(); ?>admin/edit",
            type: "post",
            dataType: "json",
            data: {
                edit_id: edit_id
            },
            success: function(data) {
                if (data.responce == "success") {
                    $('#edit_modal').modal('show');
                    $("#edit_record_id").val(data.post.id);
                    $("#edit_name").val(data.post.name);
                    $('#preview_pic').attr("src", 'data:file/jpg;base64,' + data.post.sliderpic + '');

                } else {
                    toastr["error"](data.message);
                }
            }
        });

    });

    $(document).on("click", "#del", function(e) {
        e.preventDefault();

        var del_id = $(this).attr("value");

        const swalWithBootstrapButtons = Swal.mixin({
            customClass: {
                confirmButton: 'btn btn-success',
                cancelButton: 'btn btn-danger mr-2'
            },
            buttonsStyling: false
        })

        swalWithBootstrapButtons.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Yes, delete it!',
            cancelButtonText: 'No, cancel!',
            reverseButtons: true
        }).then((result) => {
            if (result.value) {

                $.ajax({
                    url: "<?php echo base_url(); ?>admin/delete",
                    type: "post",
                    dataType: "json",
                    data: {
                        del_id: del_id
                    },
                    success: function(data) {
                        if (data.responce == "success") {
                            $('#records').DataTable().destroy();
                            fetch();
                            swalWithBootstrapButtons.fire(
                                'Deleted!',
                                'Your file has been deleted.',
                                'success'
                            );
                        } else {
                            swalWithBootstrapButtons.fire(
                                'Cancelled',
                                'Your imaginary file is safe :)',
                                'error'
                            );
                        }

                    }
                });



            } else if (
                /* Read more about handling dismissals below */
                result.dismiss === Swal.DismissReason.cancel
            ) {
                swalWithBootstrapButtons.fire(
                    'Cancelled',
                    'Your imaginary file is safe :)',
                    'error'
                )
            }
        });

    });
</script>