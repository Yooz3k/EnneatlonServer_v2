<?php /* Smarty version Smarty-3.1.19, created on 2017-12-01 14:17:53
         compiled from "/var/www/html/adminroot/themes/default/template/controllers/products/helpers/tree/tree_toolbar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19252713265a215681b92597-48815234%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5e28b923f1c32cc564afaf55a1022f9bad80d18a' => 
    array (
      0 => '/var/www/html/adminroot/themes/default/template/controllers/products/helpers/tree/tree_toolbar.tpl',
      1 => 1512131843,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19252713265a215681b92597-48815234',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'actions' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a215681bae272_23743902',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a215681bae272_23743902')) {function content_5a215681bae272_23743902($_smarty_tpl) {?>
<div class="tree-actions pull-right">
	<?php if (isset($_smarty_tpl->tpl_vars['actions']->value)) {?>
	<?php  $_smarty_tpl->tpl_vars['action'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['action']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['actions']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['action']->key => $_smarty_tpl->tpl_vars['action']->value) {
$_smarty_tpl->tpl_vars['action']->_loop = true;
?>
		<?php echo $_smarty_tpl->tpl_vars['action']->value->render();?>

	<?php } ?>
	<?php }?>
</div><?php }} ?>
