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
      <div class="section-title">
        <h1>title</h1>
      </div>

      <div class="section-sub-title">
        <h2>sub-title</h2>
      </div>

      <div class="section-text">
        <h2>title</h2>
        <p>texttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttt</p>
      </div>

      <div class="section-text-two-colum">
        <h2>title</h2>
        <p>texttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttt望青春的日子里留下的都是美好回忆希望青春的日子里留下的都是美好回忆希望青春的日子里留下的都是美好回忆希望青春的日子里留下的都是美好回忆希望青春的日子里留下的都是美好回忆希望青春的日子里留下的都是美好回忆希望青春的日子里留下的都是美好回忆希望青春的日子里留下的都是美好回忆希望青春的日子里留下的都是美好回忆希望青春的日子里留下的都是美好回忆希望青春的日子里留下的都是美好回忆希望青春的日子里留下的都是美好回忆希望青春的日子里留下的都是美好回忆希望青春的日子里留下的都是美好回忆希望青春的日子里留下的都是美好回忆希望青春的日子里留下的都是美好回忆希望青春的日子里留下的都是美好回忆希望青春的日子里留下的都是美好回忆</p>
      </div>

      <div class="section-text-media left">
        <h2>title</h2>
        <div class="text">texttexttex ttexttext texttexttexttextte xttexttexttextt exttexttextt exttexttexttexttext texttexttextte xttexttexttex ttextte xttext</div>
        <div class="media">
          <img src="../html/images/teacher.jpg" />
        </div>
      </div>

      <div class="section-text-media right">
        <h2>title</h2>
        <div class="text">texttexttex ttexttext texttexttexttextte xttexttexttextt exttexttextt exttexttexttexttext texttexttextte xttexttexttex ttextte xttext</div>
        <div class="media">
          <img src="../html/images/teacher.jpg" />
        </div>
      </div>


      <div class="media-two-colum">
        <h2>title</h2>
        <div class="media">
          <img src="../html/images/teacher.jpg" />
        </div>
        <div class="media">
          <img src="../html/images/teacher.jpg" />
        </div>
      </div>

      <div class="section-media">
        <h2>title</h2>
        <div class="media">
          <img src="../html/images/teacher.jpg" />
        </div>
      </div>

      <div class="section-six-colum">
        <h2>title</h2>
        <div class="six-colum row">
          <img class="col-md-2 col-md-2" src="../html/images/teacher.jpg" />
          <img class="col-md-2 col-md-2" src="../html/images/teacher.jpg" />
          <img class="col-md-2 col-md-2" src="../html/images/teacher.jpg" />
          <img class="col-md-2 col-md-2" src="../html/images/teacher.jpg" />
          <img class="col-md-2 col-md-2" src="../html/images/teacher.jpg" />
          <img class="col-md-2 col-md-2" src="../html/images/teacher.jpg" />
          <img class="col-md-2 col-md-2" src="../html/images/teacher.jpg" />
          <img class="col-md-2 col-md-2" src="../html/images/teacher.jpg" />
          <img class="col-md-2 col-md-2" src="../html/images/teacher.jpg" />
          <img class="col-md-2 col-md-2" src="../html/images/teacher.jpg" />
          <img class="col-md-2 col-md-2" src="../html/images/teacher.jpg" />
          <img class="col-md-2 col-md-2" src="../html/images/teacher.jpg" />
          <img class="col-md-2 col-md-2" src="../html/images/teacher.jpg" />
          <img class="col-md-2 col-md-2" src="../html/images/teacher.jpg" />
          <img class="col-md-2 col-md-2" src="../html/images/teacher.jpg" />
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
