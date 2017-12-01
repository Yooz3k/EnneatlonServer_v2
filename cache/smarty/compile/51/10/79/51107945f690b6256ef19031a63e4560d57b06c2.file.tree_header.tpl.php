<?php /* Smarty version Smarty-3.1.19, created on 2017-12-01 14:17:53
         compiled from "/var/www/html/adminroot/themes/default/template/controllers/products/helpers/tree/tree_header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17914834395a215681c4cab1-07825706%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '51107945f690b6256ef19031a63e4560d57b06c2' => 
    array (
      0 => '/var/www/html/adminroot/themes/default/template/controllers/products/helpers/tree/tree_header.tpl',
      1 => 1512131843,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17914834395a215681c4cab1-07825706',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'base_url' => 0,
    'is_category_filter' => 0,
    'toolbar' => 0,
    'title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a215681c582f4_64189304',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a215681c582f4_64189304')) {function content_5a215681c582f4_64189304($_smarty_tpl) {?>
<script type="text/javascript">
	$(document).ready(function(){
		$('#filter-by-category').click(function() {
			if ($(this).is(':checked')) {
				$('#block_category_tree').show();
				$('#category-tree-toolbar').show();
			} else {
				$('#block_category_tree').hide();
				$('#category-tree-toolbar').hide();
				location.href = '<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
&reset_filter_category=1';
			}
		});
	});
</script>

<div class="tree-panel-heading-controls clearfix">
	<div id="category-tree-toolbar" <?php if (!$_smarty_tpl->tpl_vars['is_category_filter']->value) {?>style="display:none;"<?php }?>>
		<?php if (isset($_smarty_tpl->tpl_vars['toolbar']->value)) {?><?php echo $_smarty_tpl->tpl_vars['toolbar']->value;?>
<?php }?>
	</div>
	<label class="tree-panel-label-title">
		<input type="checkbox" id="filter-by-category" name="filter-by-category" <?php if ($_smarty_tpl->tpl_vars['is_category_filter']->value) {?>checked="checked"<?php }?> />
		<i class="icon-tags"></i>
		<?php echo $_smarty_tpl->tpl_vars['title']->value;?>

	</label>
</div>
<?php }} ?>
