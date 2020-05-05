<?php
/* Smarty version 3.1.33, created on 2019-07-10 07:47:21
  from 'C:\laragon\www\slim_eloquent\resources\views\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d25980907ad61_19761319',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '85a69ece14dd529a9fb9cafd4f440604c9fdc59b' => 
    array (
      0 => 'C:\\laragon\\www\\slim_eloquent\\resources\\views\\home.tpl',
      1 => 1562744839,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d25980907ad61_19761319 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18108658425d259809078de8_57495248', "title");
?>




<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15375758715d25980907a4b4_25070515', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/app.tpl');
}
/* {block "title"} */
class Block_18108658425d259809078de8_57495248 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_18108658425d259809078de8_57495248',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Home<?php
}
}
/* {/block "title"} */
/* {block "content"} */
class Block_15375758715d25980907a4b4_25070515 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_15375758715d25980907a4b4_25070515',
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
