<?php
/* Smarty version 3.1.33, created on 2019-07-08 12:18:08
  from '/Applications/XAMPP/xamppfiles/htdocs/auth_app/resources/views/inc/navigation.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d231860b88611_18160988',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '023f97eae49b26b7cfd2b2a874ce52092e6586b8' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/auth_app/resources/views/inc/navigation.tpl',
      1 => 1562581087,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d231860b88611_18160988 (Smarty_Internal_Template $_smarty_tpl) {
?><nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <a class="navbar-brand" href="#">Authentication</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto d-flex align-items-center">
            <?php if (isset($_smarty_tpl->tpl_vars['row']->value)) {?>
                <li>
                    <a href=""><img src="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['base_url'][0], array( array(),$_smarty_tpl ) );?>
/images/avatar.png" class="nav-avatar" alt=""></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <?php echo $_smarty_tpl->tpl_vars['row']->value->firstname;?>
 <?php echo $_smarty_tpl->tpl_vars['row']->value->lastname;?>

                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Profile</a>
                        <a class="dropdown-item" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['path_for'][0], array( array('name'=>"logout"),$_smarty_tpl ) );?>
">Logout</a>
                    </div>
                </li>
            <?php } else { ?>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['path_for'][0], array( array('name'=>"auth.login"),$_smarty_tpl ) );?>
">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['path_for'][0], array( array('name'=>"auth.register"),$_smarty_tpl ) );?>
">Register</a>
                </li>
            <?php }?>
        </ul>
    </div>
</nav><?php }
}
