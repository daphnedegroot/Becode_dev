<?php
/* Smarty version 3.1.33, created on 2019-07-01 14:15:15
  from '/Applications/XAMPP/xamppfiles/htdocs/smarty/resources/views/inc/navigation.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d19f953a0e971_26623535',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '109084cbbd08e8abab881060e60b61bb97b75c21' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/smarty/resources/views/inc/navigation.tpl',
      1 => 1561983314,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d19f953a0e971_26623535 (Smarty_Internal_Template $_smarty_tpl) {
?><nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <a class="navbar-brand" href="#">Sports app</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    username
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Profile</a>
                    <a class="dropdown-item" href="#">Logout</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['path_for'][0], array( array('name'=>"auth.login"),$_smarty_tpl ) );?>
">Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['path_for'][0], array( array('name'=>"auth.register"),$_smarty_tpl ) );?>
">Register</a>
            </li>
        </ul>
    </div>
</nav><?php }
}
