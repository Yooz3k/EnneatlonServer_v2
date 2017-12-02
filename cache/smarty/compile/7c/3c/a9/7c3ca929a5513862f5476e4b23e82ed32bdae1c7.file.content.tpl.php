<?php /* Smarty version Smarty-3.1.19, created on 2017-12-02 14:33:43
         compiled from "/var/www/html/adminroot/themes/default/template/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5421202965a214e27a4ff69-26596125%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7c3ca929a5513862f5476e4b23e82ed32bdae1c7' => 
    array (
      0 => '/var/www/html/adminroot/themes/default/template/content.tpl',
      1 => 1512221225,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5421202965a214e27a4ff69-26596125',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a214e27a56838_01654161',
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a214e27a56838_01654161')) {function content_5a214e27a56838_01654161($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div><?php }} ?>
