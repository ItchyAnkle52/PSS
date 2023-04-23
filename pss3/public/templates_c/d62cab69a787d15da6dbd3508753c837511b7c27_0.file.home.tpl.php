<?php
/* Smarty version 4.1.0, created on 2023-04-10 15:28:56
  from 'D:\xampp\htdocs\pss\pss3\app\views\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_64340f181028f5_27758032',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd62cab69a787d15da6dbd3508753c837511b7c27' => 
    array (
      0 => 'D:\\xampp\\htdocs\\pss\\pss3\\app\\views\\home.tpl',
      1 => 1673031485,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64340f181028f5_27758032 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_201097353264340f180ff082_04802232', 'top');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'top'} */
class Block_201097353264340f180ff082_04802232 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'top' => 
  array (
    0 => 'Block_201097353264340f180ff082_04802232',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<!-- Start Hero Section -->
<div class="hero">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-5">
                <div class="intro-excerpt">
                    <h1>Modern Interior <span clsas="d-block">Design Studio</span></h1>
                    <p class="mb-4">Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate velit imperdiet dolor tempor tristique.</p>
                    <p><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
shop" class="btn btn-secondary me-2">Shop Now</a><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
about" class="btn btn-white-outline">Explore</a></p>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="hero-img-wrap">
                    <img src="images/couch.png" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Hero Section -->

<?php
}
}
/* {/block 'top'} */
}
