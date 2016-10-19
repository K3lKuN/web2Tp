<?php /* Smarty version Smarty-3.1.15, created on 2013-12-19 16:13:00
         compiled from "application\views\upload_success.tpl" */ ?>
<?php /*%%SmartyHeaderCode:399052b31b0c35a459-83272903%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b9afeebe17532ba8b9dbb66554bbfe90e7dded53' => 
    array (
      0 => 'application\\views\\upload_success.tpl',
      1 => 1387468005,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '399052b31b0c35a459-83272903',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_52b31b0c386730_65367063',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52b31b0c386730_65367063')) {function content_52b31b0c386730_65367063($_smarty_tpl) {?><html>
<head>
<title>Upload Form</title>
</head>
<body>

<h3>Your file was successfully uploaded!</h3>

<ul>
<<?php ?>?php foreach ($upload_data as $item => $value):?<?php ?>>
<li><<?php ?>?php echo $item;?<?php ?>>: <<?php ?>?php echo $value;?<?php ?>></li>
<<?php ?>?php endforeach; ?<?php ?>>
</ul>

<p><<?php ?>?php echo anchor('upload', 'Upload Another File!'); ?<?php ?>></p>

</body>
</html><?php }} ?>
