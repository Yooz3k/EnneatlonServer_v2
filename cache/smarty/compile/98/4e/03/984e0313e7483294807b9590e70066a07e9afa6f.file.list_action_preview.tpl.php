<?php /* Smarty version Smarty-3.1.19, created on 2017-11-14 10:31:37
         compiled from "/var/www/html/adminroot/themes/default/template/helpers/list/list_action_preview.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21152837275a0ab7f90228a2-09033789%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '984e0313e7483294807b9590e70066a07e9afa6f' => 
    array (
      0 => '/var/www/html/adminroot/themes/default/template/helpers/list/list_action_preview.tpl',
      1 => 1510648835,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21152837275a0ab7f90228a2-09033789',
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
  'unifunc' => 'content_5a0ab7f906b1c4_83654340',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a0ab7f906b1c4_83654340')) {function content_5a0ab7f906b1c4_83654340($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
" target="_blank">
	<i class="icon-eye"></i> <?php echo $_smarty_tpl->tpl_vars['action']->value;?>

</a>
<?php }} ?>
