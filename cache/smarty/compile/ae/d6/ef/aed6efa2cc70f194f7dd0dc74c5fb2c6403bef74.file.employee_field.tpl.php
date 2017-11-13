<?php /* Smarty version Smarty-3.1.19, created on 2017-11-13 14:32:31
         compiled from "/var/www/html/adminroot/themes/default/template/controllers/logs/employee_field.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1629788805a099eefeb8171-28178412%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aed6efa2cc70f194f7dd0dc74c5fb2c6403bef74' => 
    array (
      0 => '/var/www/html/adminroot/themes/default/template/controllers/logs/employee_field.tpl',
      1 => 1510576956,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1629788805a099eefeb8171-28178412',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'employee_image' => 0,
    'employee_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a099eefef5b01_72768636',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a099eefef5b01_72768636')) {function content_5a099eefef5b01_72768636($_smarty_tpl) {?>
<span class="employee_avatar_small">
	<img class="imgm img-thumbnail" alt="" src="<?php echo $_smarty_tpl->tpl_vars['employee_image']->value;?>
" width="32" height="32" />
</span>
<?php echo $_smarty_tpl->tpl_vars['employee_name']->value;?>
<?php }} ?>
