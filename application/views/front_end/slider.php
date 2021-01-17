<section id="sliderSection">
  <div class="row">
    <div class="col-lg-8 col-md-8 col-sm-8">
      <div class="slick_slider">
        <?php
        foreach ($slider as $sliderfetch) {
          echo '
          <div class="single_iteam">  
          <img src="data:image/jpg;base64,' . $sliderfetch->sliderpic . '" alt="pics" alt="">
            <div class="slider_article">
              <h2>'.$sliderfetch->name.'</h2>
            </div>
          </div>
          ';
        }
        ?>
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