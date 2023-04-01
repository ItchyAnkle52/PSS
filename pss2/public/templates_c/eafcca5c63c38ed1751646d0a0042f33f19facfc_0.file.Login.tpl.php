<?php
/* Smarty version 4.1.0, created on 2023-01-08 19:34:58
  from 'C:\xampp\htdocs\Aplikacje_sieciowe\projekt_zaliczeniowy\app\views\Login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_63bb0cd280f2c3_70647969',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eafcca5c63c38ed1751646d0a0042f33f19facfc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Aplikacje_sieciowe\\projekt_zaliczeniowy\\app\\views\\Login.tpl',
      1 => 1673202896,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_63bb0cd280f2c3_70647969 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_111034635063bb0cd280ac41_06443906', 'top');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'top'} */
class Block_111034635063bb0cd280ac41_06443906 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'top' => 
  array (
    0 => 'Block_111034635063bb0cd280ac41_06443906',
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
                    <h1>Log in</h1>
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
        <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
login" method="post">
          <div class="col-md-6 mb-5 mb-md-0">
            <h2 class="h3 mb-3 text-black">Provide credentials</h2>
            <div class="p-3 p-lg-5 border bg-white">
              <div class="form-group row">
                  <div class="col-md-12">
                    <label for="c_address" class="text-black">E-mail <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="c_address" name="email" placeholder="">
                  </div>
              </div> 
              <div class="form-group row">
                  <div class="col-md-12">
                    <label for="c_address" class="text-black">Password <span class="text-danger">*</span></label>
                    <input type="password" class="form-control" id="c_address" name="password" placeholder="">
                  </div>
              </div>
              <br>
              <div class="form-group">
                  <button class="btn btn-black btn-lg py-3 btn-block" type="submit">Log in</button>
              </div>
            </div>
          </div>
        </form>
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
