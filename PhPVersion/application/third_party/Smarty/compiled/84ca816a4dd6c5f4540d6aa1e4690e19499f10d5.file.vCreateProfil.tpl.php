<?php /* Smarty version Smarty-3.1.15, created on 2016-11-09 14:41:07
         compiled from "application\views\vCreateProfil.tpl" */ ?>
<?php /*%%SmartyHeaderCode:955758076b547454e0-30949163%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '84ca816a4dd6c5f4540d6aa1e4690e19499f10d5' => 
    array (
      0 => 'application\\views\\vCreateProfil.tpl',
      1 => 1478701627,
      2 => 'file',
    ),
    '28729d03339e86de440410e3f563e2a15db0333c' => 
    array (
      0 => 'application\\views\\vIndex.tpl',
      1 => 1478702340,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '955758076b547454e0-30949163',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_58076b5476f7b5_68989268',
  'variables' => 
  array (
    'profil' => 0,
    'pf' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58076b5476f7b5_68989268')) {function content_58076b5476f7b5_68989268($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('./Layout/layout_entete.inc.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<body>
	<section>
		<header>
			<div class="col-md-12">
				<?php echo $_smarty_tpl->getSubTemplate ('./Layout/navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

			</div>
		</header>
		<article>
			
<div class="row">
<div class="col-md-1">
</div>
<div class="col-md-10 well">
	<h1 style="text-align: center">Créer un profil</h1>
	<form class="form-horizontal" method="post" action="<?php echo site_url('cAccount/signUp');?>
" enctype="multipart/form-data">
		<div class="form-group">
			<?php echo form_error('prenom');?>

			<label for="prenom" class="col-xs-12 col-sm-6 col-md-2 ">Prenom</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="prenom" name="prenom" placeholder="Prenom">
			</div>
		</div>
		<div class="form-group">
			<?php echo form_error('nom');?>

			<label for="nom" class="col-xs-12 col-sm-6 col-md-2 ">Nom</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="nom" name="nom" placeholder="Nom">
			</div>
		</div>
		<div class="form-group">
			<?php echo form_error('filiaire');?>

			<label for="filaire" class="col-xs-12 col-sm-6 col-md-2 ">Filiaire</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="filaire" name="filiaire" placeholder="Filiaire">
			</div>
		</div>
		<div class="form-group">
			<?php echo form_error('ville');?>

			<label for="Ville" class="col-xs-12 col-sm-6 col-md-2 ">Ville</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="Ville" name="ville" placeholder="Ville">
			</div>
		</div>
		<div class="form-group">
			<?php echo form_error('telephone');?>

			<label for="Telephone" class="col-xs-12 col-sm-6 col-md-2 ">Telephone</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="Telephone" name="telephone" placeholder="Telephone">
			</div>
		</div>
		<div class="form-group">
			<?php echo form_error('dob');?>

			<label for="dob" class="col-xs-12 col-sm-6 col-md-2 ">Date of Birth</label>
			<div class="col-sm-10">
				<input type="date" class="form-control" id="dob" name="dob" placeholder="">
			</div>
		</div>
		<div class="form-group">
			<?php echo form_error('email');?>

			<label for="Email" class="col-xs-12 col-sm-6 col-md-2 ">Email</label>
			<div class="col-sm-10">
				<input type="email" class="form-control" id="Email" name="email" placeholder="Email">
			</div>
		</div>
		<div class="form-group">
			<?php echo form_error('pass');?>

			<label for="Password" class="col-xs-12 col-sm-6 col-md-2 ">Password</label>
			<div class="col-sm-10">
				<input type="password" class="form-control" id="Password" name="pass" placeholder="Password">
			</div>
		</div>
		<div class="form-group">
			<?php echo form_error('cPass');?>

			<label for="Passwordc" class="col-xs-12 col-sm-6 col-md-2 ">Confirmation password</label>
			<div class="col-sm-10">
				<input type="password" class="form-control" id="Passwordc" name="cPass" placeholder="Password">
			</div>
		</div>
		<div class="form-group">
			<?php echo form_error('img');?>

			<label for="imgProfil" class="col-xs-12 col-sm-6 col-md-2 ">Image de profil</label>
			<input type="file" id="imgProfil" name="imgProfil" class="col-xs-12 col-sm-6 col-md-2 ">
			<p class="help-block">Veuillez choisir une image de profil</p>
		</div>
		<div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
				<button type="submit" class="btn btn-default" name="action" value="Valider">Sign in</button>
			</div>
		</div>
	</form>
</div>
<div class="col-md-1">
</div>
</div>

		</article>
	</section>
</body><?php }} ?>
