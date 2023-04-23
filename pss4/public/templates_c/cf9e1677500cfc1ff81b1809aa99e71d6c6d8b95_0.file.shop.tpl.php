<?php
/* Smarty version 4.1.0, created on 2023-04-15 19:19:14
  from 'D:\xampp\htdocs\pss\pss3\app\views\shop.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_643adc92a015a7_68524780',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cf9e1677500cfc1ff81b1809aa99e71d6c6d8b95' => 
    array (
      0 => 'D:\\xampp\\htdocs\\pss\\pss3\\app\\views\\shop.tpl',
      1 => 1681579152,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_643adc92a015a7_68524780 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1219754373643adc928698b9_33079358', 'top');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'top'} */
class Block_1219754373643adc928698b9_33079358 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'top' => 
  array (
    0 => 'Block_1219754373643adc928698b9_33079358',
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
                </div>
            </div>
            <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
shop_filtered_chairs">
                <fieldset>
                    <input type="text"  name="item_name" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->item_name;?>
" />
                    <button type="submit" class="btn btn-black btn-lg py-3 btn-block">Filter</button>
                </fieldset>
            </form> 
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
loginShow"><?php }?><img src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/<?php echo $_smarty_tpl->tpl_vars['product']->value['product_image_path'];?>
" class="img-fluid product-thumbnail"><h3 class="product-title"><?php echo $_smarty_tpl->tpl_vars['product']->value["product_name"];?>
</h3><strong class="product-price"><?php echo $_smarty_tpl->tpl_vars['product']->value["product_price"];?>
$</strong><span class="icon-cross"><img src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/images/cross.svg" class="img-fluid"></span></a></div> 
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php if ((empty($_smarty_tpl->tpl_vars['products']->value))) {?>
                <h3 class="product-title">No such products.</h3>
            <?php }?>
          </div>
        <div class="row">
            <div class="align-content-center">
                <?php if ($_smarty_tpl->tpl_vars['page']->value > 0) {?>
                    <a class="btn btn-black btn-lg py-3 btn-block" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
shop_filtered_chairs/<?php echo $_smarty_tpl->tpl_vars['page']->value-1;?>
/<?php echo $_smarty_tpl->tpl_vars['form']->value->item_name;?>
"><<</a>
                <?php }?>
            <h7 class="btn btn-black btn-lg py-3 btn-block" ><?php echo $_smarty_tpl->tpl_vars['page']->value+1;?>
</h7>
                <?php if ($_smarty_tpl->tpl_vars['limit']->value*($_smarty_tpl->tpl_vars['page']->value+1) < $_smarty_tpl->tpl_vars['sum']->value) {?>
                    <a class="btn btn-black btn-lg py-3 btn-block" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
shop_filtered_chairs/<?php echo $_smarty_tpl->tpl_vars['page']->value+1;?>
/<?php echo $_smarty_tpl->tpl_vars['form']->value->item_name;?>
">>></a>
                <?php }?>
            </div>
        </div>
    </div>
</div>

<?php
}
}
/* {/block 'top'} */
}
