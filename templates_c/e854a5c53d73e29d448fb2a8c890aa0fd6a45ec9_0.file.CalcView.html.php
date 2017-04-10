<?php
/* Smarty version 3.1.30, created on 2017-04-10 21:20:43
  from "C:\xampp\htdocs\_PROJEKTY\kredyt\app\CalcView.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58ebdb0b341582_90732447',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e854a5c53d73e29d448fb2a8c890aa0fd6a45ec9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\_PROJEKTY\\kredyt\\app\\CalcView.html',
      1 => 1491852023,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../templates/main.html' => 1,
  ),
),false)) {
function content_58ebdb0b341582_90732447 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_43383060558ebdb0b2dfaf6_44846045', 'opis_kalkulatora');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_196235266458ebdb0b33d704_02326995', 'content_kalkulatora');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_130453019858ebdb0b33d705_79653343', 'footer');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:../templates/main.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'opis_kalkulatora'} */
class Block_43383060558ebdb0b2dfaf6_44846045 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="row">
    <div class="col-sm-8 col-sm-offset-2 text">
        <h1 class="wow fadeInLeftBig">Kalkulator kredytowy</h1>
        <div class="description wow fadeInLeftBig">
            <p>
                Oblicz ile będą wynosiły twoje raty kredytowe i odpowiednio rozplanuj swoje domowe wydatki. <br> Spróbuj już teraz!
            </p>
        </div>
    </div>
</div>
<?php
}
}
/* {/block 'opis_kalkulatora'} */
/* {block 'content_kalkulatora'} */
class Block_196235266458ebdb0b33d704_02326995 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="row">
    <div class="col-sm-4 col-sm-offset-4 r-form-1-box wow fadeInUp">
        <div class="r-form-1-top">
            <div class="r-form-1-top-left">
                <h3>Wprowadź dane</h3>
                <p>Uzupełnij formularz, aby otrzymać swoje wyliczenia:</p>
            </div>
            <div class="r-form-1-top-right">
                <i class="fa fa-pencil"></i>
            </div>
        </div>
        <div class="r-form-1-bottom">
            <form role="form" action="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/app/calc.php" method="post">
                <div class="form-group">
                    <label class="sr-only" for="kwota_kredytu">Kwota kredytu</label>
                    <input type="text" name="kwota_kredytu" placeholder="Kwota kredytu..." class="r-form-1-first-name form-control" id="kwota_kredytu" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->kwota;?>
" >
                </div>
                <div class="form-group">
                    <label class="sr-only" for="oprocentowanie_roczne">Oprocentowanie</label>
                    <input type="text" name="oprocentowanie_roczne" placeholder="Oprocentowanie..." class="r-form-1-last-name form-control" id="oprocentowanie_roczne" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->oprocentowanie;?>
" >
                </div>
                <div class="form-group">
                    <label class="sr-only" for="okres_splaty">Okres spłaty</label>
                    <input type="text" name="okres_splaty" placeholder="Okres spłaty..." class="r-form-1-email form-control" id="okres_splaty" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->okres_splaty;?>
" >
                </div>
                <button type="submit" class="btn">Sprawdź!</button>
            </form>
        </div>
    </div>





    <?php if ($_smarty_tpl->tpl_vars['msgs']->value->isError() || isset($_smarty_tpl->tpl_vars['result']->value)) {?>
    <div class="col-sm-3 r-form-1-box msg-box wow fadeInUp">


        <?php if ($_smarty_tpl->tpl_vars['msgs']->value->isError()) {?>
        <p class="msg-box-header">BŁĘDY: </p>
        <ol>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getErrors(), 'err');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['err']->value) {
?>
            <li><?php echo $_smarty_tpl->tpl_vars['err']->value;?>
</li>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        </ol>
        <?php }?>

        <?php if (isset($_smarty_tpl->tpl_vars['result']->value)) {?>
        <p class="msg-box-header">WYNIK: </p>
        <p class="wynik"><span class="msg-wynik"> Rata kredytu: </span><?php echo $_smarty_tpl->tpl_vars['result']->value;?>
 zł</p>
        <p class="wynik"><span class="msg-wynik"> Koszt kredytu: </span><?php echo $_smarty_tpl->tpl_vars['koszt']->value;?>
 zł</p>
        <?php }?>

    </div>

    <?php }?>


</div>
<?php
}
}
/* {/block 'content_kalkulatora'} */
/* {block 'footer'} */
class Block_130453019858ebdb0b33d705_79653343 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 © Regy Bootstrap Registration Template by AZMIND <?php
}
}
/* {/block 'footer'} */
}
