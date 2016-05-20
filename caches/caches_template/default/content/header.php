<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?>﻿<!-- Header Starts -->
<header>
  <div class="container">
    <div class="row">
      <div class="span6 slogo">
        <div class="logo">
          <!--<h1><a href="/">锐程 <span class="color">科技</span></a></h1>
          <div class="hmeta">移动互联网专家</div>-->
          <a href="/"><img src="/images/logo.png" /></a>
        </div>
      </div>
      <div class="span6 smenu">

        <!-- Navigation bar starts -->
          <div class="navbar">
           <div class="navbar-inner">
             <div class="container">
               <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                 <span>导航</span>
               </a>
               <div class="nav-collapse collapse">
                 <ul class="nav">
                    <li><a href="/">首页</a></li>
                   <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=d4b9fcce1375cacb7ce5e1c6ac8f3432&action=category&catid=0&num=20&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'0','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'20',));}?>

                       <?php $n=1; if(is_array($data)) foreach($data AS $k => $v) { ?>

                      

                            <?php if($v[child]==0) { ?>

                               <li><a href="<?php echo $v['url'];?>"><?php echo $v['catname'];?></a></li>

                            <?php } else { ?>

                               <li class="dropdown">

                                   <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $v['catname'];?><b class="caret"></b></a>
                                           <ul class="dropdown-menu">
                                            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=356f8bef28e3d6ac0683ce51d47be66a&action=category&catid=%24k&num=20&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>$k,'siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'20',));}?>

                                      <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>

                                        <li><a href="<?php if($r[child]==0) { ?><?php echo $r['url'];?><?php } else { ?>#<?php echo $v['catid'];?>/<?php echo $r['catid'];?><?php } ?>"><?php echo $r['catname'];?></a></li>

                                      <?php $n++;}unset($n); ?>

                                   <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                                           </ul>

                               </li> 

                            <?php } ?>

                  <?php $n++;}unset($n); ?>

                   <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                 </ul>
               </div>
              </div>
           </div>
         </div>

<!-- Navigation bar ends -->


      </div>
    </div>
  </div>
</header>

 <script type="text/javascript" src="http://www.brtbeacon.com/home/js/jquery-1.8.3.min.js"></script>
                 <script type="text/javascript">
function banner(){  
    var bn_id = 0;
    var bn_id2= 1;
    var speed33=5000;
    var qhjg = 1;
    var MyMar33;
    $("#banner .d1").hide();
    $("#banner .d1").eq(0).fadeIn("slow");
    if($("#banner .d1").length>1)
    {
        $("#banner_id li").eq(0).addClass("nuw");
        function Marquee33(){
            bn_id2 = bn_id+1;
            if(bn_id2>$("#banner .d1").length-1)
            {
                bn_id2 = 0;
            }
            $("#banner .d1").eq(bn_id).css("z-index","2");
            $("#banner .d1").eq(bn_id2).css("z-index","1");
            $("#banner .d1").eq(bn_id2).show();
            $("#banner .d1").eq(bn_id).fadeOut("slow");
            $("#banner_id li").removeClass("nuw");
            $("#banner_id li").eq(bn_id2).addClass("nuw");
            bn_id=bn_id2;
        };
    
        MyMar33=setInterval(Marquee33,speed33);
        
        $("#banner_id li").click(function(){
            var bn_id3 = $("#banner_id li").index(this);
            if(bn_id3!=bn_id&&qhjg==1)
            {
                qhjg = 0;
                $("#banner .d1").eq(bn_id).css("z-index","2");
                $("#banner .d1").eq(bn_id3).css("z-index","1");
                $("#banner .d1").eq(bn_id3).show();
                $("#banner .d1").eq(bn_id).fadeOut("slow",function(){qhjg = 1;});
                $("#banner_id li").removeClass("nuw");
                $("#banner_id li").eq(bn_id3).addClass("nuw");
                bn_id=bn_id3;
            }
        })
        $("#banner_id").hover(
            function(){
                clearInterval(MyMar33);
            }
            ,
            function(){
                MyMar33=setInterval(Marquee33,speed33);
            }
        )   
    }
    else
    {
        $("#banner_id").hide();
    }
}
</script>
<!-- Slider starts -->
    <div class="banner" id="banner" >
    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=6c3bbb0d34871d644e07184ab57b3adf&action=lists&catid=31&order=id+DESC&num=10\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'31','order'=>'id DESC','limit'=>'10',));}?>
                        <?php $n=1; if(is_array($data)) foreach($data AS $key => $val) { ?>
                        <a href="<?php echo $val['url'];?>" class="d1" target="_blank"> <img src="<?php echo $val['thumb'];?>"></a>
                        <?php $n++;}unset($n); ?>
   
    <div class="d2" id="banner_id">
        <ul>
            <?php $n=1; if(is_array($data)) foreach($data AS $key => $val) { ?>
                        <li></li>
             <?php $n++;}unset($n); ?>
        </ul>
    </div>
     <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
</div>
<script type="text/javascript">banner()</script>

    <!-- Slider Ends -->

