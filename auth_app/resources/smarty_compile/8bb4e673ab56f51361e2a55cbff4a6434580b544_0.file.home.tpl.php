<?php
/* Smarty version 3.1.33, created on 2019-07-08 11:29:27
  from '/Applications/XAMPP/xamppfiles/htdocs/auth_app/resources/views/home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d230cf73f42c4_19356661',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8bb4e673ab56f51361e2a55cbff4a6434580b544' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/auth_app/resources/views/home.tpl',
      1 => 1562578152,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d230cf73f42c4_19356661 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5622721975d230cf73f2d36_58605018', "title");
?>




<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20598324635d230cf73f3a76_17164162', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/app.tpl');
}
/* {block "title"} */
class Block_5622721975d230cf73f2d36_58605018 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_5622721975d230cf73f2d36_58605018',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Home<?php
}
}
/* {/block "title"} */
/* {block "content"} */
class Block_20598324635d230cf73f3a76_17164162 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_20598324635d230cf73f3a76_17164162',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">Home</li>
        </ol>
    </nav>
    <h3>Home view</h3>
 
<?php
}
}
/* {/block "content"} */
}
