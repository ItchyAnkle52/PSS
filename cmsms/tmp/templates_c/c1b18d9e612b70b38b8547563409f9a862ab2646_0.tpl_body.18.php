<?php
/* Smarty version 3.1.31, created on 2023-05-14 20:17:52
  from "tpl_body:18" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_646125d0211bf4_16088104',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c1b18d9e612b70b38b8547563409f9a862ab2646' => 
    array (
      0 => 'tpl_body:18',
      1 => '1684088262',
      2 => 'tpl_body',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_646125d0211bf4_16088104 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_global_content')) require_once 'D:\\xampp\\htdocs\\cmsms\\lib\\plugins\\function.global_content.php';
echo smarty_function_global_content(array('name'=>'a_top'),$_smarty_tpl);?>

<div id="main" class="wrapper style1">
    <div class="container">
        <div class="row gtr-150">
            <div class="col-8 col-12-medium">
            <section id="sidebar">


	<?php CMS_Content_Block::smarty_internal_fetch_contentblock(array(),$_smarty_tpl); ?>
        </section>
        </div>
        </div>
    </div>
</div>
<?php echo smarty_function_global_content(array('name'=>'a_bottom'),$_smarty_tpl);
}
}
