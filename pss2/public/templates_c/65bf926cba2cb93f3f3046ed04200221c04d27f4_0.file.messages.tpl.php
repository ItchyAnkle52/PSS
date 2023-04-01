<?php
/* Smarty version 4.1.0, created on 2023-01-08 19:33:30
  from 'C:\xampp\htdocs\Aplikacje_sieciowe\projekt_zaliczeniowy\app\views\templates\messages.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_63bb0c7ac29bb9_87432295',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '65bf926cba2cb93f3f3046ed04200221c04d27f4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Aplikacje_sieciowe\\projekt_zaliczeniowy\\app\\views\\templates\\messages.tpl',
      1 => 1673202668,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63bb0c7ac29bb9_87432295 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['msgs']->value->isError()) {?>

	<div class="col-md-6">
		<div class="row mb-5">
		<div class="col-md-12">
			<h2 class="h3 mb-3 text-black">Info </h2>
			<div class="p-3 p-lg-5 border bg-white">
				<ul>
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getMessages(), 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>
						<li class=""><?php echo $_smarty_tpl->tpl_vars['msg']->value->text;?>
</li>
					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</ul>
			</div>
			</div>
		</div>
		</div>
	</div>	

<?php }
}
}
