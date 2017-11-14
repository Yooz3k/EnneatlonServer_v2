<?php /*%%SmartyHeaderCode:6560833545a0af7b1770f70-89021753%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '054440a5b928799e8ca909a0b328db11279aee9a' => 
    array (
      0 => '/var/www/html/themes/default-bootstrap/modules/blockmyaccountfooter/blockmyaccountfooter.tpl',
      1 => 1510664496,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6560833545a0af7b1770f70-89021753',
  'variables' => 
  array (
    'link' => 0,
    'returnAllowed' => 0,
    'voucherAllowed' => 0,
    'HOOK_BLOCK_MY_ACCOUNT' => 0,
    'is_logged' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a0af7b1a05a98_66449511',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a0af7b1a05a98_66449511')) {function content_5a0af7b1a05a98_66449511($_smarty_tpl) {?>
<!-- Block myaccount module -->
<section class="footer-block col-xs-12 col-sm-4">
	<h4><a href="http://192.168.99.100:8888/moje-konto" title="Zarządzaj moim kontem klienta" rel="nofollow">Moje konto</a></h4>
	<div class="block_content toggle-footer">
		<ul class="bullet">
			<li><a href="http://192.168.99.100:8888/historia-zamowien" title="Moje zamówienia" rel="nofollow">Moje zamówienia</a></li>
						<li><a href="http://192.168.99.100:8888/pokwitowania" title="Moje rachunki" rel="nofollow">Moje rachunki</a></li>
			<li><a href="http://192.168.99.100:8888/adresy" title="Moje adresy" rel="nofollow">Moje adresy</a></li>
			<li><a href="http://192.168.99.100:8888/dane-osobiste" title="Zarządzaj moimi informacjami osobistymi" rel="nofollow">Moje informacje osobiste</a></li>
						
            		</ul>
	</div>
</section>
<!-- /Block myaccount module -->
<?php }} ?>
