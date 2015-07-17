<?php
include 'modules/head.php';
include 'modules/nav.php';
?>

<main class="container">
    <!-- <div class="row">
      <div class="col-md-2 col-md-offset-5 text-center">
        <img src="../images/home_logo.jpg" alt="EDCArchitectLogo" title="EDCArchitectLogo" id='home-logo'/>
      </div>
    </div> -->

  <div id="home-carousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#home-carousel" data-slide-to="0" class="active"></li>
      <li data-target="#home-carousel" data-slide-to="1"></li>
      <li data-target="#home-carousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="images/nsboa3.jpg" alt="NVS Board of Architecture">
      </div>
      <div class="item">
        <img src="images/nsboa.jpg" alt="NVS Board of Architecture">
      </div>
      <!-- <div class="item">
        <img src="images/45th_south.jpg" alt="45th South">
      </div> -->
    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#home-carousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#home-carousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</main>

<div class="space-12"></div>

<?php include 'modules/footer.php'; ?>
