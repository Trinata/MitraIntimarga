<?php /* Smarty version Smarty-3.1.15, created on 2014-08-23 21:32:00
         compiled from "view/listFrame.html" */ ?>
<?php /*%%SmartyHeaderCode:101049795953e96a3c0a9977-82469781%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c56d5b44754aa0cfc04195a378dcfb06afd44c1d' => 
    array (
      0 => 'view/listFrame.html',
      1 => 1408787415,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '101049795953e96a3c0a9977-82469781',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_53e96a3c0ca163_02622880',
  'variables' => 
  array (
    'data' => 0,
    'app_domain' => 0,
    'var' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53e96a3c0ca163_02622880')) {function content_53e96a3c0ca163_02622880($_smarty_tpl) {?><div id="content-header">
	<h1>Frame List</h1>
</div> <!-- #content-header -->	

<div id="content-container">

	<div class="row">
		<div class="col-md-12">

			<div class="table-responsive">

			<table class="table table-striped table-bordered media-table" data-provide="datatable" 
                                data-display-rows="10"
                                data-info="true"
                                data-search="true"
                                data-length-change="true"
                                data-paginate="true">
                <thead>
                    <tr>
                        <th style="width: 150px">Frame</th>
                        <th style="width: 150px">Cover</th>
                        <th>Name</th>
                        <th>Use For</th>
                        <th>File info</th>
                        <th>Date</th>
                    </tr>
                </thead>
                <tbody>
                	<?php  $_smarty_tpl->tpl_vars['var'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['var']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['var']->key => $_smarty_tpl->tpl_vars['var']->value) {
$_smarty_tpl->tpl_vars['var']->_loop = true;
?>
                    <tr>
                        <td>
                        	<div class="thumbnail">
	                        	<div class="thumbnail-view">
	                        		<a class="thumbnail-view-hover ui-lightbox" href="<?php echo $_smarty_tpl->tpl_vars['app_domain']->value;?>
public_assets/frame/<?php echo $_smarty_tpl->tpl_vars['var']->value['files'];?>
">
	                        		</a>

						            <img height="100px" src="<?php echo $_smarty_tpl->tpl_vars['app_domain']->value;?>
public_assets/frame/<?php echo $_smarty_tpl->tpl_vars['var']->value['files'];?>
" width="125" alt="Gallery Image" />
						        </div>
						    </div> <!-- /.thumbnail -->
                        </td>
                        <td>
                            <div class="thumbnail">
                                <div class="thumbnail-view">
                                    <a class="thumbnail-view-hover ui-lightbox" href="<?php echo $_smarty_tpl->tpl_vars['app_domain']->value;?>
public_assets/cover/<?php echo $_smarty_tpl->tpl_vars['var']->value['cover'];?>
">
                                    </a>

                                    <img height="100px" src="<?php echo $_smarty_tpl->tpl_vars['app_domain']->value;?>
public_assets/cover/<?php echo $_smarty_tpl->tpl_vars['var']->value['cover'];?>
" width="125" alt="Gallery Image" />
                                </div>
                            </div> <!-- /.thumbnail -->
                        </td>
                        <td><?php echo $_smarty_tpl->tpl_vars['var']->value['title'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['var']->value['typealbum'];?>
</td>
                        <td class="file-info">
                            <span><strong>Frame</strong></span> <br />
                            <span><strong>Dimensions:</strong> <?php echo $_smarty_tpl->tpl_vars['var']->value['frHeight'];?>
 x <?php echo $_smarty_tpl->tpl_vars['var']->value['frWidth'];?>
</span>
                            <hr>
                            <span><strong>Cover</strong></span> <br />
                            <span><strong>Dimensions:</strong> <?php echo $_smarty_tpl->tpl_vars['var']->value['covHeight'];?>
 x <?php echo $_smarty_tpl->tpl_vars['var']->value['covWidth'];?>
</span>
                        </td>
                        <td><?php echo dateFormat($_smarty_tpl->tpl_vars['var']->value['created_date'],'article-day');?>
</td>
                    </tr>
                   <?php } ?>
                </tbody>
               </table>

              </div> <!-- /.table-responsive -->

		</div> <!-- /.col -->

	</div> <!-- /.row -->

</div><?php }} ?>
