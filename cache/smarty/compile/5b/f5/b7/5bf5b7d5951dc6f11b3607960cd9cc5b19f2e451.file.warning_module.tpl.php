<?php /* Smarty version Smarty-3.1.19, created on 2017-11-11 16:41:55
         compiled from "/var/www/html/adminroot/themes/default/template/controllers/modules/warning_module.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6662185265a071a43b65533-78069672%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5bf5b7d5951dc6f11b3607960cd9cc5b19f2e451' => 
    array (
      0 => '/var/www/html/adminroot/themes/default/template/controllers/modules/warning_module.tpl',
      1 => 1510397727,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6662185265a071a43b65533-78069672',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'module_link' => 0,
    'text' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a071a43b7c217_00474950',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a071a43b7c217_00474950')) {function content_5a071a43b7c217_00474950($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['module_link']->value, ENT_QUOTES, 'UTF-8', true);?>
"><?php echo $_smarty_tpl->tpl_vars['text']->value;?>
</a><?php }} ?>
