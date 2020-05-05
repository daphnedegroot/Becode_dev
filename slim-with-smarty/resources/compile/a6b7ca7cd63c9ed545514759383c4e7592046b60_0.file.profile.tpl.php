<?php
/* Smarty version 3.1.33, created on 2019-07-01 13:20:19
  from '/Applications/XAMPP/xamppfiles/htdocs/smarty/resources/views/profile.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d19ec73916d71_15954701',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a6b7ca7cd63c9ed545514759383c4e7592046b60' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/smarty/resources/views/profile.tpl',
      1 => 1561980017,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d19ec73916d71_15954701 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5431661605d19ec73914946_65126624', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/app.tpl');
}
/* {block 'content'} */
class Block_5431661605d19ec73914946_65126624 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_5431661605d19ec73914946_65126624',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="row">
        <h1>hello, my name is <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</h1>
    </div>


<?php
}
}
/* {/block 'content'} */
}
