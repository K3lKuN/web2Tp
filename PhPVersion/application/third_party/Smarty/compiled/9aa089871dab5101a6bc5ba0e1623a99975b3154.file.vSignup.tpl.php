<?php /* Smarty version Smarty-3.1.15, created on 2013-12-23 08:39:28
         compiled from "application\views\vSignup.tpl" */ ?>
<?php /*%%SmartyHeaderCode:291352acee6a6e0548-65194444%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9aa089871dab5101a6bc5ba0e1623a99975b3154' => 
    array (
      0 => 'application\\views\\vSignup.tpl',
      1 => 1386897006,
      2 => 'file',
    ),
    '28729d03339e86de440410e3f563e2a15db0333c' => 
    array (
      0 => 'application\\views\\vIndex.tpl',
      1 => 1387787853,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '291352acee6a6e0548-65194444',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_52acee6a77fcf1_07405889',
  'variables' => 
  array (
    'logged' => 0,
    'login' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52acee6a77fcf1_07405889')) {function content_52acee6a77fcf1_07405889($_smarty_tpl) {?><!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8">
		<title>My Website</title>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('res/css/bootstrap.min.css');?>
">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('res/css/bootstrap-responsive.min.css');?>
">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('res/css/style.css');?>
">
		<script type="text/javascript" src="<?php echo base_url('res/ckeditor/ckeditor.js');?>
"></script>
		<script type="text/javascript" src="<?php echo base_url('res/myJs/myJs.js');?>
"></script>
	</head>
	<body>
		
		<div class="header">
		</div>

		

		<div class="chest">
			<div class="menu">
				<div class="lien"><a href="<?php echo site_url('welcome/index');?>
">Acceuil</a></div>
				<?php if (isset($_smarty_tpl->tpl_vars['logged']->value)) {?>
					<div class="lien"><a href="<?php echo site_url('cMember/viewMember');?>
">Mon Compte</a></div>
					<div class="lien"><a href="<?php echo site_url('cAdmin/viewAdmin');?>
">Administration</a></div>
				<?php }?>

				<div class="log">
					<?php if (isset($_smarty_tpl->tpl_vars['logged']->value)&&isset($_smarty_tpl->tpl_vars['login']->value)) {?>
						<p>Bienvenue <?php echo $_smarty_tpl->tpl_vars['login']->value;?>
 | <a href="<?php echo site_url('cLog/logout');?>
">Logout</a></p>
					<?php }?>
				</div>
			</div>

			
	<h2><?php echo $_smarty_tpl->tpl_vars['titre']->value;?>
</h2></br>
	<p>Bonjour, et bienvenue sur le panneau d'inscription, toute les données fournit lors de l'inscription sont bien évidement confidentiel, et ne seront pas divulgués. Bien évidement, vous pourrez modifier entièrement vos informations de compte.</p>
	<p>Veuillez remplir au minimum tout les champ comportant le symbole "*" car ils sont obligatoire. Dans l'éventualité où vous voudriez la suppréssion de votre compte, veuillez le demander par le formulaire de contact, celui ci sera entièrement supprimé dans les 48h. En vous remerciant de l'intérêt que vous portez à ce site.</p>
	<div id="content">
		<form method="post" action="<?php echo site_url('cLog/signup');?>
" enctype="multipart/form-data">
			<label for="login">Login* :</label>
			<input type="text" name="login" size="25"/></br>

			<label for="email">Email* :</label>
			<input type="text" name="email" size="25"/></br>

			<label for="nom">Nom* :</label>
			<input type="text" name="nom" size="25"/></br>

			<label for="prenom">Prenom* :</label>
			<input type="text" name="prenom" size="25"/></br>

			<label for="pwd">Password* :</label>
			<input type="password" name="pwd" size="25"></br>

			<label for="passconf">Password Confirmation* :</label>
			<input type="password" name="passconf" size="25"></br>

			<input type="hidden" name="avatar" value="default.png">

			<input type="submit" name="action" value="Valider"></br>
			<?php echo anchor('cLog/login','Me connecter');?>

		</form>
	</div>

		</div>

		<div class="footer">
			<!-- <form method="POST" action="">
   				<textarea cols="80" class="ckeditor" id="editeur" name="editeur" rows="10"></textarea>
   				<input type="submit" value="envoyer" />
			</form> -->
		</div>
	</body><?php }} ?>
