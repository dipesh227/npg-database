<header id="header">
  <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
      <div class="header_top">
        <div class="header_top_left">
          <ul class="top_nav">
            <li><a href="<?php echo base_url() ?>">Home</a></li>
            <li><a href="<?php echo base_url() ?>about">About</a></li>
            <li><a href="<?php echo base_url() ?>contact">Contact</a></li>
          </ul>
        </div>
        <div class="header_top_right">
          <p id="demo">
            <script>
              var d = new Date();
              var months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
              var days = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
              document.getElementById("demo").innerHTML = d.getDate() + ' / ' + months[d.getMonth()] + ' / ' + d.getFullYear() + ' : ' + days[d.getDay()];
            </script>
          </p>
        </div>
      </div>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12">
      <div class="header_bottom">
        <div class="logo_area"><a href="<?php echo base_url() ?>" class="logo">
            <h3 class=" text-primary">Nagar <strong class=" text-warning">Panchayat</strong> Gularbhoj</h3>
          </a></div>
        <!-- <div class="logo_area"><a href="<?php echo base_url() ?>" class="logo"><img src="<?php echo base_url() ?>asset/images/logo.jpg" alt=""></a></div> -->
        <!-- <div class="add_banner"><a href="#"><img src="<?php echo base_url() ?>asset/images/addbanner_728x90_V1.jpg" alt=""></a></div> -->
      </div>
    </div>
  </div>
</header>

<!-- nav bar -->


<section id="navArea">
  <nav class="navbar navbar-inverse" role="navigation">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
    </div>
    <div id="navbar" class="navbar-collapse collapse">
      <ul class="nav navbar-nav main_nav">
        <li class="active"><a href="<?php echo base_url() ?>"><span class="fa fa-home desktop-home"></span><span class="mobile-show">Home</span></a></li>
        <li><a href="<?php echo base_url() ?>tender">Tenders</a></li>
        <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Government Scheam</a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="<?php echo base_url() ?>pmay">Pradhan mantri Aawash Yojana</a></li>
          </ul>
        </li>
        <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Ward Detials</a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="<?php echo base_url() ?>pmay">Ward 01</a></li>
            <li><a href="<?php echo base_url() ?>pmay">Ward 02</a></li>
            <li><a href="<?php echo base_url() ?>pmay">Ward 03</a></li>
            <li><a href="<?php echo base_url() ?>pmay">Ward 04</a></li>
            <li><a href="<?php echo base_url() ?>pmay">Ward 05</a></li>
            <li><a href="<?php echo base_url() ?>pmay">Ward 06</a></li>
            <li><a href="<?php echo base_url() ?>pmay">Ward 07</a></li>
          </ul>
        </li>
        <li><a href="<?php echo base_url() ?>">Chairman Cornar</a></li>
        <li><a href="<?php echo base_url() ?>">Exicutive Officer Cornar</a></li>
        <li><a href="<?php echo base_url() ?>contact">Citizen Cornar</a></li>
        <li><a href="<?php echo base_url() ?>contact">Site Map</a></li>
        <li><a href="<?php echo base_url() ?>contact">Stories</a></li>
      </ul>
    </div>
  </nav>
</section>