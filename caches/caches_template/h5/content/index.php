<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?>﻿<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php if(isset($SEO['title']) && !empty($SEO['title'])) { ?><?php echo $SEO['title'];?><?php } ?><?php echo $SEO['site_title'];?></title>
<meta name="description" content="<?php echo $SEO['description'];?>" />
<meta name="keywords" content="<?php echo $SEO['keyword'];?>" />
<!-- Favicons
    ================================================== -->
<link rel="shortcut icon" href="/h5/img/favicon.ico" type="image/x-icon">
<link rel="apple-touch-icon" href="/h5/img/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="/h5/img/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="/h5/img/apple-touch-icon-114x114.png">

<!-- Bootstrap -->
<link rel="stylesheet" type="text/css"  href="/h5/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="/h5/fonts/font-awesome/css/font-awesome.css">

<!-- Slider
    ================================================== -->
<link href="/h5/css/owl.carousel.css" rel="stylesheet" media="screen">
<link href="/h5/css/owl.theme.css" rel="stylesheet" media="screen">

<!-- Stylesheet
    ================================================== -->
<link rel="stylesheet" type="text/css"  href="/h5/css/style.css">
<link rel="stylesheet" type="text/css" href="/h5/css/responsive.css">
<link rel="stylesheet" type="text/css" href="/h5/css/prettyPhoto.css">
<link href='http://fonts.useso.com/css?family=Lato:400,700,900,300' rel='stylesheet' type='text/css'>
<link href='http://fonts.useso.com/css?family=Open+Sans:400,700,800,600,300' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="/h5/js/modernizr.custom.js"></script>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="/h5/js/html5shiv.min.js"></script>
      <script src="/h5/js/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<!-- Navigation
    ==========================================-->
<nav id="menu" class="navbar navbar-default navbar-fixed-top">
  <div class="container"> 
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a class="navbar-brand" href="index.html">锐程<strong><span class="color">科技</span></strong></a> </div>
    
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#home" class="page-scroll">首页</a></li>
        <li><a href="#services-section" class="page-scroll"><?php echo $CATEGORYS['16']['catname'];?></a></li>
        <li><a href="#works-section" class="page-scroll"><?php echo $CATEGORYS['8']['catname'];?></a></li>
        <li><a href="#about-section" class="page-scroll"><?php echo $CATEGORYS['2']['catname'];?></a></li>
        <li><a href="#team-section" class="page-scroll"><?php echo $CATEGORYS['9']['catname'];?></a></li>
        <li><a href="#testimonials-section" class="page-scroll"><?php echo $CATEGORYS['36']['catname'];?></a></li>
        <li><a href="#contact-section" class="page-scroll"><?php echo $CATEGORYS['3']['catname'];?></a></li>
      </ul>
    </div>
    <!-- /.navbar-collapse --> 
  </div>
  <!-- /.container-fluid --> 
</nav>

<!-- Header -->
<header class="text-center" name="home">
  <div class="intro-text">
    <h1>欢迎光临 <strong><span class="color">锐程科技</span></strong></h1>
    <p>我们秉承“<strong>锐意进取，与您同程</strong>”的理念，本着“<strong>稳固发展、求实创新</strong>”的精神，合作互助，与您同程。</p>
    <a href="#services-section" class="fa fa-angle-down page-scroll"> </a> </div>
</header>

