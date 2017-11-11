<?php /* Smarty version Smarty-3.1.19, created on 2017-11-11 16:43:17
         compiled from "/var/www/html/themes/default-bootstrap/modules/homefeatured/homefeatured.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18976897535a071a953f68e3-52364258%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3aa0d62e1049e5b9d12bc2cae084fdddf0d39b7a' => 
    array (
      0 => '/var/www/html/themes/default-bootstrap/modules/homefeatured/homefeatured.tpl',
      1 => 1510397724,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18976897535a071a953f68e3-52364258',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a071a95404a47_46461391',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a071a95404a47_46461391')) {function content_5a071a95404a47_46461391($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['products']->value)&&$_smarty_tpl->tpl_vars['products']->value) {?>
	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array('class'=>'homefeatured tab-pane','id'=>'homefeatured'), 0);?>

<?php } else { ?>
<ul id="homefeatured" class="homefeatured tab-pane">
	<li class="alert alert-info"><?php echo smartyTranslate(array('s'=>'No featured products at this time.','mod'=>'homefeatured'),$_smarty_tpl);?>
</li>
</ul>
<?php }?><?php }} ?>
