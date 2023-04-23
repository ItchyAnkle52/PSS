<?php
/* Smarty version 4.1.0, created on 2023-04-23 17:09:38
  from 'D:\xampp\htdocs\pss\pss4\app\views\shop.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_64454a327e4977_07510489',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6975ec972281a09d4b9b997690e7a2e05098c36c' => 
    array (
      0 => 'D:\\xampp\\htdocs\\pss\\pss4\\app\\views\\shop.tpl',
      1 => 1682262571,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:shop_filter.tpl' => 1,
  ),
),false)) {
function content_64454a327e4977_07510489 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_102632853164454a327decd4_46838479', 'top');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'top'} */
class Block_102632853164454a327decd4_46838479 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'top' => 
  array (
    0 => 'Block_102632853164454a327decd4_46838479',
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
            <form id="search-form" onsubmit="ajaxPostForm('search-form','<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
chair_list_ajax','table'); return false;">
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
          <div class="row" id="table">
            <?php $_smarty_tpl->_subTemplateRender("file:shop_filter.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
          </div>
    </div>
</div>

<?php
}
}
/* {/block 'top'} */
}
