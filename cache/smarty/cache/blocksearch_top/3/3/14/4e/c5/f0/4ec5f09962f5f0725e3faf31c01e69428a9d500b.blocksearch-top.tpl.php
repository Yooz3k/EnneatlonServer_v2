<?php /*%%SmartyHeaderCode:9438307315a21544a3d30b0-32536290%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4ec5f09962f5f0725e3faf31c01e69428a9d500b' => 
    array (
      0 => '/var/www/html/themes/default-bootstrap/modules/blocksearch/blocksearch-top.tpl',
      1 => 1512313621,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9438307315a21544a3d30b0-32536290',
  'cache_lifetime' => 31536000,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a25c6e8c3a833_54544297',
  'has_nocache_code' => false,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a25c6e8c3a833_54544297')) {function content_5a25c6e8c3a833_54544297($_smarty_tpl) {?><!-- Block search module TOP -->
<div id="search_block_top" class="col-sm-4 clearfix">
	<form id="searchbox" method="get" action="//192.168.99.100:8888/szukaj" >
		<input type="hidden" name="controller" value="search" />
		<input type="hidden" name="orderby" value="position" />
		<input type="hidden" name="orderway" value="desc" />
		<input class="search_query form-control" type="text" id="search_query_top" name="search_query" placeholder="Szukaj" value="" />
		<button type="submit" name="submit_search" class="btn btn-default button-search">
			<span>Szukaj</span>
		</button>
	</form>
</div>
<!-- /Block search module TOP --><?php }} ?>
