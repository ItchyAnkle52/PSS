<?php
/* Smarty version 3.1.31, created on 2023-05-14 14:04:27
  from "tpl_head:1" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_6460ce4b62c4b7_26921819',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '64060443164a9839c71c34206331731aaeeac788' => 
    array (
      0 => 'tpl_head:1',
      1 => '1684060300',
      2 => 'tpl_head',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6460ce4b62c4b7_26921819 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_title')) require_once 'D:\\xampp\\htdocs\\cmsms\\lib\\plugins\\function.title.php';
if (!is_callable('smarty_function_sitename')) require_once 'D:\\xampp\\htdocs\\cmsms\\lib\\plugins\\function.sitename.php';
if (!is_callable('smarty_function_metadata')) require_once 'D:\\xampp\\htdocs\\cmsms\\lib\\plugins\\function.metadata.php';
if (!is_callable('smarty_function_cms_stylesheet')) require_once 'D:\\xampp\\htdocs\\cmsms\\lib\\plugins\\function.cms_stylesheet.php';
?>
<head>
	<title><?php echo smarty_function_title(array(),$_smarty_tpl);?>
 - <?php echo smarty_function_sitename(array(),$_smarty_tpl);?>
</title>
	<?php echo smarty_function_metadata(array(),$_smarty_tpl);?>

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/purecss@3.0.0/build/pure-min.css" integrity="sha384-X38yfunGUhNzHpBaEBsWLO+A0HDYOQi8ufWDkZ0k9e0eXz/tH3II7uKZ9msv++Ls"      crossorigin="anonymous">
	<?php echo smarty_function_cms_stylesheet(array(),$_smarty_tpl);?>

</head><?php }
}
