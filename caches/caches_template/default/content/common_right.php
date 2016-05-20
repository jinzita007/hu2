<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?>﻿<div class="span4">

    <!-- Sidebar 1 -->

    <div class="sidebar">

        <!-- Widget -->

        <div class="widget">

            <h4>

                最近更新</h4>

            <ul>

                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=a633e4244513f97f071640e097961551&action=position&posid=2&num=10&order=listorder+DESC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'2','order'=>'listorder DESC','limit'=>'10',));}?> <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>

                <li><a href="<?php echo $r['url'];?>"><?php echo $r['title'];?></a></li>

                <?php $n++;}unset($n); ?> <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>

            </ul>

        </div>

        <div class="widget">

            <h4>

                联系我们</h4>

            <p>

                北京锐程科技有限公司<br />

                联系人：吕经理<br />

                手  机：18622979577<br />

                地  址：北京市海淀区西三旗程远大厦5层<br />

                网  址：<a href="http://www.ruichengkj.cn">http://www.ruichengkj.cn</a><br />

            </p>

        </div>

    </div>

</div>

