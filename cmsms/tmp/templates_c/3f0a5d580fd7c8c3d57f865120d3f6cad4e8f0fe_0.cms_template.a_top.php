<?php
/* Smarty version 3.1.31, created on 2023-05-14 17:38:32
  from "cms_template:a_top" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_64610078177d94_89959495',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3f0a5d580fd7c8c3d57f865120d3f6cad4e8f0fe' => 
    array (
      0 => 'cms_template:a_top',
      1 => '1684078227',
      2 => 'cms_template',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64610078177d94_89959495 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_cms_get_language')) require_once 'D:\\xampp\\htdocs\\cmsms\\lib\\plugins\\function.cms_get_language.php';
if (!is_callable('smarty_function_title')) require_once 'D:\\xampp\\htdocs\\cmsms\\lib\\plugins\\function.title.php';
if (!is_callable('smarty_function_sitename')) require_once 'D:\\xampp\\htdocs\\cmsms\\lib\\plugins\\function.sitename.php';
if (!is_callable('smarty_function_metadata')) require_once 'D:\\xampp\\htdocs\\cmsms\\lib\\plugins\\function.metadata.php';
if (!is_callable('smarty_function_cms_stylesheet')) require_once 'D:\\xampp\\htdocs\\cmsms\\lib\\plugins\\function.cms_stylesheet.php';
echo CMS_Content_Block::smarty_fetch_pagedata(array(),$_smarty_tpl);?>
<!doctype html>
<html lang="<?php echo smarty_function_cms_get_language(array(),$_smarty_tpl);?>
">

<head>
	<title><?php echo smarty_function_title(array(),$_smarty_tpl);?>
 - <?php echo smarty_function_sitename(array(),$_smarty_tpl);?>
</title>
	<?php echo smarty_function_metadata(array(),$_smarty_tpl);?>

	<?php echo smarty_function_cms_stylesheet(array(),$_smarty_tpl);?>

</head>
	<head>
	    <title><?php echo smarty_function_title(array(),$_smarty_tpl);?>
 - <?php echo smarty_function_sitename(array(),$_smarty_tpl);?>
</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<?php echo smarty_function_metadata(array(),$_smarty_tpl);?>

		<link rel="stylesheet" href="templates/assets/css/main.css" />
		<noscript><link rel="stylesheet" href="templates/assets/css/noscript.css" /></noscript>
		<?php echo smarty_function_cms_stylesheet(array(),$_smarty_tpl);?>

	</head>
	<body class="is-preload landing">
	    <div id="page-wrapper">
<header id="header">
<h1 id="logo"><a href="index.html">Landed</a></h1>
<nav id="nav">
	<?php echo Navigator::function_plugin(array(),$_smarty_tpl);?>

</nav>
</header><?php }
}
