<?php /* Smarty version Smarty-3.1.19, created on 2017-12-04 23:31:11
         compiled from "/var/www/html/pdf/invoice.note-tab.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5355362175a25ccaf6bd174-44514853%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cdaf7dd4b8bd68ffa999d7d46327de930ac418f5' => 
    array (
      0 => '/var/www/html/pdf/invoice.note-tab.tpl',
      1 => 1512410953,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5355362175a25ccaf6bd174-44514853',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'order_invoice' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a25ccaf6c76f8_22900756',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a25ccaf6c76f8_22900756')) {function content_5a25ccaf6c76f8_22900756($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['order_invoice']->value->note)&&$_smarty_tpl->tpl_vars['order_invoice']->value->note) {?>
	<tr>
		<td colspan="12" height="10">&nbsp;</td>
	</tr>
	
	<tr>
		<td colspan="6" class="left">
			<table id="note-tab" style="width: 100%">
				<tr>
					<td class="grey"><?php echo smartyTranslate(array('s'=>'Note','pdf'=>'true'),$_smarty_tpl);?>
</td>
				</tr>
				<tr>
					<td class="note"><?php echo nl2br($_smarty_tpl->tpl_vars['order_invoice']->value->note);?>
</td>
				</tr>
			</table>
		</td>
		<td colspan="1">&nbsp;</td>
	</tr>
<?php }?>
<?php }} ?>
