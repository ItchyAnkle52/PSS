<?php
/* Smarty version 4.1.0, created on 2023-04-23 17:16:03
  from 'D:\xampp\htdocs\pss\pss4\app\views\templates\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_64454bb3dbc104_85445802',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4ccc9d6311c4981577f8037a594e1fcd17af891e' => 
    array (
      0 => 'D:\\xampp\\htdocs\\pss\\pss4\\app\\views\\templates\\main.tpl',
      1 => 1682262961,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64454bb3dbc104_85445802 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!-- /*
* Bootstrap 5
* Template Name: Furni
* Template Author: Untree.co
* Template URI: https://untree.co/
* License: https://creativecommons.org/licenses/by/3.0/
*/ -->
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="Untree.co">
  <link rel="shortcut icon" href="favicon.png">

  <meta name="description" content="" />
  <meta name="keywords" content="bootstrap, bootstrap4" />

		<!-- Bootstrap CSS -->
		<link href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/css/bootstrap.min.css" rel="stylesheet" type="text/css">
		<link href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet" type="text/css">
		<link href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/css/tiny-slider.css" rel="stylesheet" type="text/css">
		<link href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/css/style.css" rel="stylesheet" type="text/css">
	    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/js/functions.js"><?php echo '</script'; ?>
>
		<title>Furni</title>
	</head>

	<body>

		<!-- Start Header/Navigation -->
		<nav class="custom-navbar navbar navbar navbar-expand-md navbar-dark bg-dark" arial-label="Furni navigation bar">

			<div class="container">
				<a class="navbar-brand" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
home">Furni<span>.</span></a>

				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni" aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarsFurni">
					<ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
						<!-- <li class="nav-item active"> -->
						<?php if ((isset($_SESSION['role']))) {?>	
						<?php if ($_SESSION['role'] == "worker") {?>
						<li><a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
products">Products</a></li>
						<li><a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
products_add_show">Add Product</a></li>
						<?php }?>
						<?php }?>
						<?php if (!(isset($_SESSION['role'])) || $_SESSION['role'] == "user") {?>	
						<li><a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
home">Home</a></li>
						<li><a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
chair_list">Shop</a></li>
						<li><a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
about">About</a></li>
						<li><a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
blog">Blog</a></li>
						<li><a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
contact">Contact</a></li>
						<?php }?>
						<?php if (count($_smarty_tpl->tpl_vars['conf']->value->roles) > 0) {?>
						<li><a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
logout">Log out</a></li>
						<?php } else { ?>
						<li><a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
loginShow">Log in</a></li>
						<li><a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
registerShow">Register</a></li>
						<?php }?>
					</ul>

					<?php if ((isset($_SESSION['role']))) {?>
					<ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">
						<li><a class="nav-link" href="#"><img src="images/user.svg">
							<?php if ((isset($_SESSION['f_name']))) {?>
								<?php echo $_SESSION['f_name'];?>
     <?php echo $_SESSION['l_name'];?>
 <!-- <?php echo $_SESSION['id'];?>
  -->
							<?php }?>	
						</a></li>
						<?php if ($_SESSION['role'] == "user") {?>
						<li><a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
cart"><img src="images/cart.svg"><?php if ((isset($_SESSION['f_name']))) {?> <?php echo $_SESSION['sum'];?>
 $<?php }?></a></li>
						<?php }?>
					<?php }?>
					</ul>
				</div>
			</div>
				
		</nav>
		<!-- End Header/Navigation -->

		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20400046964454bb3dbb6d3_27984916', 'top');
?>


		<!-- Start Footer Section -->
		<footer class="footer-section">
			<div class="container relative">
		
				<div class="row g-5 mb-5">
					<div class="col-lg-4">
						<div class="mb-4 footer-logo-wrap"><a href="#" class="footer-logo">Furni<span>.</span></a></div>
						<p class="mb-4">Donec facilisis quam ut purus rutrum lobortis. Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate velit imperdiet dolor tempor tristique. Pellentesque habitant</p>

						<ul class="list-unstyled custom-social">
							<li><a href="#"><span class="fa fa-brands fa-facebook-f"></span></a></li>
							<li><a href="#"><span class="fa fa-brands fa-twitter"></span></a></li>
							<li><a href="#"><span class="fa fa-brands fa-instagram"></span></a></li>
							<li><a href="#"><span class="fa fa-brands fa-linkedin"></span></a></li>
						</ul>
					</div>

				<div class="border-top copyright">
					<div class="row pt-4">
						<div class="col-lg-6">
							<p class="mb-2 text-center text-lg-start">Copyright &copy;<?php echo '<script'; ?>
>document.write(new Date().getFullYear());<?php echo '</script'; ?>
>. All Rights Reserved. &mdash; Designed with love by <a href="https://untree.co">Untree.co</a> <!-- License information: https://untree.co/license/ -->
            </p>
						</div>

						<div class="col-lg-6 text-center text-lg-end">
							<ul class="list-unstyled d-inline-flex ms-auto">
								<li class="me-4"><a href="#">Terms &amp; Conditions</a></li>
								<li><a href="#">Privacy Policy</a></li>
							</ul>
						</div>

					</div>
				</div>

			</div>
		</footer>
		<!-- End Footer Section -->	


		<?php echo '<script'; ?>
 src="js/bootstrap.bundle.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="js/tiny-slider.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="js/custom.js"><?php echo '</script'; ?>
>
	</body>

</html>
<?php }
/* {block 'top'} */
class Block_20400046964454bb3dbb6d3_27984916 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'top' => 
  array (
    0 => 'Block_20400046964454bb3dbb6d3_27984916',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'top'} */
}
