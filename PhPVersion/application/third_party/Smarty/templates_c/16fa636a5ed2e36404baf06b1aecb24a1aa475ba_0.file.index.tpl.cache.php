<?php
/* Smarty version 3.1.30, created on 2016-10-19 12:15:22
  from "D:\OneDrive\Developpement\www\web2\application\views\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_580763da6721e8_58757329',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '16fa636a5ed2e36404baf06b1aecb24a1aa475ba' => 
    array (
      0 => 'D:\\OneDrive\\Developpement\\www\\web2\\application\\views\\index.tpl',
      1 => 1476879316,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./Layout/header.php' => 1,
    'file:./Layout/navbar.php' => 1,
  ),
),false)) {
function content_580763da6721e8_58757329 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->compiled->nocache_hash = '15988580763da6387b5_86018024';
$_smarty_tpl->_subTemplateRender("file:./Layout/header.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<body>
	<section>
		<?php $_smarty_tpl->_subTemplateRender("file:./Layout/navbar.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

		<article>
			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8093580763da66fed7_80239414', "article");
?>

		</article>
	</section>
</body><?php }
/* {block "article"} */
class Block_8093580763da66fed7_80239414 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

				<p>Ceci est un block</p>
				<a href="<?php echo site_url('Welcome/autre');?>
">aze</a>
			<?php
}
}
/* {/block "article"} */
}
