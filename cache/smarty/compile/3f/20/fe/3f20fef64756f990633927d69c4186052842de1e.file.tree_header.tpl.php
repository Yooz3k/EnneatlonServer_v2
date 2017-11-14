<?php /* Smarty version Smarty-3.1.19, created on 2017-11-14 10:11:40
         compiled from "/var/www/html/adminroot/themes/default/template/helpers/tree/tree_header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8429441615a0ab34c6fb337-06452990%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3f20fef64756f990633927d69c4186052842de1e' => 
    array (
      0 => '/var/www/html/adminroot/themes/default/template/helpers/tree/tree_header.tpl',
      1 => 1510648835,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8429441615a0ab34c6fb337-06452990',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'toolbar' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a0ab34c70d4d6_21831487',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a0ab34c70d4d6_21831487')) {function content_5a0ab34c70d4d6_21831487($_smarty_tpl) {?>
<div class="tree-panel-heading-controls clearfix">
	<?php if (isset($_smarty_tpl->tpl_vars['title']->value)) {?><i class="icon-tag"></i>&nbsp;<?php echo smartyTranslate(array('s'=>$_smarty_tpl->tpl_vars['title']->value),$_smarty_tpl);?>
<?php }?>
	<?php if (isset($_smarty_tpl->tpl_vars['toolbar']->value)) {?><?php echo $_smarty_tpl->tpl_vars['toolbar']->value;?>
<?php }?>
</div><?php }} ?>
