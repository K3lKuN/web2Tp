<?php /* Smarty version Smarty-3.1.15, created on 2016-11-09 14:39:01
         compiled from "application\views\vIndex.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1316352acee6525a471-02750130%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '28729d03339e86de440410e3f563e2a15db0333c' => 
    array (
      0 => 'application\\views\\vIndex.tpl',
      1 => 1478702340,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1316352acee6525a471-02750130',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_52acee652b4171_04405589',
  'variables' => 
  array (
    'profil' => 0,
    'pf' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52acee652b4171_04405589')) {function content_52acee652b4171_04405589($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('./Layout/layout_entete.inc.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<body>
	<section>
		<header>
			<div class="col-md-12">
				<?php echo $_smarty_tpl->getSubTemplate ('./Layout/navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

			</div>
		</header>
		<article>
			
				<script type="text/javascript" src="<?php echo base_url('res/js/filtre.js');?>
"></script>
				<div class="col-md-1">
				</div>
				<div class="col-md-10 table-responsive">
					<table class="table table-striped" id="myTable">
						<thead>
							<tr>
								<th>Prenom</th>
								<th>NOM</th>
								<th>Filiaire</th>
								<th>Date de naissance</th>
							</tr>
						</thead>
						<tbody>
							<?php  $_smarty_tpl->tpl_vars['pf'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['pf']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['profil']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['pf']->key => $_smarty_tpl->tpl_vars['pf']->value) {
$_smarty_tpl->tpl_vars['pf']->_loop = true;
?>
								<tr>
									<td><?php echo $_smarty_tpl->tpl_vars['pf']->value->Prenom;?>
</td>
									<td><?php echo $_smarty_tpl->tpl_vars['pf']->value->Nom;?>
</td>
									<td><?php echo $_smarty_tpl->tpl_vars['pf']->value->Filiaire;?>
</td>
									<td><?php echo $_smarty_tpl->tpl_vars['pf']->value->Naissance;?>
</td>
								</tr>
							<?php } ?>
						</tbody>
					</table>
				</div>
				<div class="col-md-1">
				</div>
			
		</article>
	</section>
</body><?php }} ?>
