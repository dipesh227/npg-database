<section id="contentSection">
    <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-8">
            <div class="left_content">
                <div class="fashion_technology_area">
                    <div class="fashion">
                        <div class="single_post_content">
                            <h2><span>Post By ULB</span></h2>
                            <ul class="business_catgnav wow fadeInDown">
                                <?php
                                foreach ($slider as $sliderfetch) {
                                    echo '
                        
                                <li>
                                    <figure class="bsbig_fig"> <a href="pages/single_page.html" class="featured_img"> <img alt="" src="data:image/jpg;base64,' . $sliderfetch->sliderpic . '"> <span class="overlay"></span> </a>
                                        <figcaption> <a href="pages/single_page.html">' . $sliderfetch->name . '</a> </figcaption>
                                        <p>' . $sliderfetch->name . '</p>
                                    </figure>
                                </li>';
                                } ?>
                            </ul>

                        </div>
                    </div>
                    <div class="technology">
                        <div class="single_post_content">
                            <h2><span>Tenders</span></h2>
                            <ul class="business_catgnav">
                                <?php
                                foreach ($slider as $sliderfetch) {
                                    echo '
                                <li>
                                    <figure class="bsbig_fig wow fadeInDown"> <a href="pages/single_page.html" class="featured_img"> <img alt="" src="data:image/jpg;base64,' . $sliderfetch->sliderpic . '"> <span class="overlay"></span> </a>
                                        <figcaption> <a href="pages/single_page.html">' . $sliderfetch->name . '</a> </figcaption>
                                        <p>' . $sliderfetch->name . '</p>
                                    </figure>
                                </li>';
                                } ?>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4">
            <aside class="right_content">
                <div class="single_sidebar">
                    <h2><span>Popular Post</span></h2>
                    <ul class="spost_nav">
                        <li>
                            <div class="media wow fadeInDown"> <a href="pages/single_page.html" class="media-left"> <img alt="" src="<?php echo base_url() ?>asset/images/post_img1.jpg"> </a>
                                <div class="media-body"> <a href="pages/single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 1</a> </div>
                            </div>
                        </li>
                        <li>
                            <div class="media wow fadeInDown"> <a href="pages/single_page.html" class="media-left"> <img alt="" src="<?php echo base_url() ?>asset/images/post_img2.jpg"> </a>
                                <div class="media-body"> <a href="pages/single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 2</a> </div>
                            </div>
                        </li>
                        <li>
                            <div class="media wow fadeInDown"> <a href="pages/single_page.html" class="media-left"> <img alt="" src="<?php echo base_url() ?>asset/images/post_img1.jpg"> </a>
                                <div class="media-body"> <a href="pages/single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 3</a> </div>
                            </div>
                        </li>
                        <li>
                            <div class="media wow fadeInDown"> <a href="pages/single_page.html" class="media-left"> <img alt="" src="<?php echo base_url() ?>asset/images/post_img2.jpg"> </a>
                                <div class="media-body"> <a href="pages/single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 4</a> </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="single_sidebar">
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#video" aria-controls="home" role="tab" data-toggle="tab">Video</a></li>

                    </ul>
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="category">
                            <div class="vide_area ">
                                <iframe width="100%" class="mb-3" height="250" src="http://www.youtube.com/embed/h5QWbURNEpA?feature=player_detailpage" frameborder="0" allowfullscreen></iframe>
                                <iframe width="100%" class="mb-3" height="250" src="http://www.youtube.com/embed/h5QWbURNEpA?feature=player_detailpage" frameborder="0" allowfullscreen></iframe>
                                <iframe width="100%" class="pb-3" height="250" src="http://www.youtube.com/embed/h5QWbURNEpA?feature=player_detailpage" frameborder="0" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single_sidebar wow fadeInDown">
                    <h2><span>Map</span></h2>
                    <div class="mapouter">
                        <div class="gmap_canvas"><iframe width="350" height="300" id="gmap_canvas" src="https://maps.google.com/maps?q=nagar%20panchayat%20gularbhoj&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://fmovies2.org">fmovies</a><br>
                            <style>
                                .mapouter {
                                    position: relative;
                                    text-align: right;
                                    height: 300px;
                                    width: 350px;
                                }
                            </style><a href="https://www.embedgooglemap.net">embedgooglemap.net</a>
                            <style>
                                .gmap_canvas {
                                    overflow: hidden;
                                    background: none !important;
                                    height: 300px;
                                    width: 350px;
                                }
                            </style>
                        </div>
                    </div>
                </div>
            </aside>
        </div>
        <div class="single_post_content">
            <h2><span>Photography</span></h2>
            <ul class="photograph_nav  wow fadeInDown">
                <?php
                foreach ($gallery as $gallerypic)
                    echo '
                    <li>
                        <div class="photo_grid">
                            <figure class="effect-layla"> <a class="fancybox-buttons" data-fancybox-group="button" href="data:image/jpg;base64,' . $gallerypic->pic . '" title="' . $gallerypic->name . '"> <img src="data:image/jpg;base64,' . $gallerypic->pic . '" alt="" /></a> </figure>
                        </div>
                    </li>
                    ';
                ?>
            </ul>
        </div>
    </div>
</section>