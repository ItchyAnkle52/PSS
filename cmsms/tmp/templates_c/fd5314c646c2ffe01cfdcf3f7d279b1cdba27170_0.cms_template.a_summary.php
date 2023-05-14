<?php
/* Smarty version 3.1.31, created on 2023-05-14 20:27:51
  from "cms_template:a_summary" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_646128279ba652_01411196',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fd5314c646c2ffe01cfdcf3f7d279b1cdba27170' => 
    array (
      0 => 'cms_template:a_summary',
      1 => '1684088869',
      2 => 'cms_template',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_646128279ba652_01411196 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_cms_escape')) require_once 'D:\\xampp\\htdocs\\cmsms\\lib\\plugins\\modifier.cms_escape.php';
if (!is_callable('smarty_function_file_url')) require_once 'D:\\xampp\\htdocs\\cmsms\\lib\\plugins\\function.file_url.php';
?>
<!-- Start News Display Template -->


<?php if ($_smarty_tpl->tpl_vars['pagecount']->value > 1) {?>
  <p>
<?php if ($_smarty_tpl->tpl_vars['pagenumber']->value > 1) {
echo $_smarty_tpl->tpl_vars['firstpage']->value;?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['prevpage']->value;?>
&nbsp;
<?php }
echo $_smarty_tpl->tpl_vars['pagetext']->value;?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['pagenumber']->value;?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['oftext']->value;?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['pagecount']->value;?>

<?php if ($_smarty_tpl->tpl_vars['pagenumber']->value < $_smarty_tpl->tpl_vars['pagecount']->value) {?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['nextpage']->value;?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['lastpage']->value;?>

<?php }?>
</p>
<?php }?>

            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value, 'entry');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['entry']->value) {
?>
            <section>
            <h3><?php echo smarty_modifier_cms_escape($_smarty_tpl->tpl_vars['entry']->value->title,'htmlall');?>
</h3>
            
            
            <?php if ($_smarty_tpl->tpl_vars['entry']->value->summary) {?>
                    
            	<p><?php echo $_smarty_tpl->tpl_vars['entry']->value->summary;?>
</p>	
            
            <ul class="actions">
            <li><a class="button" href="<?php echo $_smarty_tpl->tpl_vars['entry']->value->moreurl;?>
">Learn More</a></li>
            </ul>
            
            <?php } elseif ($_smarty_tpl->tpl_vars['entry']->value->content) {?>
                    
            	<div class="NewsSummaryContent">
            		<?php echo $_smarty_tpl->tpl_vars['entry']->value->content;?>

            	</div>
            <?php }?>
            
            <?php if (isset($_smarty_tpl->tpl_vars['entry']->value->extra)) {?>
                <div class="NewsSummaryExtra">
                    <?php echo $_smarty_tpl->tpl_vars['entry']->value->extra;?>

            	
                </div>
            <?php }?>
            <?php if (isset($_smarty_tpl->tpl_vars['entry']->value->fields)) {?>
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['entry']->value->fields, 'field');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['field']->value) {
?>
                 <div class="NewsSummaryField">
                    <?php if ($_smarty_tpl->tpl_vars['field']->value->type == 'file') {?>
                      <?php if (isset($_smarty_tpl->tpl_vars['field']->value->value) && $_smarty_tpl->tpl_vars['field']->value->value) {?>
                        <img class="image fit" src="<?php echo $_smarty_tpl->tpl_vars['entry']->value->file_location;?>
/<?php echo $_smarty_tpl->tpl_vars['field']->value->value;?>
"/>
                      <?php }?>
                    <?php } elseif ($_smarty_tpl->tpl_vars['field']->value->type == 'linkedfile') {?>
                      
                      <?php if (!empty($_smarty_tpl->tpl_vars['field']->value->value)) {?>
                        <img src="<?php echo smarty_function_file_url(array('file'=>$_smarty_tpl->tpl_vars['field']->value->value),$_smarty_tpl);?>
" alt="<?php echo $_smarty_tpl->tpl_vars['field']->value->value;?>
"/>
                      <?php }?>
                    <?php } else { ?>
                      <?php echo $_smarty_tpl->tpl_vars['field']->value->name;?>
:&nbsp;<?php echo $_smarty_tpl->tpl_vars['field']->value->value;?>

                    <?php }?>
                 </div>
              <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

            <?php }?>
            </section>
            <hr />
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

<!-- End News Display Template --><?php }
}
