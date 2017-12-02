<?php /* Smarty version Smarty-3.1.19, created on 2017-12-02 17:37:04
         compiled from "/var/www/html/adminroot/themes/default/template/controllers/stats/calendar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18325941345a22d6b04d6942-35381528%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd45b89e605f947d0690fb26258eccfed7083a25f' => 
    array (
      0 => '/var/www/html/adminroot/themes/default/template/controllers/stats/calendar.tpl',
      1 => 1512221238,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18325941345a22d6b04d6942-35381528',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a22d6b050eb96_37203087',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a22d6b050eb96_37203087')) {function content_5a22d6b050eb96_37203087($_smarty_tpl) {?>

<div id="statsContainer" class="col-md-9">
	<?php echo $_smarty_tpl->getSubTemplate ("../../form_date_range_picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
