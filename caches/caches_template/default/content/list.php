<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?>﻿<!DOCTYPE html>
<html lang="en">
<head>
  
  <meta charset="utf-8" />
  <title><?php if(isset($SEO['title']) && !empty($SEO['title'])) { ?><?php echo $SEO['title'];?><?php } ?><?php echo $SEO['site_title'];?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="<?php echo $SEO['description'];?>" />
  <meta name="keywords" content="<?php echo $SEO['keyword'];?>" />
  <meta name="author" content="" />

  <!-- Stylesheets -->
  <link href="/skins/style/bootstrap.css" rel="stylesheet" />
  <link rel="stylesheet" href="/skins/style/font-awesome.css" />
  <link href="/skins/style/prettyPhoto.css" rel="stylesheet" />
  <!-- Parallax slider -->
  <link rel="stylesheet" href="/skins/style/slider.css" />
  <!-- Flexslider -->
  <link rel="stylesheet" href="/skins/style/flexslider.css" />

  <link href="/skins/style/style.css" rel="stylesheet" />

  <!-- Colors - Orange, Purple, Light Blue (lblue), Red, Green and Blue -->
  <link href="/skins/style/lblue.css" rel="stylesheet" />

  <link href="/skins/style/bootstrap-responsive.css" rel="stylesheet" />
  
  <!-- HTML5 Support for IE -->
  <!--[if lt IE 9]>
  <script src="/skins/js/html5shim.js"></script>
  <![endif]-->

  <!-- Favicon -->
  <link rel="shortcut icon" href="/skins/img/favicon/favicon.png" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>

<body>

<?php include template("content","header"); ?>

<div class="content blog">
  <div class="container">

  <h2><?php echo $catname;?></h2>
  <p class="big grey"><?php echo $description;?></p>
  <hr />
  
  <div class="row">
       <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=11e982198282a77f17ebf8d7a1dede5e&action=lists&catid=%24catid&num=10&order=id+DESC&page=%24page\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 10;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>$catid,'order'=>'id DESC','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>$catid,'order'=>'id DESC','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>

                                    <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                                        <div class="media">
                                        <?php if($r[thumb]!="") { ?>
                                        <a class="pull-left" href="<?php echo $r['url'];?>">
                                          <img class="media-object" data-src="holder.js/200x140" alt="200x140" src="<?php echo $r['thumb'];?>" style="width: 200px; height: 140px;">
                                        </a>
                                        <?php } ?>
                                        
                                        <div class="media-body">
                                          <h5 class="media-heading" onclick="location.href='<?php echo $r['url'];?>';"><?php echo $r['title'];?></h5>
                                          <?php echo $r['description'];?>
                                        </div>
                                      </div> 
                                    <?php $n++;}unset($n); ?>
                                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                              
       <div class="paging">
                   <?php echo $pages;?>             
       </div>
  </div>

  </div>
</div>

<?php include template("content","footer"); ?>

<!-- JS -->
<script src="/skins/js/jquery.js"></script>
<script src="/skins/js/bootstrap.js"></script> 
<script src="/skins/js/jquery.isotope.js"></script> <!-- Isotope for gallery -->
<script src="/skins/js/jquery.prettyPhoto.js"></script> <!-- prettyPhoto for images -->
<script src="/skins/js/jquery.cslider.js"></script> <!-- Parallax slider -->
<script src="/skins/js/modernizr.custom.28468.js"></script>
<script src="/skins/js/filter.js"></script> <!-- Filter for support page -->
<script src="/skins/js/cycle.js"></script> <!-- Cycle slider -->
<script src="/skins/js/jquery.flexslider-min.js"></script> <!-- Flex slider -->

<script src="/skins/js/easing.js"></script> <!-- Easing -->
<script src="/skins/js/custom.js"></script>
</body>
</html>