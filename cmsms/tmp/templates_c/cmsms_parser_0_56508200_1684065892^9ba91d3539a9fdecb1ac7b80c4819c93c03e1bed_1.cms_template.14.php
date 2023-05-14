<?php
/* Smarty version 3.1.31, created on 2023-05-14 14:04:52
  from "cms_template:14" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_6460ce648fa578_98228342',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9ba91d3539a9fdecb1ac7b80c4819c93c03e1bed' => 
    array (
      0 => 'cms_template:14',
      1 => '1684065858',
      2 => 'cms_template',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6460ce648fa578_98228342 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_global_content')) require_once 'D:\\xampp\\htdocs\\cmsms\\lib\\plugins\\function.global_content.php';
if (!is_callable('smarty_function_title')) require_once 'D:\\xampp\\htdocs\\cmsms\\lib\\plugins\\function.title.php';
echo smarty_function_global_content(array('name'=>'a_top'),$_smarty_tpl);?>


<nav id="menu">
	
</nav>

<section id="content">
	<h1><?php echo smarty_function_title(array(),$_smarty_tpl);?>
</h1>
	
</section>
	
<?php echo smarty_function_global_content(array('name'=>'a_bottom'),$_smarty_tpl);
}
}
