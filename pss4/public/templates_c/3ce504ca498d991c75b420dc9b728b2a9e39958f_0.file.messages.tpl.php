<?php
/* Smarty version 4.1.0, created on 2023-04-23 14:53:35
  from 'D:\xampp\htdocs\pss\pss4\app\views\templates\messages.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_64452a4f328e28_24055829',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3ce504ca498d991c75b420dc9b728b2a9e39958f' => 
    array (
      0 => 'D:\\xampp\\htdocs\\pss\\pss4\\app\\views\\templates\\messages.tpl',
      1 => 1674817568,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64452a4f328e28_24055829 (Smarty_Internal_Template $_smarty_tpl) {
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
