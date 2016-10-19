<?php
/* Smarty version 3.1.30, created on 2016-10-19 12:12:17
  from "D:\dev\web\wamp64\www\web2\application\views\Layout\navbar.php" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58076321694697_33985870',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e718f27e2e877723b2ce5d12c7f4b1127a04f545' => 
    array (
      0 => 'D:\\dev\\web\\wamp64\\www\\web2\\application\\views\\Layout\\navbar.php',
      1 => 1476870070,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58076321694697_33985870 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '297935807632168c261_40834544';
?>
<header>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="index.html">Master Link</a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li><a href="index.html">Accueil</a></li>
					<li><a href="createProfil.html">Créer son profil</a></li>
				</ul>
				<form class="navbar-form navbar-left">
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Search">
					</div>
					<button type="submit" class="btn btn-default">Chercher un étudiant</button>
				</form>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="connect.html">conection</a></li>
				</ul>
			</div><!-- /.navbar-collapse -->
		</div><!-- /.container-fluid -->
	</nav>
</header><?php }
}
