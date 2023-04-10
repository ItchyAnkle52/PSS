<?php
/* Smarty version 4.1.0, created on 2023-01-27 20:57:34
  from 'C:\xampp\htdocs\Aplikacje_sieciowe\projekcik\app\views\products.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_63d42caebfe3b0_95536605',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '71fb89ef872e703c3f0ac5ed7eb139101ef74ee1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Aplikacje_sieciowe\\projekcik\\app\\views\\products.tpl',
      1 => 1674849310,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63d42caebfe3b0_95536605 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_36700619563d42caebf5a06_66213974', 'top');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'top'} */
class Block_36700619563d42caebf5a06_66213974 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'top' => 
  array (
    0 => 'Block_36700619563d42caebf5a06_66213974',
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
                    <h1>Products</h1>
                </div>
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
              <th class="product-thumbnail">ID</th>
              <th class="product-image">Image</th>
              <th class="product-name">Name</th>
              <th class="product-price">Price</th>
              <th class="product-total">type ID</th>
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
              <tr><td><?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
</td><td class="product-thumbnail"><img src="<?php echo $_smarty_tpl->tpl_vars['product']->value['product_image_path'];?>
" alt="Image" class="img-fluid"></td><td class="product-name"><h2 class="h5 text-black"><?php echo $_smarty_tpl->tpl_vars['product']->value['product_name'];?>
</h2></td><td><?php echo $_smarty_tpl->tpl_vars['product']->value['product_price'];?>
 $</td><td><?php echo $_smarty_tpl->tpl_vars['product']->value['id_product_type'];?>
</td><td><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
delete_products/<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
" class="btn btn-black btn-sm">X</a></td></tr> 
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>  
          </tbody>
        </table>
      </div>
    </form>
  </div>

</div>



<?php
}
}
/* {/block 'top'} */
}
