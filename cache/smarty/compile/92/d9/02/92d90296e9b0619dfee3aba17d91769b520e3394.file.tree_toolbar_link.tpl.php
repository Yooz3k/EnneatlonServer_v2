<?php /* Smarty version Smarty-3.1.19, created on 2017-12-01 14:17:53
         compiled from "/var/www/html/adminroot/themes/default/template/helpers/tree/tree_toolbar_link.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10893981075a215681bef7d2-86964618%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '92d90296e9b0619dfee3aba17d91769b520e3394' => 
    array (
      0 => '/var/www/html/adminroot/themes/default/template/helpers/tree/tree_toolbar_link.tpl',
      1 => 1512131844,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10893981075a215681bef7d2-86964618',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'action' => 0,
    'id' => 0,
    'icon_class' => 0,
    'label' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a215681c05b26_35733207',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a215681c05b26_35733207')) {function content_5a215681c05b26_35733207($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
"<?php if (isset($_smarty_tpl->tpl_vars['action']->value)) {?> onclick="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
"<?php }?><?php if (isset($_smarty_tpl->tpl_vars['id']->value)) {?> id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8', true);?>
"<?php }?> class="btn btn-default">
	<?php if (isset($_smarty_tpl->tpl_vars['icon_class']->value)) {?><i class="<?php echo $_smarty_tpl->tpl_vars['icon_class']->value;?>
"></i><?php }?>
	<?php echo smartyTranslate(array('s'=>$_smarty_tpl->tpl_vars['label']->value),$_smarty_tpl);?>

</a><?php }} ?>
