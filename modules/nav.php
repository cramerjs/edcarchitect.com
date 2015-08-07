<?php
/*
 * NAVIGATION MODULE for edcarchitect.com
 */
?>
<body>
    <header>
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-menu" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">
              ElvinDeeCramer
            </a>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="main-menu">
            <ul class="nav navbar-nav">
              <?php if ($action == 'design') { ?>
                  <li><a href="index.php">Home</a></li>
                  <li class="active"><a href=".">Design</a></li>
                  <li><a href="index.php?action=about">About</a></li>
              <?php } elseif ($action == 'about') { ?>
                  <li><a href="index.php">Home</a></li>
                  <li><a href="index.php?action=design">Design</a></li>
                  <li class="active"><a href=".">About</a></li>
              <?php } else { ?>
                  <li class="active"><a href=".">Home</a></li>
                  <li><a href="index.php?action=design">Design</a></li>
                  <li><a href="index.php?action=about">About</a></li>
              <?php } ?>
            </ul>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>
    </header>

    <br />
