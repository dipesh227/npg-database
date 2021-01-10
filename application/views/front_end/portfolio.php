<!-- ======= Portfolio Section ======= -->
<section id="portfolio" class="portfolio">
    <div class="container">

        <div class="section-title" data-aos="zoom-out">
            <h2>Portfolio</h2>
            <p>What we've done</p>
        </div>

        <ul id="portfolio-flters" class="d-flex justify-content-end" data-aos="fade-up">
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-app">App</li>
            <li data-filter=".filter-card">Card</li>
            <li data-filter=".filter-web">Web</li>
        </ul>
        <div class="row portfolio-container" data-aos="fade-up">
            <?php
            foreach ($gallery as $galleryimg) {
                $image = ($galleryimg->pic);
                echo $output = '<div class="col-lg-4 col-md-6 portfolio-item filter-app">
                <div class="portfolio-img">
                <img src="data:image/jpg;base64,' . $image . '" class="img-fluid" alt="">
                 </div>
                <div class="portfolio-info">
                    <h4>App 1</h4>
                    <p>App</p>
                    <a href="data:image/jpg;base64,' . $image . '" data-gall="portfolioGallery" class="venobox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
                    <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                </div>
            </div>';
                $active = "";
            }
            ?>
        </div>
    </div>
</section><!-- End Portfolio Section -->