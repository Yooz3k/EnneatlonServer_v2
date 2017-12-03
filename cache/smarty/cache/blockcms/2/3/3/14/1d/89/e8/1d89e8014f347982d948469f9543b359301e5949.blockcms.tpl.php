<?php /*%%SmartyHeaderCode:9578339885a21544a8a32a3-45196500%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1d89e8014f347982d948469f9543b359301e5949' => 
    array (
      0 => '/var/www/html/themes/default-bootstrap/modules/blockcms/blockcms.tpl',
      1 => 1512313621,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9578339885a21544a8a32a3-45196500',
  'cache_lifetime' => 31536000,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a243173caa491_86842584',
  'has_nocache_code' => true,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a243173caa491_86842584')) {function content_5a243173caa491_86842584($_smarty_tpl) {?>
	<!-- Block CMS module footer -->
	<section class="footer-block col-xs-12 col-sm-2" id="block_various_links_footer">
		<h4>Informacja</h4>
		<ul class="toggle-footer">
							<li class="item">
					<a href="http://192.168.99.100:8888/promocje" title="Promocje">
						Promocje
					</a>
				</li>
																											<li class="item">
						<a href="http://192.168.99.100:8888/content/1-dostawy" title="Dostawy">
							Dostawy
						</a>
					</li>
																<li class="item">
						<a href="http://192.168.99.100:8888/content/3-regulamin-strony" title="Regulamin strony internetowej">
							Regulamin strony internetowej
						</a>
					</li>
																<li class="item">
						<a href="http://192.168.99.100:8888/content/4-o-nas" title="O nas">
							O nas
						</a>
					</li>
												</ul>
		
	</section>
		<section class="bottom-footer col-xs-12">
		<div>
			<?php echo smartyTranslate(array('s'=>'[1] %3$s %2$s - Ecommerce software by %1$s [/1]','mod'=>'blockcms','sprintf'=>array('PrestaShop™',date('Y'),'©'),'tags'=>array('<a class="_blank" href="http://www.prestashop.com">')),$_smarty_tpl);?>

		</div>
	</section>
		<!-- /Block CMS module footer -->
<?php }} ?>
