<?php
$this->load->view('./includes/css.php');
$this->load->view('./includes/header.php');
?>
<div class="container-fluid mt-2">
    <div class="row">
    <?php $this->load->view('./citizen/sidebar.php'); ?>
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