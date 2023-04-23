<?php
/* Smarty version 4.1.0, created on 2023-04-23 17:14:14
  from 'D:\xampp\htdocs\pss\pss4\app\views\shop_filter.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_64454b46479ff7_25732969',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'efd4a889e9b5b25b3e37d8f1b64190203e0f4a5e' => 
    array (
      0 => 'D:\\xampp\\htdocs\\pss\\pss4\\app\\views\\shop_filter.tpl',
      1 => 1682262851,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64454b46479ff7_25732969 (Smarty_Internal_Template $_smarty_tpl) {
?>
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
            <div class="row">
                <div class="align-content-center">
                    <?php if ($_smarty_tpl->tpl_vars['page']->value > 0) {?>
                        <a class="btn btn-black btn-lg py-3 btn-block" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
chair_list/<?php echo $_smarty_tpl->tpl_vars['page']->value-1;?>
/<?php echo $_smarty_tpl->tpl_vars['form']->value->item_name;?>
"><<</a>
                    <?php }?>
                    <h7 class="btn btn-black btn-lg py-3 btn-block" ><?php echo $_smarty_tpl->tpl_vars['page']->value+1;?>
</h7>
                    <?php if ($_smarty_tpl->tpl_vars['limit']->value*($_smarty_tpl->tpl_vars['page']->value+1) < $_smarty_tpl->tpl_vars['sum']->value) {?>
                        <a class="btn btn-black btn-lg py-3 btn-block" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
chair_list/<?php echo $_smarty_tpl->tpl_vars['page']->value+1;?>
/<?php echo $_smarty_tpl->tpl_vars['form']->value->item_name;?>
">>></a>
                    <?php }?>
                </div>
            </div><?php }
}
