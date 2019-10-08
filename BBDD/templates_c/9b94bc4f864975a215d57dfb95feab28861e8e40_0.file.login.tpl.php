<?php
/* Smarty version 3.1.33, created on 2019-10-08 03:59:52
  from 'C:\xampp\htdocs\BBDD\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d9bed988d6e31_64283485',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9b94bc4f864975a215d57dfb95feab28861e8e40' => 
    array (
      0 => 'C:\\xampp\\htdocs\\BBDD\\templates\\login.tpl',
      1 => 1570497234,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:nav.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5d9bed988d6e31_64283485 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>  
    <div class="row primerRow">
        <div class="col-4">
        </div>
        <div class="col-4 formmenor ">
        <form class="clean-clean-form dark"  action="iniciarSesion" method="post">
            <input class="form-control" type="text" name="user" placeholder="Usuario">
            <input class="form-control" type="password" name="pass" placeholder="Password">
            <input class="btn btn-primary btn-block colorbotonsubmit formpost" type="submit" value="Login">
        </form>
        </div>
        <div class="col-4"> 
        </div>
    </div>   
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
