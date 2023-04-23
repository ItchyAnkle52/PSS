<?php
/* Smarty version 4.1.0, created on 2023-01-27 19:31:24
  from 'C:\xampp\htdocs\Aplikacje_sieciowe\projekcik\app\views\Register.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_63d4187c099817_14997588',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b1796a4c67376eefb82a6de767d4d94e157dbb34' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Aplikacje_sieciowe\\projekcik\\app\\views\\Register.tpl',
      1 => 1674835118,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_63d4187c099817_14997588 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_90664259263d4187c0936c8_80079190', 'top');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'top'} */
class Block_90664259263d4187c0936c8_80079190 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'top' => 
  array (
    0 => 'Block_90664259263d4187c0936c8_80079190',
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
                    <h1>Registration</h1>
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
register" method="post">
        <div class="form-group row">
            <div class="col-md-6">
              <label for="c_fname" class="text-black">First Name <span class="text-danger">*</span></label>
              <input type="text" class="form-control" id="c_fname" name="f_name" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->f_name;?>
">
            </div>
            <div class="col-md-6">
              <label for="c_lname" class="text-black">Last Name <span class="text-danger">*</span></label>
              <input type="text" class="form-control" id="c_lname" name="l_name" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->l_name;?>
">
            </div>
        </div>

        <div class="form-group row">
            <div class="col-md-12">
              <label for="c_address" class="text-black">Password <span class="text-danger">*</span></label>
              <input type="password" class="form-control" id="c_address" name="password" placeholder="" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->password;?>
" >
            </div>
        </div>

        <div class="form-group row">
          <div class="col-md-12">
            <label for="c_address" class="text-black">Repeat Password <span class="text-danger">*</span></label>
            <input type="password" class="form-control" id="c_address" name="r_password" placeholder="" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->r_password;?>
">
          </div>
        </div>

        <div class="form-group row">
            <div class="col-md-12">
              <label for="c_address" class="text-black">E-mail <span class="text-danger">*</span></label>
              <input type="text" class="form-control" id="c_address" name="email" placeholder="E-mail address" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->email;?>
">
            </div>
        </div> 

        <div class="form-group row">
          <div class="col-md-12">
            <label for="c_address" class="text-black">Address <span class="text-danger">*</span></label>
            <input type="text" class="form-control" id="c_address" name="address" placeholder="Street address" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->address;?>
">
          </div>
        </div>

        <div class="form-group row mb-5">
          <div class="col-md-12">
            <label for="c_phone" class="text-black">Phone <span class="text-danger">*</span></label>
            <input type="text" class="form-control" id="c_phone" name="phone" placeholder="Phone Number" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->phone;?>
">
          </div>
        </div>

        <div class="form-group">
            <button type="submit"  class="btn btn-black btn-lg py-3 btn-block">Register</button>
        </div>
      </form>
      </div>
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
