<?php
/* Smarty version 4.1.0, created on 2023-01-28 00:15:37
  from 'C:\xampp\htdocs\Aplikacje_sieciowe\projekcik\app\views\thanks.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_63d45b19c27220_16105169',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0f15ca7e8577c29ad24af61957b4fd7694342a52' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Aplikacje_sieciowe\\projekcik\\app\\views\\thanks.tpl',
      1 => 1673029786,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63d45b19c27220_16105169 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_68438562263d45b19c24368_23030296', 'top');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'top'} */
class Block_68438562263d45b19c24368_23030296 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'top' => 
  array (
    0 => 'Block_68438562263d45b19c24368_23030296',
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

    

    <div class="untree_co-section">
<div class="container">
  <div class="row">
    <div class="col-md-12 text-center pt-5">
      <span class="display-3 thankyou-icon text-primary">
        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cart-check mb-5" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" d="M11.354 5.646a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L8 8.293l2.646-2.647a.5.5 0 0 1 .708 0z"/>
          <path fill-rule="evenodd" d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
        </svg>
      </span>
      <h2 class="display-3 text-black">Thank you!</h2>
      <p class="lead mb-5">You order was successfuly completed.</p>
      <p><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
shop" class="btn btn-sm btn-outline-black">Back to shop</a></p>
    </div>
  </div>
</div>
</div>

<?php
}
}
/* {/block 'top'} */
}
