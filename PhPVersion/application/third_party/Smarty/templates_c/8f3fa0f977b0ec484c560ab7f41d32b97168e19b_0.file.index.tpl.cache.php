<?php
/* Smarty version 3.1.30, created on 2016-10-19 12:24:01
  from "D:\dev\web\wamp64\www\web2\application\views\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_580765e13bc089_05879590',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8f3fa0f977b0ec484c560ab7f41d32b97168e19b' => 
    array (
      0 => 'D:\\dev\\web\\wamp64\\www\\web2\\application\\views\\index.tpl',
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
function content_580765e13bc089_05879590 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->compiled->nocache_hash = '4800580765e132dd02_94044524';
$_smarty_tpl->_subTemplateRender("file:./Layout/header.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<body>
	<section>
		<?php $_smarty_tpl->_subTemplateRender("file:./Layout/navbar.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

		<article>
			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11257580765e13b9414_68580154', "article");
?>

		</article>
	</section>
</body><?php }
/* {block "article"} */
class Block_11257580765e13b9414_68580154 extends Smarty_Internal_Block
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
