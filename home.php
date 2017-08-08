<?php

  // Generate CSS from less files
  try{
    require('core/php/libraries/less.php/lessc.inc.php');
    $less = new lessc;
    unlink('style.css');
    $less->checkedCompile("sekkei.less", "style.css");
  } catch (Exception $e) {
    print '<pre>' . $e->getMessage() . '</pre>';
    die();
  }

?>

<!DOCTYPE html>
<!--[if IEMobile 7]><html class="iem7" xml:lang="fr" lang="fr" dir="ltr"><![endif]-->
<!--[if lte IE 6]><html class="lt-ie9 lt-ie8 lt-ie7" xml:lang="fr" lang="fr" dir="ltr"><![endif]-->
<!--[if (IE 7)&(!IEMobile)]><html class="lt-ie9 lt-ie8" xml:lang="fr" lang="fr" dir="ltr"><![endif]-->
<!--[if IE 8]><html class="lt-ie9" xml:lang="fr" lang="fr" dir="ltr"><![endif]-->
<!-- css3-mediaqueries.js for IE less than 9 -->
<!--[if (gte IE 9)|(gt IEMobile 7)]><!--><html lang="fr" xml:lang="fr" dir="ltr"><!--<![endif]-->
<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<![endif]-->
<head>
  <title>Luisina</title>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=7; IE=EDGE" />
  <meta name="description" content=""/>
  <meta name="keywords" content=""/>
  <link rel="shortcut icon" href="images/favicon.png" type="image/png" />
  <link href="style.css" rel="stylesheet" type="text/css" />
  <link href="smooth.css" rel="stylesheet" type="text/css" />
  <meta name="viewport" content="width=device-width">
  <script type="text/javascript" src="js/jquery.js"></script>

  <script type="text/javascript" src="js/respond.src.js"></script>
  <script type="text/javascript" src="js/jquery.selectbox-0.2.min.js"></script>
  <script type="text/javascript" src="js/iscroll.js"></script>
    <script type="text/javascript" src="plugins/smooth.js"></script>
</head>
  <body class="front not-logged-in">
    <div id="page" class="container">

      <!-- HEADER -->
      <header id="header">
        <a href="#" class="logo"><img src="../html/images/logo.png" /></a>
        <div class="main-menu">
          <ul class="main-nav">
            <li class="list"><a href="#">About us</a></li>
            <li class="list"><a href="#">News</a></li>
            <li class="list"><a href="#">Downloads</a></li>
            <li class="list"><a href="#">Contact Us</a></li>
          </ul>
        </div>
        <div class="language">
          <ul class="language-nav">
            <li class="list"><a href="#">EN</a></li>
            <li class="list"><a href="#">CN</a></li>
          </ul>
        </div>
      </header>


      <!-- MAIN -->
      <div class="banner">
        <img src="../html/images/banner.jpg">
      </div>

      <div class="slide-show">
        <img src="../html/images/teacher.jpg" />
      </div>

      <div class="about-tuzki">
        <div>
          <img src="../html/images/tuzki_tie.png">
        </div>
        <div class="text">
          <h2>About Tuzki</h2>
          <p>希望青春的日子里留下的都是美好回忆希望青春的日子里留下的都是美好回忆希望青春的日子里留下的都是美好回忆希望青春的日子里留下的都是美好回忆希望青春的日子里留下的都是美好回忆希望青春的日子里留下的都是美好回忆希望青春的日子里留下的都是美好回忆希望青春的日子里留下的都是美好回忆希望青春的日子里留下的都是美好回忆希望青春的日子里留下的都是美好回忆希望青春的日子里留下的都是美好回忆希望青春的日子里留下的都是美好回忆希望青春的日子里留下的都是美好回忆希望青春的日子里留下的都是美好回忆希望青春的日子里留下的都是美好回忆希望青春的日子里留下的都是美好回忆希望青春的日子里留下的都是美好回忆希望青春的日子里留下的都是美好回忆</p>
          <a href="#" class="read_more">Read More</a>
        </div>
      </div>

      <div class="latest-news row">
        <div class="span3 col-md-3 col-sm-3 col-xs-6  ">
          <div class="title">
            <h2>latest-news</h2>
          </div>
          <img src="../html/images/tian.jpg">
        </div>
        <div class="span3 col-md-3 col-sm-3 col-xs-6 ">
          <div class="title">
            <h3>latest-news</h3>
          </div>
          <img src="../html/images/tian.jpg">
        </div>
        <div class="span3 col-md-3 col-sm-3 col-xs-6 ">
          <div class="title">
            <h3>latest-news</h3>
          </div>
          <img src="../html/images/tian.jpg">
        </div>
        <div class="span3 col-md-3 col-sm-3 col-xs-6 ">
          <div class="title">
            <h3>latest-news</h3>
          </div>
          <img src="../html/images/tian.jpg">
        </div>
      </div>


      <div class="latest-downloads row">
        <div class="span3 col-md-3 col-sm-3 col-xs-6 ">
          <div class="title">
            <h3>latest-downloads</h3>
          </div>
          <img src="../html/images/tian.jpg">
        </div>
        <div class="span3 col-md-3 col-sm-3 col-xs-6 ">
          <div class="title">
            <h3>latest-downloads</h3>
          </div>
          <img src="../html/images/tian.jpg">
        </div>
        <div class="span3 col-md-3 col-sm-3 col-xs-6 ">
          <div class="title">
            <h3>latest-downloads</h3>
          </div>
          <img src="../html/images/tian.jpg">
        </div>
        <div class="span3 col-md-3 col-sm-3 col-xs-6 ">
          <div class="title">
            <h2>latest-downloads</h2>
          </div>
          <img src="../html/images/tian.jpg">
        </div>
      </div>

      <!-- FOOTER -->
      <footer id="footer">
        <div class="foot-icon">
          <p>The official tuzki social network</p>
          <ul class="foot-icon-nav">
            <li> <a class="facebook" href="#">facebook</a></li>
            <li> <a class="facebook" class="facebook" href="#">facebook</a></li>
            <li> <a class="facebook" href="#">facebook</a></li>
            <li> <a class="facebook" href="#">facebook</a></li>
          </ul>
          <p>The official tuzki social network</p>
          <ul class="foot-icon-nav">
            <li> <a class="facebook" href="#">facebook</a></li>
            <li> <a class="facebook" href="#">facebook</a></li>
            <li> <a class="facebook" href="#">facebook</a></li>
            <li> <a class="facebook" href="#">facebook</a></li>
          </ul>
        </div>

        <div class="icp">
          <p>icpcipcipccccccccc</p>
          <p>pppppppp</p>
          <a href="#">homepage</a>
        </div>
      </footer>

    </div>
    <script type="text/javascript" src="js/swiper.min.js"></script>
  </body>
</html>
