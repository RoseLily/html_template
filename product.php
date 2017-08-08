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
              <img src="images/logo@2x.jpg" />
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
        <div id="content" class="product">
          <div class="pro_banner">
            <img src="images/banner-product@2x.jpg" />
          </div>
          <div class="Rectangle-2">
            <div class="row_rec2">
              <div class="col_rec2">
                <div class="rec2_img">
                  <img src="images/coupon-2@2x.png" />
                </div>
                <div class="rec2_text">
                  <p><span>2 Percko</span></p>
                  <p>228€ instead of 258€</p>
                  <p>with the coupon code <span>percko-2</span></p>
                </div>
              </div>

              <div class="col_rec2">
                <div class="rec2_img">
                  <img src="images/coupon-3@2x.png" />
                </div>
                <div class="rec2_text">
                  <p><span>3 Percko</span></p>
                  <p>228€ instead of 258€</p>
                  <p>with the coupon code <span>percko-3</span></p>
                </div>
              </div>

              <div class="col_rec2">
                <div class="rec2_img">
                  <img src="images/coupon-4@2x.png" />
                </div>
                <div class="rec2_text">
                  <p><span>4 Percko</span></p>
                  <p>228€ instead of 258€</p>
                  <p>with the coupon code <span>percko-4</span></p>
                </div>
              </div>
            </div>
          </div>

          <div class="Rectangel-3">
            <div class="row_rec3">
              <div class="col_rec3">
                <div class="rec3_img">
                  <img src="images/women-black@2x.png" width="207" />
                </div>
                <div class="rec3_text">
                  <p>我们使用顶尖面料</p>
                  <p>1000RMB</p>
                </div>
              </div>
              <div class="col_rec3">
                <div class="rec3_img">
                  <img src="images/women-nude@2x.png" width="200"/>
                </div>
                <div class="rec3_text">
                  <p>我们使用顶尖面料</p>
                  <p>1000RMB</p>
                </div>
              </div>
              <div class="col_rec3">
                <div class="rec3_img">
                  <img src="images/men-black@2x.png" width="243"/>
                </div>
                <div class="rec3_text">
                  <p>我们使用顶尖面料</p>
                  <p>1000RMB</p>
                </div>
              </div>
              <div class="col_rec3">
                <div class="rec3_img">
                  <img src="images/men-nude@2x.png" width="236"/>
                </div>
                <div class="rec3_text">
                  <p>我们使用顶尖面料</p>
                  <p>1000RMB</p>
                </div>
              </div>
            </div>
          </div>

          <div class="Rectangel-4">
            <div class="row_rec4">
              <div class="rec4_text">
                <p>Percko可以检测用户背部的形状。当你直立端坐的时候，你几乎察觉不到它的存在。但是，如果你身体松懈、弯腰驼背了，你就会感觉到它的轻微刺激，以提醒你重新调整坐姿。这样的刺激能帮你建立肌肉记忆，即使不穿上它，你也能随时保持好的姿势。并且，所有这些提醒和矫正并不需要充电和复杂的APP。顺畅的设计与背部形状严密贴合，有效地解除了束缚，活动自如。最棒的是Percko专为你的固有生活方式而设计，无论你通勤上班，自由职业，还是简单去杂货店买点东西，Percko都会默默地提醒你改善姿势。</p>
                <div class="rec4_button">
                  <a href="#">Choose your size</a>
                </div>
              </div>
              <div class="rec4_img">
                <img src="images/img-grid@2x.jpg" />
              </div>
              <div class="rec4_text">
                <p>Percko可以检测用户背部的形状。当你直立端坐的时候，你几乎察觉不到它的存在。但是，如果你身体松懈、弯腰驼背了，你就会感觉到它的轻微刺激，以提醒你重新调整坐姿。这样的刺激能帮你建立肌肉记忆，即使不穿上它，你也能随时保持好的姿势。并且，所有这些提醒和矫正并不需要充电和复杂的APP。顺畅的设计与背部形状严密贴合，有效地解除了束缚，活动自如。最棒的是Percko专为你的固有生活方式而设计，无论你通勤上班，自由职业，还是简单去杂货店买点东西，Percko都会默默地提醒你改善姿势。</p>
              </div>
            </div>
          </div>

          <div class="Rectangel-5">
            <div class="rec5_title">
              <p>在法国一家极具竞争力的纺织公司——Techtera公司的帮助下，我们有机会识别和测试出最舒适、最耐磨的材料。我们使用的是天然纤维，轻便的同时也增加了用户的舒适感。</p>
            </div>
            <div class="rec5_img">
              <img src="images/img-description@2x.png" />
            </div>
            <div class="row_rec5">
              <div class="col_rec5">
                <p>通过拉伸，帮助你打开并放松胸部肌肉</p>
              </div>
              <div class="col_rec5">
                <p>创新型的面料，不变形，直接刺激肌肉运动</p>
              </div>
              <div class="col_rec5">
                <p>支持自主调节，改变刺激强弱</p>
              </div>
              <div class="col_rec5">
                <p>天然纤维织物轻薄舒适，没人知道你多穿了一件</p>
              </div>
              <div class="col_rec5">
                <p>当你身体松懈的时候，发出信号，刺激你的颈椎</p>
              </div>
            </div>
          </div>
          <div class="Rectangel-6">
            <div class="rec6_img0">
              <img src="images/quote@2x.png" />
            </div>
            <div class="rec6_text">
              <p>通过专注在刺激肌肉的方式，我们可以在您忘记保持良好姿势的时候进行提醒，使您可以维持良好的身姿。</p>
            </div>
            <div class="row_rec6">
              <div class="col_rec6">
                <div class="rec6_img1">
                  <img src="images/avatar@2x.png" />
                </div>
                <div class="rec6_text1">
                  <p>物理治疗师、整骨专家</p>
                  <p>François STEVIGNON</p>
                </div>
              </div>
              <div class="col_rec6">
                <div class="rec6_img1">
                  <img src="images/avatar@2x.png" />
                </div>
                <div class="rec6_text1">
                  <p>物理治疗师、整骨专家</p>
                  <p>François STEVIGNON</p>
                </div>
              </div>
              <div class="col_rec6">
                <div class="rec6_img1">
                  <img src="images/avatar@2x.png" />
                </div>
                <div class="rec6_text1">
                  <p>物理治疗师、整骨专家</p>
                  <p>François STEVIGNON</p>
                </div>
              </div>
            </div>
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
