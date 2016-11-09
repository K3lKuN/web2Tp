<?php /* Smarty version Smarty-3.1.15, created on 2016-11-09 15:11:43
         compiled from "application\views\vLogin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1197652acee674797f2-06776531%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '300f97539d4b1cde84e3ca7fae960e4850f41b9f' => 
    array (
      0 => 'application\\views\\vLogin.tpl',
      1 => 1478704300,
      2 => 'file',
    ),
    '28729d03339e86de440410e3f563e2a15db0333c' => 
    array (
      0 => 'application\\views\\vIndex.tpl',
      1 => 1478702340,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1197652acee674797f2-06776531',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_52acee674a2926_41124340',
  'variables' => 
  array (
    'profil' => 0,
    'pf' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52acee674a2926_41124340')) {function content_52acee674a2926_41124340($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('./Layout/layout_entete.inc.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

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
		<form class="form-horizontal" method="post" action="<?php echo site_url('cAccount/login');?>
" enctype="multipart/form-data">
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
				<div class="col-sm-offset-2 col-sm-10">
					<button type="submit" class="btn btn-default" name="action" value="login">Sign in</button>
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
