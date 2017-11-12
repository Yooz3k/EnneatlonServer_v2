<?php /* Smarty version Smarty-3.1.19, created on 2017-11-12 16:42:12
         compiled from "/var/www/html/admin/themes/default/template/helpers/tree/tree_header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19423539985a086bd41f0ee4-88964347%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '88e80164f7a49c845a14834f308780619d9af99a' => 
    array (
      0 => '/var/www/html/admin/themes/default/template/helpers/tree/tree_header.tpl',
      1 => 1510501051,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19423539985a086bd41f0ee4-88964347',
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
  'unifunc' => 'content_5a086bd420ead6_58362369',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a086bd420ead6_58362369')) {function content_5a086bd420ead6_58362369($_smarty_tpl) {?>
<div class="tree-panel-heading-controls clearfix">
	<?php if (isset($_smarty_tpl->tpl_vars['title']->value)) {?><i class="icon-tag"></i>&nbsp;<?php echo smartyTranslate(array('s'=>$_smarty_tpl->tpl_vars['title']->value),$_smarty_tpl);?>
<?php }?>
	<?php if (isset($_smarty_tpl->tpl_vars['toolbar']->value)) {?><?php echo $_smarty_tpl->tpl_vars['toolbar']->value;?>
<?php }?>
</div><?php }} ?>
