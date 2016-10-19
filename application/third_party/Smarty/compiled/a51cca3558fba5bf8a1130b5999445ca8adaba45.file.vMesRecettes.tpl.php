<?php /* Smarty version Smarty-3.1.15, created on 2014-01-07 09:20:32
         compiled from "application\views\vMesRecettes.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2626652b19515ab5041-70711241%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a51cca3558fba5bf8a1130b5999445ca8adaba45' => 
    array (
      0 => 'application\\views\\vMesRecettes.tpl',
      1 => 1387532115,
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
      1 => 1388790375,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2626652b19515ab5041-70711241',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_52b19515b99622_39315022',
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
<?php if ($_valid && !is_callable('content_52b19515b99622_39315022')) {function content_52b19515b99622_39315022($_smarty_tpl) {?><!DOCTYPE HTML>
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
					

<table id='tTable'>
	<thead>
		<tr id='nTable'>
			<th>Date</th>
			<th>Titre</th>
			<th>Statut</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		<?php  $_smarty_tpl->tpl_vars['rct'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['rct']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['recette']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rct']->key => $_smarty_tpl->tpl_vars['rct']->value) {
$_smarty_tpl->tpl_vars['rct']->_loop = true;
?>
		 <tr id='nTable' class="<?php echo $_smarty_tpl->tpl_vars['rct']->value->RCT_ID;?>
">
			<td ><?php echo $_smarty_tpl->tpl_vars['rct']->value->RCT_DATE;?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['rct']->value->RCT_TITRE;?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['rct']->value->RCT_STATUT;?>
</td>
			<td><a href="<?php echo site_url('cMember/modRct/');?>
/<?php echo $_smarty_tpl->tpl_vars['userId']->value->UTI_ID;?>
">Modifier</a> <a href="<?php echo site_url('cMember/delRct/');?>
/<?php echo $_smarty_tpl->tpl_vars['userId']->value->UTI_ID;?>
">Supprimer</a></td>
		</tr>
		<?php } ?>
	 </tbody>
</table>
<a onclick="displayAdd(this)" href="#">Ajouter une recette</a>
<div id="add" style="display: none">
	<form method="post" action="<?php echo site_url('cRecette/addRct');?>
" enctype="multipart/form-data">
			<label for="titre">Titre* :</label>
			<input type="text" name="titre" size="25"/></br>

			<label for="description">Description* :</label>
			<textarea cols="80" class="ckeditor" id="editeur" name="description" rows="10"></textarea>

			<label for="tpsPrep">Temps de préparation :</label>
			<input type="time" name="tpsPrep"/></br>

			<label for="tpsCui">Temps de cuisson :</label>
			<input type="time" name="tpsCui"/></br>

			<label for="tpsRep">Temps de repos :</label>
			<input type="time" name="tpsRep"/></br>

			<label for="dif">Difficulté :</label>
			<select name="dif">
				<option value="facile">Facile</option>
				<option value="moyen">Moyen</option>
				<option value="difficile">Difficile</option>
			</select></br>

			<label for="cout">Coût :</label>
			<select name="cout">
				<option value="faible">Faible</option>
				<option value="moyen">Moyen</option>
				<option value="eleve">Elevé</option>
			</select></br>

			<input type="file" name="userfile"/>

			<input type="submit" name="action" value="Valider"></br>
		</form>
</div>

				</div>
			</div>
		<?php }?>
	<?php }?>

			</div>
		</div>

		<div class="footer">
			<?php echo $_smarty_tpl->getSubTemplate ('.\layout\layout_pied.inc.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		</div>
	</body><?php }} ?>