<!-- Services Section 服务项目-->
<div id="services-section" class="text-center">
  <div class="container">
    <div class="section-title center">
      <h2><?php echo $CATEGORYS['16']['catname'];?></h2>
      <hr>
      <div class="clearfix"></div>
      <p><?php echo $CATEGORYS['16']['description'];?></p>
    </div>
    <div class="space"></div>
    <div class="row">
      <div class="col-md-3 col-sm-6 service"> <i class="fa fa-desktop"></i>
        <h4><strong><?php echo $CATEGORYS['26']['catname'];?></strong></h4>
        <p><?php echo $CATEGORYS['26']['description'];?></p>
      </div>
      <div class="col-md-3 col-sm-6 service"> <i class="fa fa-mobile"></i>
        <h4><strong><?php echo $CATEGORYS['25']['catname'];?></strong></h4>
        <p><?php echo $CATEGORYS['25']['description'];?></p>
      </div>
      <div class="col-md-3 col-sm-6 service"> <i class="fa fa-pie-chart"></i>
        <h4><strong><?php echo $CATEGORYS['34']['catname'];?></strong></h4>
        <p><?php echo $CATEGORYS['34']['description'];?></p>
      </div>
      <div class="col-md-3 col-sm-6 service"> <i class="fa fa-line-chart"></i>
        <h4><strong><?php echo $CATEGORYS['35']['catname'];?></strong></h4>
        <p><?php echo $CATEGORYS['35']['description'];?></p>
      </div>
    </div>
  </div>
</div>
<!-- Portfolio Section 案例展示 -->
<div id="works-section">
  <div class="container"> <!-- Container -->
    <div class="section-title text-center center">
      <h2><?php echo $CATEGORYS['8']['catname'];?></h2>
      <hr>
      <div class="clearfix"></div>
      <p><?php echo $CATEGORYS['8']['description'];?></p>
    </div>
    <div class="categories">
      <ul class="cat">
        <li>
          <ol class="type">
            <li><a href="#" data-filter="*" class="active">全部</a></li>
              <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=db83f1e1e10ac1a6fef16c671e7ac380&action=category&catid=8&num=25&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'8','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'25',));}?>
              <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
              <li><a href="#" data-filter=".t<?php echo $r['catid'];?>"><?php echo $r['catname'];?></a></li>
              <?php $n++;}unset($n); ?>
              <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
          </ol>
        </li>
      </ul>
      <div class="clearfix"></div>
    </div>
    <div class="copyrights">Collect from <a href="http://www.ruichengkj.cn/" >锐程科技</a></div>
    <div class="row">
      <div class="portfolio-items">
          <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=cfa651e3ce2df3092583d620dd57af27&action=lists&catid=32&order=id+DESC&num=2\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'32','order'=>'id DESC','limit'=>'2',));}?>
          <?php $n=1; if(is_array($data)) foreach($data AS $key => $val) { ?>
          <div class="col-sm-6 col-md-3 col-lg-3 web t<?php echo $val['catid'];?>">
              <div class="portfolio-item">
                  <div class="hover-bg">
                      <a href="<?php echo $val['thumb'];?>" rel="prettyPhoto">
                          <div class="hover-text">
                              <h4><?php echo $val['title'];?></h4>
                              <small><?php echo $val['description'];?></small>
                              <div class="clearfix"></div>
                              <i class="fa fa-plus"></i>
                          </div>
                          <img src="<?php echo $val['thumb'];?>" class="img-responsive" alt="<?php echo $val['title'];?>">
                      </a>
                  </div>
              </div>
          </div>
          <?php $n++;}unset($n); ?>
          <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>

          <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=66603173156e25541dbb3d895f333a0f&action=lists&catid=33&order=id+DESC&num=2\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'33','order'=>'id DESC','limit'=>'2',));}?>
          <?php $n=1; if(is_array($data)) foreach($data AS $key => $val) { ?>
          <div class="col-sm-6 col-md-3 col-lg-3 web t<?php echo $val['catid'];?>">
              <div class="portfolio-item">
                  <div class="hover-bg">
                      <a href="<?php echo $val['thumb'];?>" rel="prettyPhoto">
                          <div class="hover-text">
                              <h4><?php echo $val['title'];?></h4>
                              <small><?php echo $val['description'];?></small>
                              <div class="clearfix"></div>
                              <i class="fa fa-plus"></i>
                          </div>
                          <img src="<?php echo $val['thumb'];?>" class="img-responsive" alt="<?php echo $val['title'];?>">
                      </a>
                  </div>
              </div>
          </div>
          <?php $n++;}unset($n); ?>
          <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>

          <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=d96ab1e44375224d7f39a2292ea9c31c&action=lists&catid=34&order=id+DESC&num=2\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'34','order'=>'id DESC','limit'=>'2',));}?>
          <?php $n=1; if(is_array($data)) foreach($data AS $key => $val) { ?>
          <div class="col-sm-6 col-md-3 col-lg-3 web t<?php echo $val['catid'];?>">
              <div class="portfolio-item">
                  <div class="hover-bg">
                      <a href="<?php echo $val['thumb'];?>" rel="prettyPhoto">
                          <div class="hover-text">
                              <h4><?php echo $val['title'];?></h4>
                              <small><?php echo $val['description'];?></small>
                              <div class="clearfix"></div>
                              <i class="fa fa-plus"></i>
                          </div>
                          <img src="<?php echo $val['thumb'];?>" class="img-responsive" alt="<?php echo $val['title'];?>">
                      </a>
                  </div>
              </div>
          </div>
          <?php $n++;}unset($n); ?>
          <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>

          <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=6ccf5a704f3c7846ebac173a359feba5&action=lists&catid=35&order=id+DESC&num=2\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'35','order'=>'id DESC','limit'=>'2',));}?>
          <?php $n=1; if(is_array($data)) foreach($data AS $key => $val) { ?>
          <div class="col-sm-6 col-md-3 col-lg-3 web t<?php echo $val['catid'];?>">
              <div class="portfolio-item">
                  <div class="hover-bg">
                      <a href="<?php echo $val['thumb'];?>" rel="prettyPhoto">
                          <div class="hover-text">
                              <h4><?php echo $val['title'];?></h4>
                              <small><?php echo $val['description'];?></small>
                              <div class="clearfix"></div>
                              <i class="fa fa-plus"></i>
                          </div>
                          <img src="<?php echo $val['thumb'];?>" class="img-responsive" alt="<?php echo $val['title'];?>">
                      </a>
                  </div>
              </div>
          </div>
          <?php $n++;}unset($n); ?>
          <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
          
      </div>
    </div>
  </div>
