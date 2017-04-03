<?php
/* Smarty version 3.1.30, created on 2017-04-04 00:00:34
  from "C:\xampp\htdocs\_PROJEKTY\kredyt\templates\main.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58e2c6024a0eb5_38912623',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e0a599e1f2fa596c13e8a0952cf22f0c26eaea96' => 
    array (
      0 => 'C:\\xampp\\htdocs\\_PROJEKTY\\kredyt\\templates\\main.html',
      1 => 1491256828,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58e2c6024a0eb5_38912623 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="pl">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo (($tmp = @$_smarty_tpl->tpl_vars['page_title']->value)===null||$tmp==='' ? "Tytuł domyślny" : $tmp);?>
</title>

    <!-- CSS -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:400,700">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/assets/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/assets/css/animate.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/assets/css/style.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/assets/css/media-queries.css">

    <!--[if lt IE 9]>
    <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"><?php echo '</script'; ?>
>
    <![endif]-->

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/assets/ico/favicon.png">

</head>
    <body>

        <!-- Top content -->
        <div class="top-content">
            <div class="container">

                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_123790681558e2c6024991b2_83334698', 'opis_kalkulatora');
?>


                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_91949982758e2c60249d035_40361143', 'content_kalkulatora');
?>



            </div>
        </div>

        <footer>
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_141791755158e2c60249d031_10443482', 'footer');
?>

        </footer>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_35625952858e2c6024a0eb2_89553814', 'scripts');
?>


    </body>
</html><?php }
/* {block 'opis_kalkulatora'} */
class Block_123790681558e2c6024991b2_83334698 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    Domyślny opis kalkulatora
                <?php
}
}
/* {/block 'opis_kalkulatora'} */
/* {block 'content_kalkulatora'} */
class Block_91949982758e2c60249d035_40361143 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    Domyślna zawartość kalkulatora
                <?php
}
}
/* {/block 'content_kalkulatora'} */
/* {block 'footer'} */
class Block_141791755158e2c60249d031_10443482 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść stopki... <?php
}
}
/* {/block 'footer'} */
/* {block 'scripts'} */
class Block_35625952858e2c6024a0eb2_89553814 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <!-- Javascript -->
            <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/assets/js/jquery-1.11.1.min.js"><?php echo '</script'; ?>
>
            <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/assets/bootstrap/js/bootstrap.min.js"><?php echo '</script'; ?>
>
            <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/assets/js/jquery.backstretch.min.js"><?php echo '</script'; ?>
>
            <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/assets/js/wow.min.js"><?php echo '</script'; ?>
>
            <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/assets/js/retina-1.1.0.min.js"><?php echo '</script'; ?>
>
            <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/assets/js/scripts.js"><?php echo '</script'; ?>
>

            <!--[if lt IE 10]>
            <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/assets/js/placeholder.js"><?php echo '</script'; ?>
>
            <![endif]-->
        <?php
}
}
/* {/block 'scripts'} */
}
