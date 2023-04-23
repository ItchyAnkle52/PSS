<?php
/* Smarty version 4.1.0, created on 2023-01-27 22:31:50
  from 'C:\xampp\htdocs\Aplikacje_sieciowe\projekcik\app\views\shop.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_63d442c6e00a59_55593554',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dd3262d95d381cd3358ee72225bff959c76a71fb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Aplikacje_sieciowe\\projekcik\\app\\views\\shop.tpl',
      1 => 1674855080,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63d442c6e00a59_55593554 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_49562649163d442c6cff326_04310211', 'top');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'top'} */
class Block_49562649163d442c6cff326_04310211 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'top' => 
  array (
    0 => 'Block_49562649163d442c6cff326_04310211',
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
                    <h1>Shop</h1>
                    <div class="custom-navbar" id="navbarsFurni">
                        <ul class="custom-navbar-nav">
                            <li><a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
shop_chairs">Chairs</a></li>
                            <li><a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
shop_fancy_chairs">Fancy Chairs</a></li>
                            <li><a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
shop_even_fancier_chairs">Even Fancier Chairs</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- End Hero Section -->

<div class="untree_co-section product-section before-footer-section">
    <div class="container">
          <div class="row">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
                <div class="col-12 col-md-4 col-lg-3 mb-5"><?php if (count($_smarty_tpl->tpl_vars['conf']->value->roles) > 0) {?><a class="product-item" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
add_to_cart/<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
"><?php } else { ?><a class="product-item" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
loginShow"><?php }?><img src="<?php echo $_smarty_tpl->tpl_vars['product']->value['product_image_path'];?>
" class="img-fluid product-thumbnail"><h3 class="product-title"><?php echo $_smarty_tpl->tpl_vars['product']->value["product_name"];?>
</h3><strong class="product-price"><?php echo $_smarty_tpl->tpl_vars['product']->value["product_price"];?>
$</strong><span class="icon-cross"><img src="images/cross.svg" class="img-fluid"></span></a></div> 
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>  
          </div>
    </div>
</div>

<?php
}
}
/* {/block 'top'} */
}
