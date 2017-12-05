<?php /* Smarty version Smarty-3.1.19, created on 2017-12-05 17:00:58
         compiled from "/var/www/html/adminroot/themes/default/template/helpers/modules_list/modal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17960470055a26c2ba84d6a9-58690308%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '553de55e0b91014d05ae2753fae8a3ca55efd579' => 
    array (
      0 => '/var/www/html/adminroot/themes/default/template/helpers/modules_list/modal.tpl',
      1 => 1512466009,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17960470055a26c2ba84d6a9-58690308',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a26c2ba874fe9_81052440',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a26c2ba874fe9_81052440')) {function content_5a26c2ba874fe9_81052440($_smarty_tpl) {?><div class="modal fade" id="modules_list_container">
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
