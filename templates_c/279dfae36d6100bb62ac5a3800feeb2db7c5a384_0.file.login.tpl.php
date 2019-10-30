<?php
/* Smarty version 3.1.33, created on 2019-10-30 02:15:23
  from 'D:\xampp\htdocs\htdocs\TPE-Web-II\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5db8e42bb8c6b4_53184081',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '279dfae36d6100bb62ac5a3800feeb2db7c5a384' => 
    array (
      0 => 'D:\\xampp\\htdocs\\htdocs\\TPE-Web-II\\templates\\login.tpl',
      1 => 1572376925,
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
function content_5db8e42bb8c6b4_53184081 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>  
    <div class="row primerRow">
        <div class="col-4">
        </div>
        <div class="col-4 formmenor">
        <form class="clean-clean-form"  action="iniciarSesion" method="post">
            <div class="form-group">
            <input class="form-control" type="input" name="user" id="user" aria-describedby="usuarioId" placeholder="Usuario">
            </div>
            <div class="form-group">
            <input class="form-control" type="password" id="password" name="password" placeholder="Password">
            </div>
            <button type="submit" class="btn btn-primary btn-block colorbotonsubmit formpost" value="Login">Login</button>
        </form>
        </div>
        <div class="col-4"> 
        </div>
    </div>   
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
