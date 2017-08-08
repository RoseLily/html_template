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
    <div id="page">
      <!-- HEADER -->
      <header id="header">
        <div class="viewport">
          <div id="logo-site">
            <a href="#" class="logo">
              <img src="images/logo@2x.jpg"  />
            </a>
          </div>

          <div class="navigation-wrapper">
            <div class="navigation">
              <ul class="menu">
                <li class="list_menu">
                  <a href="#">
                    <span>首页</span>
                    <span class="separator">|</span>
                  </a>
                </li>
                <li class="list_menu">
                  <a href="#">
                    <span>产品</span>
                    <span class="separator">|</span>
                  </a>
                </li>
                <li class="list_menu">
                  <a href="#">
                    <span>品牌故事</span>
                    <span class="separator">|</span>
                  </a>
                </li>
                <li class="list_menu">
                  <a href="#">
                    <span>联系我们</span>
                  </a>
                </li>
                <li class="list_menu buy_button">
                  <a href="#">立即购买</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </header>

      <!-- MAIN -->
      <div id="main" class="clearfix">
        <div id="content" class="contact">
          <div class="contact_banner">
            <img src="images/banner-contact@2x.jpg" />
          </div>
          <div class="Rectangle-2">
            <div class="rec2_title">
              <p>重塑良好的身姿</p>
            </div>
            <form id="form">
              <div class="row_rec2">
                <div class="col_rec2 col_rec2_left">
                  <input type="text" name="体松懈" placeholder="体松懈">
                </div>
                <div class="col_rec2 col_rec2_right">
                  <input type="text" name="体松懈" placeholder="体松懈">
                </div>
              </div>
              <div class="row_rec2">
                <input type="text" name="体松懈" placeholder="体松懈">
              </div>
              <div class="row_rec2">
                <textarea rows="8" cols="1" placeholder="体松懈"></textarea>
              </div>
              <div class="row_rec2 submit">
                <a href="#">Submit</a>
              </div>
            </form>
          </div>
        </div>
      </div>

      <!-- FOOTER -->
      <footer id="footer">
        <div class="footer_wrap">
          <ul class="menu">
              <li class="list_menu">
                <a href="#">
                  <span>首页</span>
                  <span class="separator">|</span>
                </a>
              </li>
              <li class="list_menu">
                <a href="#">
                  <span>产品</span>
                  <span class="separator">|</span>
                </a>
              </li>
              <li class="list_menu">
                <a href="#">
                  <span>品牌故事</span>
                  <span class="separator">|</span>
                </a>
               </li>
              <li class="list_menu">
                <a href="#">
                  <span>联系我们</span>
                </a>
              </li>
              <li class="list_menu buy_button">
                <a href="#">立即购买</a>
              </li>
              <li class="list_menu language">
                <a href="">
                  <span>English</span>
                  <img src="images/GB@2x.png" width="21" height="15">
                </a>
              </li>
          </ul>
        </div>
      </footer>

    </div>
    <script type="text/javascript" src="js/swiper.min.js"></script>
  </body>
</html>
