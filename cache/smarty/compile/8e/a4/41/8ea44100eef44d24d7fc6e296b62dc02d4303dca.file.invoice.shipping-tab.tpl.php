<?php /* Smarty version Smarty-3.1.19, created on 2017-12-04 23:31:11
         compiled from "/var/www/html/pdf/invoice.shipping-tab.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1288827845a25ccaf762066-31381863%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8ea44100eef44d24d7fc6e296b62dc02d4303dca' => 
    array (
      0 => '/var/www/html/pdf/invoice.shipping-tab.tpl',
      1 => 1512410953,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1288827845a25ccaf762066-31381863',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'carrier' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a25ccaf766ef3_25757550',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a25ccaf766ef3_25757550')) {function content_5a25ccaf766ef3_25757550($_smarty_tpl) {?>
<table id="shipping-tab" width="100%">
	<tr>
		<td class="shipping center small grey bold" width="44%"><?php echo smartyTranslate(array('s'=>'Carrier','pdf'=>'true'),$_smarty_tpl);?>
</td>
		<td class="shipping center small white" width="56%"><?php echo $_smarty_tpl->tpl_vars['carrier']->value->name;?>
</td>
	</tr>
</table>
<?php }} ?>
