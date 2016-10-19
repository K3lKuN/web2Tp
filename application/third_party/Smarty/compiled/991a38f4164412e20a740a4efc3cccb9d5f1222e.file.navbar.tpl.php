<?php /* Smarty version Smarty-3.1.15, created on 2016-10-19 15:11:02
         compiled from "D:\dev\web\wamp64\www\web2\application\views\Layout\navbar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1133558076903c57af2-05045323%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '991a38f4164412e20a740a4efc3cccb9d5f1222e' => 
    array (
      0 => 'D:\\dev\\web\\wamp64\\www\\web2\\application\\views\\Layout\\navbar.tpl',
      1 => 1476889793,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1133558076903c57af2-05045323',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_58076903c59d16_45388249',
  'variables' => 
  array (
    'logged' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58076903c59d16_45388249')) {function content_58076903c59d16_45388249($_smarty_tpl) {?><nav class="navbar navbar-default">
	<div class="container-fluid">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="<?php echo site_url('Welcome');?>
">Master Link</a>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav">
				<li><a href="<?php echo site_url('Welcome');?>
">Accueil</a></li>
				<?php if (isset($_smarty_tpl->tpl_vars['logged']->value)&&$_smarty_tpl->tpl_vars['logged']->value==true) {?>
					<li><a href="<?php echo site_url('cAccount/profil');?>
">Mon Profil</a></li>
				    <li><a href="<?php echo site_url('cDiplome/createDiplome');?>
">Créer un diplôme</a></li>
				<?php } else { ?>
					<li><a href="<?php echo site_url('cAccount/createProfil');?>
">Créer son profil</a></li>
				<?php }?>
			</ul>
			<form class="navbar-form navbar-left">
				<div class="form-group" class="input-filter-container">
					<input type="text" id="InputSearch" onkeyup="filtreTable()" class="form-control" placeholder="Recherche">
				</div>
			</form>
			<ul class="nav navbar-nav navbar-right">
				<?php if (isset($_smarty_tpl->tpl_vars['logged']->value)&&$_smarty_tpl->tpl_vars['logged']->value==true) {?>
					<li><a href="<?php echo site_url('cAccount/logout');?>
">déconnection</a></li>
				<?php } else { ?>
					<li><a href="<?php echo site_url('cAccount/login');?>
">conection</a></li>
				<?php }?>
			</ul>
		</div><!-- /.navbar-collapse -->
	</div><!-- /.container-fluid -->
</nav><?php }} ?>
