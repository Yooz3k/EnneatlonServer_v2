<?php /* Smarty version Smarty-3.1.19, created on 2017-11-12 16:41:57
         compiled from "/var/www/html/admin/themes/default/template/controllers/request_sql/list_action_export.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9916240835a086bc5835305-06309693%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '47bb0272c2ac83da13f9c17d8f861a08aafb591b' => 
    array (
      0 => '/var/www/html/admin/themes/default/template/controllers/request_sql/list_action_export.tpl',
      1 => 1510501061,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9916240835a086bc5835305-06309693',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a086bc586c981_29825272',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a086bc586c981_29825272')) {function content_5a086bc586c981_29825272($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" class="btn btn-default">
	<i class="icon-cloud-upload"></i> <?php echo $_smarty_tpl->tpl_vars['action']->value;?>

</a><?php }} ?>
