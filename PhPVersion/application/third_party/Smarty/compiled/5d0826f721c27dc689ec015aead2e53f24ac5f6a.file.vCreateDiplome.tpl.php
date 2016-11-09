<?php /* Smarty version Smarty-3.1.15, created on 2016-11-09 15:16:42
         compiled from "application\views\vCreateDiplome.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2027958077c6d833d39-38360419%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5d0826f721c27dc689ec015aead2e53f24ac5f6a' => 
    array (
      0 => 'application\\views\\vCreateDiplome.tpl',
      1 => 1476885602,
      2 => 'file',
    ),
    '28729d03339e86de440410e3f563e2a15db0333c' => 
    array (
      0 => 'application\\views\\vIndex.tpl',
      1 => 1478702340,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2027958077c6d833d39-38360419',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_58077c6d886423_52786120',
  'variables' => 
  array (
    'profil' => 0,
    'pf' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58077c6d886423_52786120')) {function content_58077c6d886423_52786120($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('./Layout/layout_entete.inc.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<body>
	<section>
		<header>
			<div class="col-md-12">
				<?php echo $_smarty_tpl->getSubTemplate ('./Layout/navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

			</div>
		</header>
		<article>
			
	<div class="row">
		<div class="col-md-3">
		</div>
		<div class="col-md-6 well well-lg">
			<form class="form-horizontal">
			  <div class="form-group">
					<label for="prenom" class="col-xs-12 col-sm-6 col-md-2">Année d'obtention</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="prenom" placeholder="Prenom">
					</div>
				</div>
			  <div class="form-group">
			    <label for="diplome" class="col-xs-12 col-sm-6 col-md-2">Intitulié du diplome</label>
			    <div class="col-sm-10">
					<input type="text" class="form-control" id="diplome" placeholder="diplome">
				</div>
			  </div>
			  <div class="form-group">
			    <label for="lieu" class="col-xs-12 col-sm-6 col-md-2">Lieu d'obtention</label>
			    <div class="col-sm-10">
					<input type="text" class="form-control" id="lieu" placeholder="lieu">
				</div>
			  </div>
			  <button type="submit" class="btn btn-default">Ajouter un diplome</button>
			</form>
		</div>
		<div class="col-md-3">
		</div>
	</div>

		</article>
	</section>
</body><?php }} ?>
