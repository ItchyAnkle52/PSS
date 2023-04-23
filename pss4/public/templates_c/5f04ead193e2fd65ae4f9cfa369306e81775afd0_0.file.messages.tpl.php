<?php
/* Smarty version 4.1.0, created on 2023-04-10 18:35:06
  from 'D:\xampp\htdocs\pss\pss3\app\views\templates\messages.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_64343aba85b939_30301423',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5f04ead193e2fd65ae4f9cfa369306e81775afd0' => 
    array (
      0 => 'D:\\xampp\\htdocs\\pss\\pss3\\app\\views\\templates\\messages.tpl',
      1 => 1674817568,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64343aba85b939_30301423 (Smarty_Internal_Template $_smarty_tpl) {
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
if ($_smarty_tpl->tpl_vars['msgs']->value->isWarning()) {?>

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
