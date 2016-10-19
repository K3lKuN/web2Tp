<?php /* Smarty version Smarty-3.1.15, created on 2014-01-07 20:59:23
         compiled from "application\views\vMember.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1299952acef52cca5b8-52749104%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c3a4b767cba0a7ab4ff5343bc8bec9eb78d746f1' => 
    array (
      0 => 'application\\views\\vMember.tpl',
      1 => 1389114531,
      2 => 'file',
    ),
    '28729d03339e86de440410e3f563e2a15db0333c' => 
    array (
      0 => 'application\\views\\vIndex.tpl',
      1 => 1389127247,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1299952acef52cca5b8-52749104',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_52acef52d95421_99016378',
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
<?php if ($_valid && !is_callable('content_52acef52d95421_99016378')) {function content_52acef52d95421_99016378($_smarty_tpl) {?><!DOCTYPE HTML>
<html>
	<head>
		<Meta http-equiv = "content-type" content = "text / html"; charset = "utf-8" />
		<title>My Website</title>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('res/css/style.css');?>
">
		<script type="text/javascript" src="<?php echo base_url('res/ckeditor/ckeditor.js');?>
"></script>
		<script type="text/javascript" src="<?php echo base_url('res/myJs/myJs.js');?>
"></script>

		<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" />
		<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-theme.min.css" />
		<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />

		<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

		<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
		<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
	</head>

	<body>
		<div class="header">
			<?php echo $_smarty_tpl->getSubTemplate ('.\layout\layout_entete.inc.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		</div>

		<div class="menu">
			<nav class="navbar navbar-default" role="navigation">
			  <!-- Collect the nav links, forms, and other content for toggling -->
			  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			    <ul class="nav navbar-nav">
			      <li class="dropdown">
			        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
			        <ul class="dropdown-menu">
			          <li><a href="#">Action</a></li>
			          <li><a href="#">Another action</a></li>
			          <li><a href="#">Something else here</a></li>
			          <li class="divider"></li>
			          <li><a href="#">Separated link</a></li>
			          <li class="divider"></li>
			          <li><a href="#">One more separated link</a></li>
			        </ul>
			      </li>
			    </ul>
			    <form class="navbar-form navbar-left" role="search">
			      <div class="form-group">
			        <input type="text" class="form-control" placeholder="Search">
			      </div>
			      <button type="submit" class="btn btn-default">Submit</button>
			    </form>
			    <ul class="nav navbar-nav navbar-right">
			      <li class="active"><a href="<?php echo site_url('welcome/index');?>
">Acceuil</a></li>
			      <?php if (!isset($_smarty_tpl->tpl_vars['logged']->value)) {?>
			      	<li class="active"><a href="<?php echo site_url('cLog/viewSignup');?>
">S'inscrire</a></li>
			      <?php } else { ?>			      
			      	<li class="active"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Gestion <b class="caret"></b></a>
			      	<ul class="dropdown-menu">
				        <li><a href="<?php echo site_url('cMember/viewMember');?>
">Mon Compte</a></li>
				        <li class="divider"></li>
				        <li><a href="<?php echo site_url('cAdmin/viewAdmin');?>
">Administration</a></li>
			    	</ul></li>
			      	<li class="active"><a href="<?php echo site_url('cLog/logout');?>
">Deconnexion</a></li>
			      <?php }?>
			    </ul>
			  </div><!-- /.navbar-collapse -->
			</nav>
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
						
						<!-- Solution temporaire avant javascript -->
							<p style="text-align: center"><img src="<?php echo base_url('res/images/uploads/avatar/');?>
/<?php echo $_smarty_tpl->tpl_vars['userInfo']->value->UTI_AVATAR;?>
" width="30%"></p>
							<p>Vos informations personnels : </p>
							<ul>
								<li>Login : <?php echo $_smarty_tpl->tpl_vars['userInfo']->value->UTI_LOGIN;?>
</li>
								<li>Adresse e-mail : <a href="mailto:<?php echo $_smarty_tpl->tpl_vars['userInfo']->value->UTI_MAIL;?>
"><?php echo $_smarty_tpl->tpl_vars['userInfo']->value->UTI_MAIL;?>
</a></li>
								<li>Nom : <?php echo $_smarty_tpl->tpl_vars['userInfo']->value->UTI_NOM;?>
</li>
								<li>Prénom : <?php echo $_smarty_tpl->tpl_vars['userInfo']->value->UTI_PRENOM;?>
</li>
							</ul>
						
					</div>
				</div>
			<?php }?>
		<?php }?>

		</div>

		<div class="footer">
			<?php echo $_smarty_tpl->getSubTemplate ('.\layout\layout_pied.inc.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		</div>
	</body><?php }} ?>
