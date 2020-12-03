<?php
$this->load->view('./includes/css.php');
$this->load->view('./includes/header.php');
?>
<div class="container-fluid mt-2">
    <div class="row">
        <div class="col-md-2 col-sm-2 text-center sidebar-nav">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs flex-column" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active outline" data-toggle="tab" href="#home">Home</a>
                </li>
                <li class="nav-item">
                    <div id="accordion">
                        <a class="collapsed nav-link" data-toggle="collapse" href="#collapseTwo">
                            PFMS
                        </a>
                        <div id="collapseTwo" class="collapse" data-parent="#accordion">
                            <ul class="nav nav-tabs flex-column" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#pfmstab">P.F.M.S Aawash</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#menu2">Menu 2</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#menu2">Menu 2</a>
                </li>
            </ul>
        </div>
        <div class="col-md-10 col-sm-10">
            <!-- Tab panes -->
            <div class="tab-content">
                <div id="home" class="container tab-pane active"><br>
                    <h3>HOME</h3>
                </div>
                <div id="pfmstab" class="container tab-pane fade"><br>
                    <?php $this->load->view('./citizen/pfmsawash.php', $awash); ?>
                </div>
                <div id="menu2" class="container tab-pane fade"><br>
                    <h3>Menu 2</h3>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
                </div>
            </div>
        </div>

    </div>
</div>
<?php
$this->load->view('./includes/footer.php');
?>