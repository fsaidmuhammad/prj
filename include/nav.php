<div class="banner-top">
      <div class="contact-bnr-w3-agile">
        <ul>
          
         <!-- <marquee><h1>PROFESSOR IYA ABUBAKAR COMMUNITY RESOURCE CENTER</h1></marquee>-->
        </ul>
      </div>
      <div class="clearfix"></div>
    </div>
<div class="w3_navigation">
    <div class="container">
      <nav class="navbar navbar-default">
        <div class="navbar-header navbar-left">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <h1><a class="navbar-brand" href="index.php">CRC <span>BAUCHI</span><p class="logo_w3l_agile_caption">FOR NORTH EAST ZONE</p></a></h1>
        </div>
        <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
          <nav class="menu menu--iris">
            <ul class="nav navbar-nav menu__list">
              <li class="menu__item menu__item--current"><a href="index.html" class="menu__link">Home</a></li>
              <li class="menu__item"><a href="#" class="menu__link scroll">About</a></li>
              <li class="menu__item"><a href="#" class="menu__link scroll">Courses</a></li>
              <li class="menu__item"><a href="#" class="menu__link scroll">Mission</a></li>
              <?php
              if (!isset($_SESSION['login_user'])) {
                ?>
              <li class="menu__item"><a href="register.php" class="menu__link scroll">Register</a></li>
              <li class="menu__item"><a href="login.php" class="menu__link scroll">Login</a></li>
            <?php } else { ?> 
              <li class="menu__item"><a href="login.php" class="menu__link scroll">Logout</a></li>
            <?php } ?>
            </ul>
          </nav>
        </div>
      </nav>

    </div>
  </div><br><br>