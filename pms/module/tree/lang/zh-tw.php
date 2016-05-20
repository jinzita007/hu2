<?php
/**
 * The tree module zh-tw file of ZenTaoPMS.
 *
 * @copyright   Copyright 2009-2015 青島易軟天創網絡科技有限公司(QingDao Nature Easy Soft Network Technology Co,LTD, www.cnezsoft.com)
 * @license     ZPL (http://zpl.pub/page/zplv11.html)
 * @author      Chunsheng Wang <chunsheng@cnezsoft.com>
 * @package     tree
 * @version     $Id: zh-tw.php 4836 2013-06-19 05:39:40Z zhujinyonging@gmail.com $
 * @link        http://www.zentao.net
 */
$lang->tree = new stdclass();
$lang->tree->common            = '模組維護';
$lang->tree->add               = '添加';
$lang->tree->edit              = '編輯';
$lang->tree->addChild          = '添加子模組';
$lang->tree->delete            = '刪除模組';
$lang->tree->browse            = '通用模組維護';
$lang->tree->browseTask        = '任務模組維護';
$lang->tree->manage            = '維護模組';
$lang->tree->fix               = '修正數據';
$lang->tree->manageProduct     = "維護{$lang->productcommon}視圖模組";
$lang->tree->manageProject     = "維護{$lang->projectcommon}視圖模組";
$lang->tree->manageBug         = '維護測試視圖模組';
$lang->tree->manageCase        = '維護用例視圖模組';
$lang->tree->manageCustomDoc   = '維護文檔庫分類';
$lang->tree->updateOrder       = '更新排序';
$lang->tree->manageChild       = '維護子模組';
$lang->tree->manageStoryChild  = '維護子模組';
$lang->tree->manageBugChild    = '維護Bug子模組';
$lang->tree->manageCaseChild   = '維護用例子模組';
$lang->tree->manageTaskChild   = "維護{$lang->projectcommon}子模組";
$lang->tree->syncFromProduct   = '複製';
$lang->tree->ajaxGetOptionMenu = '介面:獲取下拉列表';
$lang->tree->ajaxGetSonModules = '介面:獲得子菜單列表';

$lang->tree->confirmDelete = '該模組及其子模組都會被刪除，您確定刪除嗎？';
$lang->tree->confirmRoot   = "模組的所屬{$lang->productcommon}修改，會關聯修改該模組下的需求、Bug、用例的所屬{$lang->productcommon}，以及{$lang->projectcommon}和{$lang->productcommon}的關聯關係。該操作比較危險，請謹慎操作。是否確認修改？";
$lang->tree->successSave   = '成功保存';
$lang->tree->successFixed  = '成功修正數據！';

$lang->tree->name       = '模組名稱';
$lang->tree->parent     = '上級模組';
$lang->tree->child      = '子模組';
$lang->tree->owner      = '負責人';
$lang->tree->order      = '排序';
$lang->tree->projectDoc = "{$lang->projectcommon}文檔";
$lang->tree->product    = "所屬{$lang->productcommon}";
