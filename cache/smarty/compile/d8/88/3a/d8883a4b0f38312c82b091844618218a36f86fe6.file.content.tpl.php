<?php /* Smarty version Smarty-3.1.19, created on 2017-12-01 15:09:55
         compiled from "/var/www/html/adminroot/themes/default/template/controllers/addons_catalog/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14177379025a2162b3672fe4-98243773%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd8883a4b0f38312c82b091844618218a36f86fe6' => 
    array (
      0 => '/var/www/html/adminroot/themes/default/template/controllers/addons_catalog/content.tpl',
      1 => 1512131843,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14177379025a2162b3672fe4-98243773',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'display_addons_content' => 0,
    'addons_content' => 0,
    'iso_lang' => 0,
    'iso_currency' => 0,
    'iso_country' => 0,
    'parent_domain' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a2162b368ceb0_98560889',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a2162b368ceb0_98560889')) {function content_5a2162b368ceb0_98560889($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['display_addons_content']->value) {?>
	<?php echo $_smarty_tpl->tpl_vars['addons_content']->value;?>

<?php } else { ?>
	<iframe class="clearfix" style="margin:0px;padding:0px;width:100%;height:920px;overflow:hidden;border:none" src="//addons.prestashop.com/iframe/search.php?isoLang=<?php echo $_smarty_tpl->tpl_vars['iso_lang']->value;?>
&amp;isoCurrency=<?php echo $_smarty_tpl->tpl_vars['iso_currency']->value;?>
&amp;isoCountry=<?php echo $_smarty_tpl->tpl_vars['iso_country']->value;?>
&amp;parentUrl=<?php echo $_smarty_tpl->tpl_vars['parent_domain']->value;?>
"></iframe>
<?php }?>
<?php }} ?>
