<?php /* Smarty version Smarty-3.1.19, created on 2017-11-11 16:43:17
         compiled from "/var/www/html/modules/blockspecials/views/templates/hook/blockspecials-home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10287584915a071a9571bdb0-99372199%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b713c100fedffddfa260c35747bbce951f5ad6f6' => 
    array (
      0 => '/var/www/html/modules/blockspecials/views/templates/hook/blockspecials-home.tpl',
      1 => 1510397711,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10287584915a071a9571bdb0-99372199',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'specials' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a071a9572bcc2_37146877',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a071a9572bcc2_37146877')) {function content_5a071a9572bcc2_37146877($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['specials']->value)&&$_smarty_tpl->tpl_vars['specials']->value) {?>
	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array('products'=>$_smarty_tpl->tpl_vars['specials']->value,'class'=>'blockspecials tab-pane','id'=>'blockspecials'), 0);?>

<?php } else { ?>
<ul id="blockspecials" class="blockspecials tab-pane">
	<li class="alert alert-info"><?php echo smartyTranslate(array('s'=>'No special products at this time.','mod'=>'blockspecials'),$_smarty_tpl);?>
</li>
</ul>
<?php }?>
<?php }} ?>
