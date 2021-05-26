<?php
$this->load->view('./front_end/includes/css.php');
$this->load->view('./front_end/includes/header.php');
$this->load->view('./front_end/scroll.php');
?>
<section id="sliderSection">
  <div class="row">
  <div class="col-lg-8 col-md-8 col-sm-8">
        <div class="left_content">
          <div class="contact_area">
            <h2>Contact Us</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labolore magna aliqua. Ut enim ad minim veniam. Lorem ipsum dosectetur adipisicing elit, sed do.Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            <form action="#" class="contact_form">
              <input class="form-control" type="text" placeholder="Name*">
              <input class="form-control" type="email" placeholder="Email*">
              <textarea class="form-control" cols="30" rows="10" placeholder="Message*"></textarea>
              <input type="submit" value="Send Message">
            </form>
          </div>
        </div>
      </div>
    <div class="col-lg-4 col-md-4 col-sm-4">
      <div class="latest_post">
        <h2><span>Latest post </span></h2>
        <div class="latest_post_container">
          <div id="prev-button"><i class="fa fa-chevron-up"></i></div>
          <ul class="latest_postnav">
            <?php
            foreach ($slider as $sliderfetch) {
              echo '
              <li>
                <div class="media"> <a href="pages/' . $sliderfetch->name . '" class="media-left"> <img alt="" src="data:image/jpg;base64,' . $sliderfetch->sliderpic . '"> </a>
                  <div class="media-body"> <a href="pages/' . $sliderfetch->name . '" class="catg_title">' . $sliderfetch->name . '</a> </div>
                </div>
              </li>              
              ';
            }
            ?>
          </ul>
          <div id="next-button"><i class="fa  fa-chevron-down"></i></div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php
$this->load->view('./front_end/content.php');
$this->load->view('./front_end/includes/footer.php');
$this->load->view('./front_end/includes/js.php');
