<?php
/* Smarty version 3.1.33, created on 2019-07-01 14:09:54
  from '/Applications/XAMPP/xamppfiles/htdocs/smarty/resources/views/auth/login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d19f8125e3e99_27783291',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '81e9961439d8b9edb2ba051a7f387ac584a65d5a' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/smarty/resources/views/auth/login.tpl',
      1 => 1561982993,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d19f8125e3e99_27783291 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12870121855d19f8125e0046_98911922', 'title');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5453661745d19f8125e0c15_14738551', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/app.tpl');
}
/* {block 'title'} */
class Block_12870121855d19f8125e0046_98911922 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_12870121855d19f8125e0046_98911922',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Login<?php
}
}
/* {/block 'title'} */
/* {block 'content'} */
class Block_5453661745d19f8125e0c15_14738551 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_5453661745d19f8125e0c15_14738551',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="card">
                <h5 class="card-header">Login</h5>
                <div class="card-body">
                    <form action="" autocomplete="off">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="password">Wachtwoord</label>
                            <input type="password" name="password" id="password" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-outline-primary">Login</button>
                        <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['path_for'][0], array( array('name'=>"home"),$_smarty_tpl ) );?>
" class="btn btn-outline-dark">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>


<?php
}
}
/* {/block 'content'} */
}
