<!-- ======= Hero Section ======= -->
<div class="card-body d-flex justify-content-center">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <?php
            $active = "active";
            $id = 0;
            foreach ($slider as $sliderimg) {
                echo $output = ' <li data-target="#carouselExampleIndicators" data-slide-to="' . $id . '" class="' . $active . '"></li>
            
            ';
                $active = "";
                ++$id;
            }
            ?>
        </ol>
        <div class="carousel-inner">
            <?php
            $active = "active";
            foreach ($slider as $sliderimg) {
                $image = ($sliderimg->sliderpic);
                echo $output = '
                <div class="carousel-item  ' . $active . '">
                    <img class="d-block img-fluid" src="data:image/jpg;base64,' . $image . '"" alt="First slide">
                </div>
                ';
                $active = "";
            }
            ?>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>