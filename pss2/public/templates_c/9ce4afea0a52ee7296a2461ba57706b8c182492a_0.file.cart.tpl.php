<?php
/* Smarty version 4.1.0, created on 2023-01-13 11:38:24
  from 'C:\xampp\htdocs\Aplikacje_sieciowe\projekt_zaliczeniowy\app\views\cart.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_63c134a0284359_06932526',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9ce4afea0a52ee7296a2461ba57706b8c182492a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Aplikacje_sieciowe\\projekt_zaliczeniowy\\app\\views\\cart.tpl',
      1 => 1673029584,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63c134a0284359_06932526 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_156141777463c134a02815b7_70865407', 'top');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'top'} */
class Block_156141777463c134a02815b7_70865407 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'top' => 
  array (
    0 => 'Block_156141777463c134a02815b7_70865407',
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
            <tr>
              <td class="product-thumbnail">
                <img src="images/product-1.png" alt="Image" class="img-fluid">
              </td>
              <td class="product-name">
                <h2 class="h5 text-black">Product 1</h2>
              </td>
              <td>$49.00</td>
              <td>
                <div class="input-group mb-3 d-flex align-items-center quantity-container" style="max-width: 120px;">
                  <div class="input-group-prepend">
                    <button class="btn btn-outline-black decrease" type="button">&minus;</button>
                  </div>
                  <input type="text" class="form-control text-center quantity-amount" value="1" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
                  <div class="input-group-append">
                    <button class="btn btn-outline-black increase" type="button">&plus;</button>
                  </div>
                </div>

              </td>
              <td>$49.00</td>
              <td><a href="#" class="btn btn-black btn-sm">X</a></td>
            </tr>

            <tr>
              <td class="product-thumbnail">
                <img src="images/product-2.png" alt="Image" class="img-fluid">
              </td>
              <td class="product-name">
                <h2 class="h5 text-black">Product 2</h2>
              </td>
              <td>$49.00</td>
              <td>
                <div class="input-group mb-3 d-flex align-items-center quantity-container" style="max-width: 120px;">
                  <div class="input-group-prepend">
                    <button class="btn btn-outline-black decrease" type="button">&minus;</button>
                  </div>
                  <input type="text" class="form-control text-center quantity-amount" value="1" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
                  <div class="input-group-append">
                    <button class="btn btn-outline-black increase" type="button">&plus;</button>
                  </div>
                </div>

              </td>
              <td>$49.00</td>
              <td><a href="#" class="btn btn-black btn-sm">X</a></td>
            </tr>
          </tbody>
        </table>
      </div>
    </form>
  </div>

  <div class="row">
    <div class="col-md-6">
      <div class="row mb-5">
        <div class="col-md-6 mb-3 mb-md-0">
          <button class="btn btn-black btn-sm btn-block">Update Cart</button>
        </div>
        <div class="col-md-6">
          <button class="btn btn-outline-black btn-sm btn-block">Continue Shopping</button>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <label class="text-black h4" for="coupon">Coupon</label>
          <p>Enter your coupon code if you have one.</p>
        </div>
        <div class="col-md-8 mb-3 mb-md-0">
          <input type="text" class="form-control py-3" id="coupon" placeholder="Coupon Code">
        </div>
        <div class="col-md-4">
          <button class="btn btn-black">Apply Coupon</button>
        </div>
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
          <div class="row mb-3">
            <div class="col-md-6">
              <span class="text-black">Subtotal</span>
            </div>
            <div class="col-md-6 text-right">
              <strong class="text-black">$230.00</strong>
            </div>
          </div>
          <div class="row mb-5">
            <div class="col-md-6">
              <span class="text-black">Total</span>
            </div>
            <div class="col-md-6 text-right">
              <strong class="text-black">$230.00</strong>
            </div>
          </div>

          <div class="row">
            <div class="col-md-12">
              <button class="btn btn-black btn-lg py-3 btn-block" onclick="window.location='<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
checkout'">Proceed To Checkout</button>
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
