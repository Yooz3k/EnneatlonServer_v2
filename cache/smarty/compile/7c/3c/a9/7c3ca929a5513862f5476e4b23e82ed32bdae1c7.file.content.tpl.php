<?php /* Smarty version Smarty-3.1.19, created on 2017-11-14 15:03:19
         compiled from "/var/www/html/adminroot/themes/default/template/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10886800955a0af7a7c7ba28-65800197%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7c3ca929a5513862f5476e4b23e82ed32bdae1c7' => 
    array (
      0 => '/var/www/html/adminroot/themes/default/template/content.tpl',
      1 => 1510664429,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10886800955a0af7a7c7ba28-65800197',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a0af7a7c8bb19_25704289',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a0af7a7c8bb19_25704289')) {function content_5a0af7a7c8bb19_25704289($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div><?php }} ?>
