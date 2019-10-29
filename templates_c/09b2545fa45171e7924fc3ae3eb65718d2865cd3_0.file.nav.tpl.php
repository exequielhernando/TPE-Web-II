<?php
/* Smarty version 3.1.33, created on 2019-10-29 04:42:58
  from 'D:\xampp\htdocs\htdocs\TPE-Web-II\templates\nav.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5db7b54227e9d0_38065026',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '09b2545fa45171e7924fc3ae3eb65718d2865cd3' => 
    array (
      0 => 'D:\\xampp\\htdocs\\htdocs\\TPE-Web-II\\templates\\nav.tpl',
      1 => 1572320576,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5db7b54227e9d0_38065026 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container-fluids all">
         <nav class="navbar navbar-light navbar-expand-md sticky-top navigation-clean-button" style="height:80px;background-color:#37434d;color:#ffffff;">
                <div class="container-fluid"><a class="navbar-brand" href="#"><i class="fa fa-globe"></i> MayoristaExpress</a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                         <div class="collapse navbar-collapse" id="navcol-1">
                                <ul class="nav navbar-nav ml-auto">
                                        <li class="nav-item" role="presentation"><a class="nav-link active" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
" style="color:#ffffff;"><i class="fa fa-user-circle-o"></i> Products</a></li>
                                        <li class="nav-item" role="presentation"><a class="nav-link active" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/category" style="color:#ffffff;"><i class="fa fa-user-circle-o"></i> Category</a></li>

                                        <li class="nav-item" role="presentation"><a class="nav-link active" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/signup" style="color:#ffffff;"><i class="fa fa-star-o"></i> SignUp</a></li>
                                        <li class="nav-item" role="presentation"><a class="nav-link active" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/signin" style="color:#ffffff;"><i class="fa fa-sign-in"></i> SignIn</a></li>
                                </ul>
                        </div>
                 </div>
        </nav> <?php }
}
