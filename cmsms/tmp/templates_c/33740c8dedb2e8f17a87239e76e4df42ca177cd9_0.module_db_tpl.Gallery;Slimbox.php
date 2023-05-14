<?php
/* Smarty version 3.1.31, created on 2023-05-14 23:25:38
  from "module_db_tpl:Gallery;Slimbox" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_646151d2892234_17191021',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '33740c8dedb2e8f17a87239e76e4df42ca177cd9' => 
    array (
      0 => 'module_db_tpl:Gallery;Slimbox',
      1 => 1684099537,
      2 => 'module_db_tpl',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_646151d2892234_17191021 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="main" class="wrapper style1">
<div class="container">
<section>
<div class="box alt">
    <div class="row gtr-50 gtr-uniform">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['images']->value, 'image');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['image']->value) {
?>
        <div class="col-4 col-6-xsmall">

            <a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['image']->value->file;?>
">
              <img class="image fit" src="<?php echo $_smarty_tpl->tpl_vars['image']->value->file;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['image']->value->titlename;?>
">
            </a>
            

        </div>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

    </div>
 </div>
</section>
</div>
</div><?php }
}
