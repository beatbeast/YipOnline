<?php
/* Smarty version 5.4.0, created on 2024-08-27 12:58:47
  from 'file:confirmation.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.0',
  'unifunc' => 'content_66cdbf77099237_57041306',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8570f5d5bc585c920ded15f98cf92aba2b80e177' => 
    array (
      0 => 'confirmation.tpl',
      1 => 1724758827,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_66cdbf77099237_57041306 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\MAMP\\htdocs\\globus\\yiponline\\templates';
?><!DOCTYPE html>
<html>
<head>
    <title>Registration Confirmation</title>
    <link rel="stylesheet" type="text/css" href="assets/styles.css">
</head>
<body>
    <h1>Thank You for Registering!</h1>
    <p>Your username: <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('username'), ENT_QUOTES, 'UTF-8', true);?>
</p>
    <p>Your email: <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('email'), ENT_QUOTES, 'UTF-8', true);?>
</p>
</body>
</html>
<?php }
}
