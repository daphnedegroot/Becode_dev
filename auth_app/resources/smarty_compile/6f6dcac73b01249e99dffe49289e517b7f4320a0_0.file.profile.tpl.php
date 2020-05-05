<?php
/* Smarty version 3.1.33, created on 2019-07-08 12:25:50
  from '/Applications/XAMPP/xamppfiles/htdocs/auth_app/resources/views/users/profile.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d231a2eefb505_33745021',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6f6dcac73b01249e99dffe49289e517b7f4320a0' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/auth_app/resources/views/users/profile.tpl',
      1 => 1562581550,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d231a2eefb505_33745021 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6298240145d231a2eef6658_35129877', "title");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13145220655d231a2eef71b4_92323927', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/app.tpl');
}
/* {block "title"} */
class Block_6298240145d231a2eef6658_35129877 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_6298240145d231a2eef6658_35129877',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Profile<?php
}
}
/* {/block "title"} */
/* {block "content"} */
class Block_13145220655d231a2eef71b4_92323927 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_13145220655d231a2eef71b4_92323927',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">Profile</li>
        </ol>
    </nav>

    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <h5 class="card-header">Profile</h5>
                <div class="card-body d-flex">
                    <div class="user_info">
                        <p><strong>Voornaam:</strong> <?php echo $_smarty_tpl->tpl_vars['row']->value->firstname;?>
</p>
                        <p><strong>Achternaam:</strong> <?php echo $_smarty_tpl->tpl_vars['row']->value->lastname;?>
</p>
                        <p><strong>Email:</strong> <?php echo $_smarty_tpl->tpl_vars['row']->value->email;?>
</p>
                    </div>
                    <div class="user_avatar d-flex justify-content-center w-100">
                        <img src="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['base_url'][0], array( array(),$_smarty_tpl ) );?>
/images/avatar.png" class="profile-avatar" alt="avatar">

                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
}
}
/* {/block "content"} */
}