</div>
<!-- About Section 关于我们-->
<div id="about-section">
  <div class="container">
    <div class="section-title text-center center">
      <h2><?php echo $CATEGORYS['2']['catname'];?></h2>
      <hr>
      <div class="clearfix"></div>
      <p><?php echo $CATEGORYS['2']['description'];?></p>
    </div>
    <div class="row">
      <div class="col-md-6"> <img src="/h5/img/about.png" class="img-responsive"> </div>
      <div class="col-md-6">
        <div class="about-text"> <i class="fa fa-users"></i>
          <h4><?php echo $CATEGORYS['37']['catname'];?></h4>
          <p><?php echo $CATEGORYS['37']['description'];?></p>
          <i class="fa fa-puzzle-piece"></i>
          <h4><?php echo $CATEGORYS['38']['catname'];?></h4>
          <p><?php echo $CATEGORYS['38']['description'];?></p>
          <i class="fa fa-check-square-o"></i>
          <h4><?php echo $CATEGORYS['39']['catname'];?></h4>
          <p><?php echo $CATEGORYS['39']['description'];?></p>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Team Section 行业动态 -->
<div id="team-section" class="text-center">
  <div class="container">
    <div class="section-title center">
      <h2><?php echo $CATEGORYS['9']['catname'];?></h2>
      <hr>
      <p><?php echo $CATEGORYS['9']['description'];?></p>
    </div>
    <div id="row">
        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=865beb89188f60a3fecd666a191e11f4&action=lists&catid=9&order=id+DESC&num=4\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'9','order'=>'id DESC','limit'=>'4',));}?>
        <?php $n=1; if(is_array($data)) foreach($data AS $key => $val) { ?>
        <div class="col-md-3 col-sm-6 team">
            <div class="thumbnail">
                <img src="<?php echo $val['thumb'];?>" alt="..." class="img-circle team-img">
                <div class="caption">
                    <h3><?php echo $val['title'];?></h3>
                    <!--<p></p>
                    <p><?php echo $r['description'];?></p>-->
                </div>
            </div>
        </div>
        <?php $n++;}unset($n); ?>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
    </div>
  </div>
