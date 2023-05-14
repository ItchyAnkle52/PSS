<?php
/* Smarty version 3.1.31, created on 2023-05-14 21:55:30
  from "tpl_body:21" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_64613cb287e165_90387893',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '102dc85d801fb3f38f811f9f4df54eadef521ab6' => 
    array (
      0 => 'tpl_body:21',
      1 => '1684094093',
      2 => 'tpl_body',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64613cb287e165_90387893 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_global_content')) require_once 'D:\\xampp\\htdocs\\cmsms\\lib\\plugins\\function.global_content.php';
echo smarty_function_global_content(array('name'=>'a_top'),$_smarty_tpl);?>


	<?php CMS_Content_Block::smarty_internal_fetch_contentblock(array(),$_smarty_tpl); ?>

<?php echo smarty_function_global_content(array('name'=>'a_bottom'),$_smarty_tpl);
}
}
