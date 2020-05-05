<?php
/* Smarty version 3.1.33, created on 2019-07-08 11:33:35
  from '/Applications/XAMPP/xamppfiles/htdocs/auth_app/resources/views/auth/register.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d230def4abb69_46896666',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5c519ffe16820fde9d6916a9a8cea7639126db1c' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/auth_app/resources/views/auth/register.tpl',
      1 => 1562578414,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d230def4abb69_46896666 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20106596725d230def4a8d36_63063830', "title");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1467930535d230def4a9c31_00583318', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/app.tpl');
}
/* {block "title"} */
class Block_20106596725d230def4a8d36_63063830 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_20106596725d230def4a8d36_63063830',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Register<?php
}
}
/* {/block "title"} */
/* {block "content"} */
class Block_1467930535d230def4a9c31_00583318 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1467930535d230def4a9c31_00583318',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['path_for'][0], array( array('name'=>"home"),$_smarty_tpl ) );?>
">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Register</li>
        </ol>
    </nav>

    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="card">
                <h5 class="card-header">Register</h5>
                <div class="card-body">
                    <form action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['path_for'][0], array( array('name'=>"auth.register"),$_smarty_tpl ) );?>
" method="post">
                        <div class="form-group">
                            <label for="first">Voornaam</label>
                            <input type="text" name="firstname" id="first" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="last">Achternaam</label>
                            <input type="text" name="lastname" id="last" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="pass">Wachtwoord</label>
                            <input type="password" name="password" id="pass" class="form-control">
                        </div>
                        <input type="submit" name="submit" class="btn btn-outline-primary" value="Register">
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
