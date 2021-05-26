<?php
$this->load->view('./front_end/includes/css.php');
$this->load->view('./front_end/includes/header.php');
$this->load->view('./front_end/scroll.php');
?>
<style>
    .a-download {
        background: #fefefe;
        width: 90%;
        display: block;
        margin: 15px 30px;
        cursor: pointer;
        padding: 5px 15px;
        -webkit-transition: background 0.6s;
        transition: background 0.6s;
        text-decoration: none;
    }

    .a-download .pdf {
        background-image: url("<?php echo base_url() ?>asset/img/pdf-icon.png");
        background-repeat: no-repeat;
        margin-top: -24px;
        height: 50px;
        width: 50px;
        background-size: 50px 50px;
        background-position: center right;
        float: right;
        display: block;
    }

    .a-download span {
        font-size: 16px;
        font-family: "Oswald", sans-serif;
        font-weight: 100;
        -webkit-transition: background 0.6s;
        transition: background 0.6s;
        padding: 0;
        margin: 0;
    }

    .a-download small {
        font-family: Verdana, sans-serif;
        font-size: 11px;
        padding: 0;
        margin: 0;
    }

    .a-download span {
        font-size: 16px;
        font-family: "Oswald", sans-serif;
        font-weight: 100;
        -webkit-transition: background 0.6s;
        transition: background 0.6s;
        padding: 0;
        margin: 0;
    }

    element.style {
        visibility: visible;
        animation-delay: 0.5s;
        animation-name: zoomIn;
    }

    .services h3,
    .testimonials h3,
    .about h3,
    .team h3,
    .pricing-plans h3,
    h3.title,
    .gallery h3,
    .mail h3 {
        font-size: 2.5em;
        color: #212121;
        text-align: center;
        position: relative;
        padding-bottom: 0.5em;
        letter-spacing: 0px;
    }

    element.style {
        background: #eee;
        min-height: 430px;
    }

    /* .container {
        padding-right: 15px;
        padding-left: 15px;
        margin-right: auto;
        margin-left: auto;
    } */

    /* @media (min-width: 1200px) {
        .container {
            width: 1170px;
        }
    }

    @media (min-width: 992px) {
        .container {
            width: 970px;
        }
    }

    @media (min-width: 768px) {
        .container {
            width: 750px;
        }
    } */
</style>
<section id="sliderSection">
    <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-8">
            <div class="left_content">
                <div class="contact_area">
                    <div class="about">
                        <div class="container" style="background: #eee;min-height:430px">
                            <h3 class="animated wow zoomIn animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: zoomIn;">निविदा</h3>
                            <div class="row">
                                <div class="col-sm-12">
                                    <a class="row a-download" href="Handler.ashx?id=f745b77c-83ad-4a3a-85d0-d0850f91ef76">
                                        <span>
                                            नगर निगम रुद्रपुर क्षेत्र अंतर्गत 03 सिविल निर्माण कार्य ई निविदा सूचना
                                        </span>
                                        <br />
                                        <small>18/05/2021</small>
                                        <span class="pdf">&nbsp;</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<?php
$this->load->view('./front_end/content.php');
$this->load->view('./front_end/includes/footer.php');
$this->load->view('./front_end/includes/js.php');
