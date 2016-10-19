<?php /* Smarty version Smarty-3.1.15, created on 2014-01-03 23:22:52
         compiled from "application\views\vLogin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1197652acee674797f2-06776531%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '300f97539d4b1cde84e3ca7fae960e4850f41b9f' => 
    array (
      0 => 'application\\views\\vLogin.tpl',
      1 => 1388791363,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1197652acee674797f2-06776531',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_52acee674a2926_41124340',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52acee674a2926_41124340')) {function content_52acee674a2926_41124340($_smarty_tpl) {?><div class="logOn">
	<form method="post" action="<?php echo site_url('cLog/login');?>
" enctype="multipart/form-data">
		<p>Login* :
		<input type="text" name="login" size="25" style="width:80%"/>   

		Password* :
		<input type="password" name="pwd" size="25" style="width:80%">

		<input type="submit" name="action" value="Valider">
		<?php echo anchor('cLog/viewSignup','Pas encore inscrit?');?>
</p>
	</form>
</diV>
<?php }} ?>
