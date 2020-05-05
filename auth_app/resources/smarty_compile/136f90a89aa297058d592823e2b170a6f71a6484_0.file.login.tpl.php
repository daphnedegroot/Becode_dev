<?php
/* Smarty version 3.1.33, created on 2019-07-08 11:33:39
  from '/Applications/XAMPP/xamppfiles/htdocs/auth_app/resources/views/auth/login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d230df3d5aba7_87466587',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '136f90a89aa297058d592823e2b170a6f71a6484' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/auth_app/resources/views/auth/login.tpl',
      1 => 1562578414,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d230df3d5aba7_87466587 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16358806965d230df3d585f5_95375400', "title");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2391011765d230df3d59070_93268699', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/app.tpl');
}
/* {block "title"} */
class Block_16358806965d230df3d585f5_95375400 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_16358806965d230df3d585f5_95375400',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Login<?php
}
}
/* {/block "title"} */
/* {block "content"} */
class Block_2391011765d230df3d59070_93268699 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_2391011765d230df3d59070_93268699',
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
