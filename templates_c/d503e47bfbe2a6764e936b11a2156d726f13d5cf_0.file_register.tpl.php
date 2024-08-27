<?php
/* Smarty version 5.4.0, created on 2024-08-27 12:57:01
  from 'file:register.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.0',
  'unifunc' => 'content_66cdbf0ded52c5_54380760',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd503e47bfbe2a6764e936b11a2156d726f13d5cf' => 
    array (
      0 => 'register.tpl',
      1 => 1724758806,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_66cdbf0ded52c5_54380760 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\MAMP\\htdocs\\globus\\yiponline\\templates';
?><!DOCTYPE html>
<html>
<head>
    <title>User Registration</title>
    <link rel="stylesheet" type="text/css" href="assets/styles.css">
</head>
<body>
    <h1>Register</h1>

    <?php if ((null !== ($_smarty_tpl->getValue('error') ?? null))) {?>
        <p class="error"><?php echo $_smarty_tpl->getValue('error');?>
</p>
    <?php }?>

    <form method="post" action="register.php">
        <div>
            <label for="username">Username:</label>
            <input type="text" name="username" id="username" value="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('username'), ENT_QUOTES, 'UTF-8', true);?>
" />
            <?php if ((null !== ($_smarty_tpl->getValue('errors')['username'] ?? null))) {?><p class="error"><?php echo $_smarty_tpl->getValue('errors')['username'];?>
</p><?php }?>
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" value="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('email'), ENT_QUOTES, 'UTF-8', true);?>
" />
            <?php if ((null !== ($_smarty_tpl->getValue('errors')['email'] ?? null))) {?><p class="error"><?php echo $_smarty_tpl->getValue('errors')['email'];?>
</p><?php }?>
        </div>
        <div>
            <label for="password">Password:</label>
            <input type="password" name="password" id="password" />
            <?php if ((null !== ($_smarty_tpl->getValue('errors')['password'] ?? null))) {?><p class="error"><?php echo $_smarty_tpl->getValue('errors')['password'];?>
</p><?php }?>
        </div>
        <div>
            <input type="submit" value="Register" />
        </div>
    </form>
</body>
</html>
<?php }
}
