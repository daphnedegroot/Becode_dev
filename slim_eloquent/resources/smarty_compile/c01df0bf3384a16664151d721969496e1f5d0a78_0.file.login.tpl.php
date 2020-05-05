<?php
/* Smarty version 3.1.33, created on 2019-07-10 11:05:48
  from 'C:\laragon\www\slim_eloquent\resources\views\auth\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d25c68cc10910_06257488',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c01df0bf3384a16664151d721969496e1f5d0a78' => 
    array (
      0 => 'C:\\laragon\\www\\slim_eloquent\\resources\\views\\auth\\login.tpl',
      1 => 1562756747,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d25c68cc10910_06257488 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20645380085d25c68cc0c7b4_40373307', "title");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1919664335d25c68cc0d847_42570783', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/app.tpl');
}
/* {block "title"} */
class Block_20645380085d25c68cc0c7b4_40373307 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_20645380085d25c68cc0c7b4_40373307',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Login<?php
}
}
/* {/block "title"} */
/* {block "content"} */
class Block_1919664335d25c68cc0d847_42570783 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1919664335d25c68cc0d847_42570783',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['path_for'][0], array( array('name'=>"home"),$_smarty_tpl ) );?>
">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Login</li>
        </ol>
    </nav>
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="card">
                <h5 class="card-header">Login</h5>
                <div class="card-body">
                    <form action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['path_for'][0], array( array('name'=>"auth.check"),$_smarty_tpl ) );?>
" method="post">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="pass">Wachtwoord</label>
                            <input type="password" name="password" id="pass" class="form-control">
                        </div>
                        <input type="submit" name="submit" class="btn btn-outline-primary" value="Login">
                        <a href="" class="btn btn-outline-dark">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>

<?php
}
}
/* {/block "content"} */
}
