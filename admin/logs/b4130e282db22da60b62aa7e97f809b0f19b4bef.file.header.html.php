<?php /* Smarty version Smarty-3.1.15, created on 2014-08-12 09:12:30
         compiled from "./view/header.html" */ ?>
<?php /*%%SmartyHeaderCode:180354342353e969fec1bbd9-03899821%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b4130e282db22da60b62aa7e97f809b0f19b4bef' => 
    array (
      0 => './view/header.html',
      1 => 1407741782,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '180354342353e969fec1bbd9-03899821',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'app_domain' => 0,
    'basedomain' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_53e969fec25125_39904000',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53e969fec25125_39904000')) {function content_53e969fec25125_39904000($_smarty_tpl) {?><header id="header">

		<h1 id="site-logo">
			<a href="<?php echo $_smarty_tpl->tpl_vars['app_domain']->value;?>
">
				<img src="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
images/logos/logo.png" alt="Admin" />
			</a>
		</h1>	

		<a href="javascript:;" data-toggle="collapse" data-target=".top-bar-collapse" id="top-bar-toggle" class="navbar-toggle collapsed">
			<i class="fa fa-cog"></i>
		</a>

		<a href="javascript:;" data-toggle="collapse" data-target=".sidebar-collapse" id="sidebar-toggle" class="navbar-toggle collapsed">
			<i class="fa fa-reorder"></i>
		</a>

</header> <!-- header --><?php }} ?>
