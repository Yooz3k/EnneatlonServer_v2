<?php /* Smarty version Smarty-3.1.19, created on 2017-12-03 17:43:38
         compiled from "/var/www/html/adminroot/themes/default/template/helpers/modules_list/modal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2639705075a214e27b5ed41-09003133%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '553de55e0b91014d05ae2753fae8a3ca55efd579' => 
    array (
      0 => '/var/www/html/adminroot/themes/default/template/helpers/modules_list/modal.tpl',
      1 => 1512313653,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2639705075a214e27b5ed41-09003133',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a214e27b637f1_94897319',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a214e27b637f1_94897319')) {function content_5a214e27b637f1_94897319($_smarty_tpl) {?><div class="modal fade" id="modules_list_container">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3 class="modal-title"><?php echo smartyTranslate(array('s'=>'Recommended Modules and Services'),$_smarty_tpl);?>
</h3>
			</div>
			<div class="modal-body">
				<div id="modules_list_container_tab_modal" style="display:none;"></div>
				<div id="modules_list_loader"><i class="icon-refresh icon-spin"></i></div>
			</div>
		</div>
	</div>
</div>
<?php }} ?>
