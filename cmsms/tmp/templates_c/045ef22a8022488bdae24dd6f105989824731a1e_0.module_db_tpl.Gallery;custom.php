<?php
/* Smarty version 3.1.31, created on 2023-05-14 22:50:46
  from "module_db_tpl:Gallery;custom" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_646149a67041b6_89924222',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '045ef22a8022488bdae24dd6f105989824731a1e' => 
    array (
      0 => 'module_db_tpl:Gallery;custom',
      1 => 1684097445,
      2 => 'module_db_tpl',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_646149a67041b6_89924222 (Smarty_Internal_Template $_smarty_tpl) {
?>
<h1>Full CSS gallery with popin</h1>
<div id="gallery">
<ul>
  <li id="image1"> 
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['images']->value, 'image');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['image']->value) {
if ($_smarty_tpl->tpl_vars['image']->value->isdir) {?>
		<a href="<?php echo $_smarty_tpl->tpl_vars['image']->value->file;?>
" title="<?php echo $_smarty_tpl->tpl_vars['image']->value->titlename;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['image']->value->thumb;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['image']->value->titlename;?>
" /></a><br />
		<?php echo $_smarty_tpl->tpl_vars['image']->value->titlename;?>

	<?php } else { ?>
   <a class="group" href="<?php echo $_smarty_tpl->tpl_vars['image']->value->file;?>
" title="<?php echo $_smarty_tpl->tpl_vars['image']->value->comment;?>
" rel="prettyPhoto[<?php echo $_smarty_tpl->tpl_vars['galleryid']->value;?>
]"><img src="<?php echo $_smarty_tpl->tpl_vars['image']->value->thumb;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['image']->value->titlename;?>
" /></a>
	<?php }
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>


</ul>
</div><?php }
}
