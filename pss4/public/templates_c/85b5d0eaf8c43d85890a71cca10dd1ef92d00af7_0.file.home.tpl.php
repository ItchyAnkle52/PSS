<?php
/* Smarty version 4.1.0, created on 2023-04-23 14:53:33
  from 'D:\xampp\htdocs\pss\pss4\app\views\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_64452a4d3202d0_86894027',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '85b5d0eaf8c43d85890a71cca10dd1ef92d00af7' => 
    array (
      0 => 'D:\\xampp\\htdocs\\pss\\pss4\\app\\views\\home.tpl',
      1 => 1673031485,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64452a4d3202d0_86894027 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_191014360364452a4d31c319_86218495', 'top');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'top'} */
class Block_191014360364452a4d31c319_86218495 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'top' => 
  array (
    0 => 'Block_191014360364452a4d31c319_86218495',
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
