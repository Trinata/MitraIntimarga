<?php /* Smarty version Smarty-3.1.15, created on 2014-09-02 11:07:39
         compiled from "app/view/login.html" */ ?>
<?php /*%%SmartyHeaderCode:4454911055405347bcc5e42-48790624%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '32e4621e5a164d58af600a450699743a7e5a6ced' => 
    array (
      0 => 'app/view/login.html',
      1 => 1406719251,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4454911055405347bcc5e42-48790624',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'basedomain' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5405347bdada97_46885337',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5405347bdada97_46885337')) {function content_5405347bdada97_46885337($_smarty_tpl) {?><div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Please Sign In</h3>
                    </div>
                    <div class="panel-body">
                        <form method="POST" action="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
login/doLogin">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                </div>
                                <div class="checkbox">
									<label>
                                         <a href="#" data-toggle="modal" data-target="#myModal2">
											Forgott Password ?
										</a>
										<div class="modal fade" id="myModal2" tabindex="-2" role="dialog2" aria-labelledby="myModalLabel2" aria-hidden="true">
											<div class="modal-dialog">

												<div class="modal-content">
													<div class="modal-header">
														<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
														<h4 class="modal-title" id="myModalLabel">Forgot Password</h4>
													</div>
													<div class="modal-body">
														 <div class="form-group input-group">
														<span class="input-group-addon">Email</span>
														<input type="text" class="form-control" placeholder="Email">
														</div>
														
														
													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
														<button type="button" class="btn btn-primary">Send Email</button>
													</div>
												</div>
												<!-- /.modal-content -->
											</div>
										<!-- /.modal-dialog -->
									</div>
                                    </label>
                                </div>
								
                                <!-- Change this to a button or input when using this as a form -->
                                <button type="submit" class="btn btn-lg btn-success btn-block">Login</button>
                            </fieldset>
                        </form>
						
						<div class="clear"></div>	
						<center>-or-</center>
							 <a class="btn btn-block btn-social btn-facebook">
                                <i class="fa fa-facebook"></i> Sign in with Facebook
                            </a>
                            <br/>
							 <a href="#" data-toggle="modal" data-target="#myModal">
                                Don' have an account? Sign Up!
                            </a>
							<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h2 class="modal-title" id="myModalLabel">Sign Up</h2>
                                        </div>
                                        <div class="modal-body">
                                            <form role="form">
											<div class="form-group input-group">
                                            <span class="input-group-addon">First Name</span>
                                            <input type="text" class="form-control" placeholder="First Name">
                                            <span class="input-group-addon">Last Name</span>
											<input type="text" class="form-control" placeholder="Last Name">
											</div>
											<div class="form-group input-group">
                                            <span class="input-group-addon">Email</span>
                                            <input type="text" class="form-control" placeholder="Email">
											</div>
											<div class="form-group input-group">
                                            <span class="input-group-addon">Gender</span>
											<select class="form-control">
                                                <option>Choose Gender</option>
                                                <option>Male</option>
                                                <option>Female</option>
                                            </select>
											</div>
											<div class="form-group input-group">
                                            <span class="input-group-addon">Password</span>
                                            <input type="text" class="form-control" placeholder="Password">
											</div>
											<div class="form-group input-group">
                                            <span class="input-group-addon">Confirm Password</span>
                                            <input type="text" class="form-control" placeholder="Confirm Password">
											</div>
											</form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary">Save changes</button>
                                        </div>
                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div><?php }} ?>