</div>

<!-- Testimonials Section 合作单位-->
<div id="testimonials-section" class="text-center">
  <div class="container">
    <div class="section-title center">
      <h2><?php echo $CATEGORYS['36']['catname'];?></h2>
      <hr>
    </div>
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div id="testimonial" class="owl-carousel owl-theme">
            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=5449e2e03e50dd20a119142d8da44469&action=lists&catid=36&order=id+DESC&num=8\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'36','order'=>'id DESC','limit'=>'8',));}?>
            <?php $n=1; if(is_array($data)) foreach($data AS $key => $val) { ?>
            <div class="item">
                <!--<p><img src="<?php echo $val['thumb'];?>" class="thumbnail hezuoimg" alt="<?php echo $val['title'];?>"></p>-->
                <p><?php echo $val['description'];?></p>
                <p><?php echo $val['title'];?></p>
            </div>
            <?php $n++;}unset($n); ?>
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>

        </div>
      </div>
    </div>
  </div>
</div>

<!-- Contact Section -->
<div id="contact-section" class="text-center">
  <div class="container">
    <div class="section-title center">
      <h2><?php echo $CATEGORYS['3']['catname'];?></h2>
      <hr>
      <p><?php echo $CATEGORYS['3']['description'];?></p>
    </div>
    <div class="col-md-8 col-md-offset-2">
      <div class="col-md-4"> <i class="fa fa-map-marker fa-2x"></i>
        <p>北京市海淀区程远大厦5层<br />
           中国 北京  
        </p>
      </div>
      <div class="col-md-4"> <i class="fa fa-envelope-o fa-2x"></i>
        <p>lsf@ruichengkj.cn<br/>
           吕经理
          </p>
      </div>
      <div class="col-md-4"> <i class="fa fa-phone fa-2x"></i>
        <p>18518238813</p>
      </div>
      <hr>
      <div class="clearfix"></div>
    </div>
    <div class="col-md-8 col-md-offset-2">
      <hr>
      <h3>给我们留言</h3>
      <form>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <input type="email" class="form-control" placeholder="姓名">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <input type="email" class="form-control" placeholder="邮箱">
            </div>
          </div>
        </div>
        <div class="form-group">
          <textarea class="form-control" rows="4" placeholder="留言内容"></textarea>
        </div>
        <button type="submit" class="btn btn-default">提交留言</button>
      </form>
    </div>
  </div>
</div>
</div>
<nav id="footer">
  <div class="container">
    <div class="pull-left fnav">
      <p>Copyright &copy; 2015 by 
          &nbsp;
        <a href="http://www.ruichengkj.cn" target="_blank" title="锐程科技">锐程科技</a>
        
          
        </p>
    </div>
    <div class="pull-right fnav">
      <ul class="footer-social">
        <!--<li><a href="#"><i class="fa fa-facebook"></i></a></li>
        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>-->
        <li><a href="http://www.miit.gov.cn/" target="_blank">京ICP备15015714号-1</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="/h5/js/jquery.min.js"></script> 
<script type="text/javascript" src="/h5/js/jquery.1.11.1.js"></script> 
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script type="text/javascript" src="/h5/js/bootstrap.js"></script> 
<script type="text/javascript" src="/h5/js/SmoothScroll.js"></script> 
<script type="text/javascript" src="/h5/js/jquery.prettyPhoto.js"></script> 
<script type="text/javascript" src="/h5/js/jquery.isotope.js"></script> 
<script src="/h5/js/owl.carousel.js"></script> 

<!-- Javascripts ================================================== --> 
<script type="text/javascript" src="/h5/js/main.js"></script>
</body>
</html>