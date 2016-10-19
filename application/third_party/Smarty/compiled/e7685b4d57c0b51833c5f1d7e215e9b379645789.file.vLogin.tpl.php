<?php /* Smarty version Smarty-3.1.15, created on 2014-01-07 20:21:52
         compiled from "C:\wamp\www\prjRct\application\views\vLogin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:739052c74269a97c84-91679776%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e7685b4d57c0b51833c5f1d7e215e9b379645789' => 
    array (
      0 => 'C:\\wamp\\www\\prjRct\\application\\views\\vLogin.tpl',
      1 => 1389126111,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '739052c74269a97c84-91679776',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_52c74269a9f345_35977352',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52c74269a9f345_35977352')) {function content_52c74269a9f345_35977352($_smarty_tpl) {?><div class="logOn">
	<form role="form" method="post" action="<?php echo site_url('cLog/login');?>
" enctype="multipart/form-data">
		<div class="form-group">
			<p>Login* :
			<input type="text" name="login" size="25" style="width:80%"/>   
		</div>

		<div class="form-group">
			Password* :
			<input type="password" name="pwd" size="25" style="width:80%">
		</div>

		<input class="btn btn-default" type="submit" name="action" value="Valider"></br>
		<?php echo anchor('cLog/viewSignup','<span style="color:blue">Pas encore inscrit?</span>');?>

	</form>
</diV>
<?php }} ?>
