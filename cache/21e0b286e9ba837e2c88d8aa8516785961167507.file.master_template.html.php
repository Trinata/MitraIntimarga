<?php /* Smarty version Smarty-3.1.15, created on 2014-10-29 20:52:33
         compiled from "app/view/master_template.html" */ ?>
<?php /*%%SmartyHeaderCode:20319045775405347bdb6068-25339920%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '21e0b286e9ba837e2c88d8aa8516785961167507' => 
    array (
      0 => 'app/view/master_template.html',
      1 => 1414586775,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20319045775405347bdb6068-25339920',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5405347be279b8_12941105',
  'variables' => 
  array (
    'basedomain' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5405347be279b8_12941105')) {function content_5405347be279b8_12941105($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("meta.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	<!-- RUNNING GLOBAL VAR -->
	<script>
		var basedomain = "<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
";
	</script>
	<!-- HEADER -->
	<div id="header">
	<?php echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	</div>
	<!-- menu -->
	<div id="menu"  align="center">
	<?php echo $_smarty_tpl->getSubTemplate ("menu.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	</div>
	<!-- CONTENT -->
	<br>
	<br>
	<div id="content">
	
		<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		
	</div>
	<!-- FOOTER -->
    <footer id="footer">
		<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	</footer>
</html><?php }} ?>
