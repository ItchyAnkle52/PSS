<?php
/* Smarty version 4.1.0, created on 2023-01-27 21:56:22
  from 'C:\xampp\htdocs\Aplikacje_sieciowe\projekcik\app\views\products_add.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_63d43a76bcdcc4_87300931',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4040c6a9ef520e94e8a50fe556aebe0188264418' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Aplikacje_sieciowe\\projekcik\\app\\views\\products_add.tpl',
      1 => 1674852980,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_63d43a76bcdcc4_87300931 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_23138508463d43a76bc7d91_30165898', 'top');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'top'} */
class Block_23138508463d43a76bc7d91_30165898 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'top' => 
  array (
    0 => 'Block_23138508463d43a76bc7d91_30165898',
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
                    <h1>Add Product</h1>
                </div>
            </div>
            <div class="col-lg-7">
                
            </div>
        </div>
    </div>
</div>
<!-- End Hero Section -->

<div class="untree_co-section">
<div class="container">
  <div class="row">
    <div class="col-md-6 mb-5 mb-md-0">
      <h2 class="h3 mb-3 text-black">Fill in the fields</h2>
      <div class="p-3 p-lg-5 border bg-white">
      <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
products_add" method="post">
        <div class="form-group row">
            <div class="col-md-6">
              <label for="c_fname" class="text-black">Product Name <span class="text-danger">*</span></label>
              <input type="text" class="form-control" id="c_fname" name="name" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->name;?>
">
            </div>
            <div class="col-md-6">
              <label for="c_lname" class="text-black">Product Price <span class="text-danger">*</span></label>
              <input type="text" class="form-control" id="c_lname" name="price" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->price;?>
">
            </div>
            <div class="col-md-6">
              <label for="c_address" class="text-black">Product Type ID <span class="text-danger">*</span></label>
              <input type="text" class="form-control" id="c_address" name="type" placeholder="" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->type;?>
" >
            </div>
            <div class="col-md-6">
              <label for="c_address" class="text-black">Product Image Path <span class="text-danger">*</span></label>
              <input type="text" class="form-control" id="c_address" name="image" placeholder="" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->image;?>
" >
            </div>
            
        </div>
      </div>
      <br /><br />
        <div class="form-group">
            <button type="submit"  class="btn btn-black btn-lg py-3 btn-block">Add Product to Shop</button>
        </div>
      </form>

    </div>
    <?php $_smarty_tpl->_subTemplateRender("file:messages.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  </div>

</div>
</div>

<?php
}
}
/* {/block 'top'} */
}
