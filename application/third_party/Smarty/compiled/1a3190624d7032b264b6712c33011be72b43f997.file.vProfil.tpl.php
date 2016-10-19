<?php /* Smarty version Smarty-3.1.15, created on 2016-10-19 14:04:26
         compiled from "application\views\vProfil.tpl" */ ?>
<?php /*%%SmartyHeaderCode:178458077d46b6f2a9-27014445%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1a3190624d7032b264b6712c33011be72b43f997' => 
    array (
      0 => 'application\\views\\vProfil.tpl',
      1 => 1476885863,
      2 => 'file',
    ),
    '28729d03339e86de440410e3f563e2a15db0333c' => 
    array (
      0 => 'application\\views\\vIndex.tpl',
      1 => 1476882945,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '178458077d46b6f2a9-27014445',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_58077d46b8ec70_08155349',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58077d46b8ec70_08155349')) {function content_58077d46b8ec70_08155349($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('./Layout/layout_entete.inc.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<body>
	<section>
		<header>
			<div class="col-md-12">
				<?php echo $_smarty_tpl->getSubTemplate ('./Layout/navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

			</div>
		</header>
		<article>
			
<div class="col-md-8 centered">
	<h1>Kevin Garabedian</h1>
	<ul class="inl">
		<li class="inl">
			<img src="res/image/K3lKuN.png" alt="Photo de profil" class="img-responsive profile">
		</li>						
		<li class="inl">						
			<form class="form-horizontal">													
				<div class="form-group">								
					<label for="filiaire" class="col-sm-4 control-label">Filiaire</label>
					<div class="col-sm-8">	
						<div class="input-group">									
							<input type="text" class="form-control" placeholder="Génie Logiciel">										
							<span class="input-group-btn">
								<button class="btn btn-default" type="button">Modifier</button>
							</span>
						</div>										
					</div>
				</div>																
				<div class="form-group">							
					<label for="ville" class="col-sm-4 control-label">Ville</label>								
					<div class="col-sm-8">	
						<div class="input-group">									
							<input type="text" class="form-control" placeholder="Marseille">										
							<span class="input-group-btn">
								<button class="btn btn-default" type="button">Modifier</button>
							</span>
						</div>										
					</div>
				</div>																
				<div class="form-group">						
					<label for="telephone" class="col-sm-4 control-label">Téléphone</label>
					<div class="col-sm-8">	
						<div class="input-group">									
							<input type="text" class="form-control" placeholder="06123456789">										
							<span class="input-group-btn">
								<button class="btn btn-default" type="button">Modifier</button>
							</span>
						</div>										
					</div>									
				</div>																
				<div class="form-group">									
					<label for="mail" class="col-sm-4 control-label">Mail</label>																			
					<div class="col-sm-8">
						<div class="input-group">									
						<input type="text" class="form-control" placeholder="garabedian.kevin@gmail.com">										
							<span class="input-group-btn">
								<button class="btn btn-default" type="button">Modifier</button>
							</span>
					</div>
					</div>	
				</div>
				<!--<div class="form-group">
					<div class="col-sm-offset-4 col-sm-8">
					  <button type="submit" class="btn btn-default">Modifier</button>
					</div>
				</div>-->
			</form>						
		</li>										
	</div>
</div>

		</article>
	</section>
</body><?php }} ?>
