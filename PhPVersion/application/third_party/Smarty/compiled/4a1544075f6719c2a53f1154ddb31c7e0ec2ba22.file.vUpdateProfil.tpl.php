<?php /* Smarty version Smarty-3.1.15, created on 2014-01-07 10:26:17
         compiled from "application\views\vUpdateProfil.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1901352b41c5fc59a50-27461472%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4a1544075f6719c2a53f1154ddb31c7e0ec2ba22' => 
    array (
      0 => 'application\\views\\vUpdateProfil.tpl',
      1 => 1387965333,
      2 => 'file',
    ),
    'c3a4b767cba0a7ab4ff5343bc8bec9eb78d746f1' => 
    array (
      0 => 'application\\views\\vMember.tpl',
      1 => 1388750882,
      2 => 'file',
    ),
    '28729d03339e86de440410e3f563e2a15db0333c' => 
    array (
      0 => 'application\\views\\vIndex.tpl',
      1 => 1389090169,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1901352b41c5fc59a50-27461472',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_52b41c5fc5c7f3_15735384',
  'variables' => 
  array (
    'logged' => 0,
    'login' => 0,
    'userInfo' => 0,
    'i' => 0,
    'alea' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52b41c5fc5c7f3_15735384')) {function content_52b41c5fc5c7f3_15735384($_smarty_tpl) {?><!DOCTYPE HTML>
<html>
	<head>
		<Meta http-equiv = "content-type" content = "text / html"; charset = "utf-8" />
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
			<?php echo $_smarty_tpl->getSubTemplate ('.\layout\layout_entete.inc.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		</div>

		<div class="menu">
			<div class="lien"><a href="<?php echo site_url('welcome/index');?>
">Acceuil</a></div>
			<?php if (!isset($_smarty_tpl->tpl_vars['logged']->value)) {?>
				<div class="lien"><a href="<?php echo site_url('cLog/viewSignup');?>
">S'inscrire</a></div>
			<?php } else { ?>
				<div class="lien"><a href="<?php echo site_url('cMember/viewMember');?>
">Mon Compte</a></div>
				<div class="lien"><a href="<?php echo site_url('cAdmin/viewAdmin');?>
">Administration</a></div>
				<div class="lien"><a href="<?php echo site_url('cLog/logout');?>
">Déconnexion</a></div>
			<?php }?>
		</div>
		<div class="chest">
			<div class="underChest">
				<div id='subInfo'>
					<?php if (isset($_smarty_tpl->tpl_vars['logged']->value)&&isset($_smarty_tpl->tpl_vars['login']->value)) {?>
						<p><span id='bold'>Bienvenue <?php echo $_smarty_tpl->tpl_vars['login']->value;?>
</span></p>
						<img id='avatar' src="<?php echo base_url('res/images/uploads/avatar/');?>
/<?php echo $_smarty_tpl->tpl_vars['login']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['userInfo']->value->UTI_AVATAR;?>
" width="70%">
					<?php } else { ?>
						<?php echo $_smarty_tpl->getSubTemplate ('.\vLogin.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

					<?php }?>
				</div>

				
	<h4>Espace Membre</h4>
	<?php if (isset($_smarty_tpl->tpl_vars['logged']->value)) {?>
		<?php if (!$_smarty_tpl->tpl_vars['logged']->value) {?>
			<p>Vous n'êtes pas logué.</p>
		<?php } else { ?>
			<p>Bienvenue <?php echo $_smarty_tpl->tpl_vars['login']->value;?>
</P>

			<div id='mainBlock'>
				<div id='memberMenue'>
					<a href="<?php echo site_url('cMember/viewMember');?>
">Mes informations</a>
					<a href="<?php echo site_url('cMember/mesRecette');?>
">Mes recettes</a>
					<a href="<?php echo site_url('cMember/updateProfil');?>
">Modifier Profil</a>
					<?php if ($_smarty_tpl->tpl_vars['userInfo']->value->UTI_ADMIN==2) {?>
						<a href="<?php echo site_url('cMember/validRecette');?>
">Modération des recettes</a>
						<a href="<?php echo site_url('cMember/validUser');?>
">Modération des utilisateur</a>
					<?php }?>
				</div>
				<div id="memberContent">
					

<div id="subJsMenu">
	<a onclick="displayAvatar(this)" href="#">Modifier l'avatar</a>
	<a onclick="displayInfo(this)" href="#">Modifier mes info</a>
	<a onclick="displayPass(this)" href="#">Modifier mon mot de passe</a>
</div>
<div id="avatarUpProfile" style="display:none">
	<p>Avatar actuel :</p>
	<img src="<?php echo base_url('res/images/uploads/avatar/');?>
/<?php echo $_smarty_tpl->tpl_vars['userInfo']->value->UTI_AVATAR;?>
"</p>
	<form method="post" action="<?php echo site_url('cMember/upAvatar');?>
" enctype="multipart/form-data">
		<input type="file" name="userfile"/></br>
		<input type="hidden" name="login" value="<?php echo $_smarty_tpl->tpl_vars['login']->value;?>
">

		<input type="submit" name="action" value="Valider"></br>
	</form>
</div>
<div id="formInfoUp" style="display:none">
	<form method="post" action="<?php echo site_url('cMember/upProfil');?>
" enctype="multipart/form-data">
		<label for="login">Login* :</label>
		<input type="text" name="login" size="25" value="<?php echo $_smarty_tpl->tpl_vars['userInfo']->value->UTI_LOGIN;?>
"/></br>

		<label for="email">Email* :</label>
		<input type="text" name="email" size="25" value="<?php echo $_smarty_tpl->tpl_vars['userInfo']->value->UTI_MAIL;?>
"/></br>

		<label for="nom">Nom* :</label>
		<input type="text" name="nom" size="25" value="<?php echo $_smarty_tpl->tpl_vars['userInfo']->value->UTI_NOM;?>
"/></br>

		<label for="prenom">Prenom* :</label>
		<input type="text" name="prenom" size="25" value="<?php echo $_smarty_tpl->tpl_vars['userInfo']->value->UTI_PRENOM;?>
"/></br>

		<input type="submit" name="action" value="Valider"></br>
	</form>
</div>
<div id="formUpPass" style="display:none">
	<form method="post" action="<?php echo site_url('cMember/upPass');?>
" enctype="multipart/form-data">
		<label for="oldPwd">Ancien mot de passe* :</label>
		<input type="password" name="oldPwd" size="25"></br>

		<label for="pwd">Nouveau mot de passe* :</label>
		<input type="password" name="pwd" size="25"></br>

		<label for="passconf">Retaper le mot de passe* :</label>
		<input type="password" name="passconf" size="25"></br>

		<input type="submit" name="action" value="Valider"></br>
	</form>
</div>


				</div>
			</div>
		<?php }?>
	<?php }?>

		</div>

		<div class="footer">
			<?php echo $_smarty_tpl->getSubTemplate ('.\layout\layout_pied.inc.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		</div>
	</body><?php }} ?>
