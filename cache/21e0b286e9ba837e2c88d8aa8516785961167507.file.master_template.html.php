<?php /* Smarty version Smarty-3.1.15, created on 2014-09-02 11:07:39
         compiled from "app/view/master_template.html" */ ?>
<?php /*%%SmartyHeaderCode:20319045775405347bdb6068-25339920%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '21e0b286e9ba837e2c88d8aa8516785961167507' => 
    array (
      0 => 'app/view/master_template.html',
      1 => 1406281429,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20319045775405347bdb6068-25339920',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5405347be279b8_12941105',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5405347be279b8_12941105')) {function content_5405347be279b8_12941105($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("meta.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<body>


	<?php if ($_smarty_tpl->tpl_vars['page']->value['page']!='login') {?>
    <div id="wrapper">
		
		<?php if ($_smarty_tpl->tpl_vars['page']->value['page']!='setting'&&$_smarty_tpl->tpl_vars['page']->value['function']!='setCategory') {?> 

			<?php echo $_smarty_tpl->getSubTemplate ("menu.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		<?php }?>

    <?php }?>    
	
	
		<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		
		
	<?php if ($_smarty_tpl->tpl_vars['page']->value['page']!='login') {?>	
	</div>
	<?php }?> 


	<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	<?php }} ?>
