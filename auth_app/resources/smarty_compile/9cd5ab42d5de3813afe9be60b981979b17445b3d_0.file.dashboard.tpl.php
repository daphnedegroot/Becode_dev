<?php
/* Smarty version 3.1.33, created on 2019-07-08 10:16:59
  from '/Applications/XAMPP/xamppfiles/htdocs/auth_app/resources/views/admin/dashboard.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d22fbfb593b34_16717054',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9cd5ab42d5de3813afe9be60b981979b17445b3d' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/auth_app/resources/views/admin/dashboard.tpl',
      1 => 1562573816,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d22fbfb593b34_16717054 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16945423675d22fbfb592808_89266806', "title");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20727693445d22fbfb5934d2_92793361', "content");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/app.tpl');
}
/* {block "title"} */
class Block_16945423675d22fbfb592808_89266806 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_16945423675d22fbfb592808_89266806',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Admin<?php
}
}
/* {/block "title"} */
/* {block "content"} */
class Block_20727693445d22fbfb5934d2_92793361 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_20727693445d22fbfb5934d2_92793361',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    Admin dashboard
<?php
}
}
/* {/block "content"} */
}
