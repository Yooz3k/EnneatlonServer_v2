<?php /* Smarty version Smarty-3.1.19, created on 2017-12-01 14:07:48
         compiled from "/var/www/html/modules/blockspecials/views/templates/hook/blockspecials-home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5904915565a215424a02749-14361208%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b713c100fedffddfa260c35747bbce951f5ad6f6' => 
    array (
      0 => '/var/www/html/modules/blockspecials/views/templates/hook/blockspecials-home.tpl',
      1 => 1512131841,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5904915565a215424a02749-14361208',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'specials' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a215424a1afa8_12315122',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a215424a1afa8_12315122')) {function content_5a215424a1afa8_12315122($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['specials']->value)&&$_smarty_tpl->tpl_vars['specials']->value) {?>
	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('products'=>$_smarty_tpl->tpl_vars['specials']->value,'class'=>'blockspecials tab-pane','id'=>'blockspecials'), 0);?>

<?php } else { ?>
<ul id="blockspecials" class="blockspecials tab-pane">
	<li class="alert alert-info"><?php echo smartyTranslate(array('s'=>'No special products at this time.','mod'=>'blockspecials'),$_smarty_tpl);?>
</li>
</ul>
<?php }?>
<?php }} ?>
