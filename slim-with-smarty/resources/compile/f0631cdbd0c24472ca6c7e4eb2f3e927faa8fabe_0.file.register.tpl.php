<?php
/* Smarty version 3.1.33, created on 2019-07-01 20:15:50
  from '/Applications/XAMPP/xamppfiles/htdocs/smarty/resources/views/auth/register.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d1a4dd67f43e6_88685061',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f0631cdbd0c24472ca6c7e4eb2f3e927faa8fabe' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/smarty/resources/views/auth/register.tpl',
      1 => 1562004950,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d1a4dd67f43e6_88685061 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16201312535d1a4dd67eedf7_45618917', 'title');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20828136215d1a4dd67ef817_41861726', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/app.tpl');
}
/* {block 'title'} */
class Block_16201312535d1a4dd67eedf7_45618917 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_16201312535d1a4dd67eedf7_45618917',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Register<?php
}
}
/* {/block 'title'} */
/* {block 'content'} */
class Block_20828136215d1a4dd67ef817_41861726 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_20828136215d1a4dd67ef817_41861726',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="card">
                <h5 class="card-header">Register</h5>
                <div class="card-body">
                    <form action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['path_for'][0], array( array('name'=>"auth.register"),$_smarty_tpl ) );?>
" method="post" autocomplete="off">
                        <input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['nameKey']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
">
                        <input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['valueKey']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
">
                        <div class="form-group">
                            <label for="first_name">Voornaam</label>
                            <input type="text" name="first_name" id="first_name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="last_name">Achternaam</label>
                            <input type="text" name="last_name" id="last_name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="password">Wachtwoord</label>
                            <input type="password" name="password" id="password" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-outline-primary">Register</button>
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
