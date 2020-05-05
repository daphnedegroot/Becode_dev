<?php
/* Smarty version 3.1.33, created on 2019-07-01 13:36:33
  from '/Applications/XAMPP/xamppfiles/htdocs/smarty/resources/views/home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d19f041b5adf8_76184830',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6eccf14632cbd68ed374e2a897172a302085327a' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/smarty/resources/views/home.tpl',
      1 => 1561980992,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d19f041b5adf8_76184830 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8652686365d19f041b581f6_72946768', 'title');
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14940300685d19f041b58cd7_97063830', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/app.tpl');
}
/* {block 'title'} */
class Block_8652686365d19f041b581f6_72946768 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_8652686365d19f041b581f6_72946768',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Home<?php
}
}
/* {/block 'title'} */
/* {block 'content'} */
class Block_14940300685d19f041b58cd7_97063830 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_14940300685d19f041b58cd7_97063830',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="row">
        <h1>Welcome to Smarty, <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</h1>
    </div>


<?php
}
}
/* {/block 'content'} */
}
