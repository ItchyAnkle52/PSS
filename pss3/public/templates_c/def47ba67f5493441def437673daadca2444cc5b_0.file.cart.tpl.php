<?php
/* Smarty version 4.1.0, created on 2023-01-27 19:42:01
  from 'C:\xampp\htdocs\Aplikacje_sieciowe\projekcik\app\views\cart.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_63d41af9d94170_28566396',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'def47ba67f5493441def437673daadca2444cc5b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Aplikacje_sieciowe\\projekcik\\app\\views\\cart.tpl',
      1 => 1674844920,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63d41af9d94170_28566396 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_185375166363d41af9d8a173_38853150', 'top');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'top'} */
class Block_185375166363d41af9d8a173_38853150 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'top' => 
  array (
    0 => 'Block_185375166363d41af9d8a173_38853150',
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
                    <h1>Cart</h1>
                </div>
            </div>
            <div class="col-lg-7">
                
            </div>
        </div>
    </div>
</div>
<!-- End Hero Section -->



<div class="untree_co-section before-footer-section">
<div class="container">
  <div class="row mb-5">
    <form class="col-md-12" method="post">
      <div class="site-blocks-table">
        <table class="table">
          <thead>
            <tr>
              <th class="product-thumbnail">Image</th>
              <th class="product-name">Product</th>
              <th class="product-price">Price</th>
              <th class="product-quantity">Quantity</th>
              <th class="product-total">Total</th>
              <th class="product-remove">Remove</th>
            </tr>
          </thead>
          <tbody>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
              <tr><td class="product-thumbnail"><img src="<?php echo $_smarty_tpl->tpl_vars['product']->value['product_image_path'];?>
" alt="Image" class="img-fluid"></td><td class="product-name"><h2 class="h5 text-black"><?php echo $_smarty_tpl->tpl_vars['product']->value['product_name'];?>
</h2></td><td><?php echo $_smarty_tpl->tpl_vars['product']->value['product_price'];?>
 $</td><td><?php echo $_smarty_tpl->tpl_vars['product']->value['quantity'];?>
</td><td><?php ob_start();
echo $_smarty_tpl->tpl_vars['product']->value['product_price'];
$_prefixVariable1 = ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['product']->value['quantity'];
$_prefixVariable2 = ob_get_clean();
echo $_prefixVariable1*$_prefixVariable2;?>
 $</td><td><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
delete_from_cart/<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
" class="btn btn-black btn-sm">X</a></td></tr> 
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>  
          </tbody>
        </table>
      </div>
    </form>
  </div>

  <div class="row">
    <div class="col-md-6">
      <div class="row">
     
      </div>
    </div>
    <div class="col-md-6 pl-5">
      <div class="row justify-content-end">
        <div class="col-md-7">
          <div class="row">
            <div class="col-md-12 text-right border-bottom mb-5">
              <h3 class="text-black h4 text-uppercase">Cart Totals</h3>
            </div>
          </div>
          <div class="row mb-5">
            <div class="col-md-6">
              <span class="text-black">Total</span>
            </div>
            <div class="col-md-6 text-right">
              <strong class="text-black"><?php echo $_SESSION['sum'];?>
 $</strong>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <button class="btn btn-black btn-lg py-3 btn-block" onclick="window.location='<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
checkout'">Place order</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>


<?php
}
}
/* {/block 'top'} */
}
