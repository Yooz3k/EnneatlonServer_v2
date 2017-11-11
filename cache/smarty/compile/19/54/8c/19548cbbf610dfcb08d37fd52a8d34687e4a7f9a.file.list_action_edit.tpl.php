<?php /* Smarty version Smarty-3.1.19, created on 2017-11-11 18:30:35
         compiled from "/var/www/html/adminroot/themes/default/template/helpers/list/list_action_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13755032075a0733bb809545-25703987%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '19548cbbf610dfcb08d37fd52a8d34687e4a7f9a' => 
    array (
      0 => '/var/www/html/adminroot/themes/default/template/helpers/list/list_action_edit.tpl',
      1 => 1510397727,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13755032075a0733bb809545-25703987',
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
  'unifunc' => 'content_5a0733bb8484a6_54775720',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a0733bb8484a6_54775720')) {function content_5a0733bb8484a6_54775720($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="edit">
	<i class="icon-pencil"></i> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>

</a><?php }} ?>
