<?php /* Smarty version Smarty-3.1.15, created on 2014-08-23 16:47:03
         compiled from "view/uploadFrameTwt.html" */ ?>
<?php /*%%SmartyHeaderCode:119350736153f85507f35230-58953689%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd2c363e944299a51e6f46c7dcfb7207edae719f8' => 
    array (
      0 => 'view/uploadFrameTwt.html',
      1 => 1408783499,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '119350736153f85507f35230-58953689',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'basedomain' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_53f85508002cc5_89534703',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53f85508002cc5_89534703')) {function content_53f85508002cc5_89534703($_smarty_tpl) {?><div id="content-header">
	<h1><i class="fa fa-twitter"></i> &nbsp;Twitter</h1>
</div> <!-- #content-header -->	

<div id="content-container">

	<div class="row">

		<div class="col-md-12">

			<div class="portlet">

				<div class="portlet-header">

					<h3>
						<i class="fa fa-cloud-upload"></i>
						Upload Frame and Cover
					</h3>

				</div> <!-- /.portlet-header -->

				<div class="portlet-content">

					<form method="POST" action="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
article/uplFrame" enctype="multipart/form-data">
						<center>

	                        <div class="col-sm-6">
	                            
	                        	<div class="fileupload fileupload-new" data-provides="fileupload">
								  <div class="fileupload-preview thumbnail" style="width: 400px; height: 250px;"></div>
								  <div>
								    <span class="btn btn-default btn-file"><span class="fileupload-new">Select Frame</span><span class="fileupload-exists">Change</span><input type="file" name="file_frame"/></span>
								    <a href="#" class="btn btn-default fileupload-exists" data-dismiss="fileupload">Remove</a>
								  </div>
								</div>

	                        </div>

	                        <div class="col-sm-6">
	                            
	                        	<div class="fileupload fileupload-new" data-provides="fileupload">
								  <div class="fileupload-preview thumbnail" style="width: 400px; height: 250px;"></div>
								  <div>
								    <span class="btn btn-default btn-file"><span class="fileupload-new">Select Cover</span><span class="fileupload-exists">Change</span><input type="file" name="file_cover"/></span>
								    <a href="#" class="btn btn-default fileupload-exists" data-dismiss="fileupload">Remove</a>
								  </div>
								</div>

	                        </div>
							<input type="hidden" name="typealbum" value="5" />
	                        <input type="text" name="title" size="40" placeholder="Title Here..." required/><br><br>
	                        <button type="submit" class="btn btn-primary">Upload</button>
	                    </center>
          			</form>	

				</div> <!-- /.portlet-content -->

			</div> <!-- /.portlet -->

		

		</div> <!-- /.col -->

	</div> <!-- /.row -->

</div><?php }} ?>
