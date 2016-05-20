<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?>﻿<!-- Social -->

<div class="social-links">
  <div class="container">
    <div class="row">
      <div class="span12">
        <p class="big"><span>锐程</span> 
            <a href="<?php echo $CATEGORYS['2']['url'];?>">关于我们</a> 
            <a href="<?php echo $CATEGORYS['3']['url'];?>">联系我们</a> 
            <a href="<?php echo $CATEGORYS['16']['url'];?>">服务项目</a> 
          </p>
      </div>
    </div>    
  </div>
</div>


<!-- Footer -->
<footer>
  <div class="container">
    <div class="row">

      <div class="widgets">
        <div class="span4">
          <div class="fwidget">

            <div class="col-l">
              <h6>关于锐程</h6>
              <ul>
                <li><a href="#">关于我们</a></li>
                <li><a href="#">联系我们</a></li>
                <li><a href="#">权版申明</a></li>
                <li><a href="#">加入我们</a></li>
              </ul>
            </div>

            <div class="col-r">
              <h6>服务项目</h6>
              <ul>
                <li><a href="#">网站建设</a></li>
                <li><a href="#">APP开发</a></li>
                <li><a href="#">软件开发</a></li>
                <li><a href="#">微站开发</a></li>
              </ul>
            </div>

          </div>
        </div>

        <div class="span4">
          <div class="fwidget">
            <h6>我们的优势</h6>
            <ul>
              <li><a href="#">独立的创意设计的团队</a></li>
              <li><a href="#">完善的项目管控体系</a></li>
              <li><a href="#">一流的售后服务</a></li>
              <li><a href="#">一对一服务</a></li>
            </ul>
          </div>
        </div>

        <div class="span4">
          <div class="fwidget">
            <h6>最新更新</h6>
            <ul>
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=e2e7c6fc849fa87e991925d5afb846cf&action=position&posid=2&num=4&order=listorder+DESC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'2','order'=>'listorder DESC','limit'=>'4',));}?> 
                <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                <li><a href="<?php echo $r['url'];?>"><?php echo $r['title'];?></a></li>
                <?php $n++;}unset($n); ?> 
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </ul>
          </div>
        </div>
      </div>

      <div class="span12">
          <div class="copy">
            <h6>锐程 <span class="color">科技</span></h6>
            <p>版权所有 &copy; <a href="http://www.ruichengkj.cn">锐程科技</a> - <a href="/">首页</a> | <a href="<?php echo $CATEGORYS['2']['url'];?>"><?php echo $CATEGORYS['2']['catname'];?></a> | <a href="<?php echo $CATEGORYS['3']['url'];?>"><?php echo $CATEGORYS['3']['catname'];?></p>
          </div>
      </div>
    </div>
  <div class="clearfix"></div>
  </div>
</footer> 	
