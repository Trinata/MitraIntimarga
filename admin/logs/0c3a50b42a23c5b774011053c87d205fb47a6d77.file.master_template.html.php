<?php /* Smarty version Smarty-3.1.15, created on 2014-08-12 09:12:19
         compiled from "view/master_template.html" */ ?>
<?php /*%%SmartyHeaderCode:76161273453e969f303e8e8-96704561%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0c3a50b42a23c5b774011053c87d205fb47a6d77' => 
    array (
      0 => 'view/master_template.html',
      1 => 1406096940,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '76161273453e969f303e8e8-96704561',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'basedomain' => 0,
    'admin' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_53e969f31611c6_94716360',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53e969f31611c6_94716360')) {function content_53e969f31611c6_94716360($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate ("meta.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<body>
	<!-- RUNNING GLOBAL VAR -->
	<script>
		var basedomain = "<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
";
	</script>
	
	
	<div id="wrapper">
	<!-- HEADER -->
		
		<?php if (($_smarty_tpl->tpl_vars['admin']->value)) {?>

		<?php echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 
		<?php echo $_smarty_tpl->getSubTemplate ("jsplugin.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 
		<?php echo $_smarty_tpl->getSubTemplate ("top-bar.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 
		<?php echo $_smarty_tpl->getSubTemplate ("sidebar.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 
		
		<div id="content">
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		</div>

		
		<?php } else { ?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>


		<?php }?>
		
	
	</div>

</body> 
</html><?php }} ?>
