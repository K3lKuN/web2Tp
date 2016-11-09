<?php /* Smarty version Smarty-3.1.15, created on 2013-12-18 11:55:01
         compiled from "C:\wamp\www\prjRct\application\views\include\myInfo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2563952b18d15332c89-36791350%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c72ad1ba7b9485c550a4d744a5553f72fbf1ec68' => 
    array (
      0 => 'C:\\wamp\\www\\prjRct\\application\\views\\include\\myInfo.tpl',
      1 => 1387367577,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2563952b18d15332c89-36791350',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'userInfo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_52b18d15372f86_82970765',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52b18d15372f86_82970765')) {function content_52b18d15372f86_82970765($_smarty_tpl) {?><p style="text-align: center"><img src="<?php echo base_url('res/images/uploads/avatar/');?>
/<?php echo $_smarty_tpl->tpl_vars['userInfo']->value->UTI_AVATAR;?>
" width="30%"></p>
<p>Vos informations personnels : </p>
<ul>
	<li>Login : <?php echo $_smarty_tpl->tpl_vars['userInfo']->value->UTI_LOGIN;?>
</li>
	<li>Adresse e-mail : <a href="mailto:<?php echo $_smarty_tpl->tpl_vars['userInfo']->value->UTI_MAIL;?>
"><?php echo $_smarty_tpl->tpl_vars['userInfo']->value->UTI_MAIL;?>
</a></li>
	<li>Nom : <?php echo $_smarty_tpl->tpl_vars['userInfo']->value->UTI_NOM;?>
</li>
	<li>Prénom : <?php echo $_smarty_tpl->tpl_vars['userInfo']->value->UTI_PRENOM;?>
</li>
</ul><?php }} ?>
