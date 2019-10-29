<?php
/* Smarty version 3.1.33, created on 2019-10-29 02:27:08
  from 'C:\xampp\htdocs\MayoristaRopa\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5db7956cf08489_52643878',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'de3976a12f5484479d6c68584a1191f64cc8a027' => 
    array (
      0 => 'C:\\xampp\\htdocs\\MayoristaRopa\\templates\\login.tpl',
      1 => 1571985575,
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
function content_5db7956cf08489_52643878 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>  
    <div class="row primerRow">
        <div class="col-4">
        </div>
        <div class="col-4 formmenor ">
        <form class="clean-clean-form dark"  action="iniciarSesion" method="post">
            <input class="form-control" type="input" name="user" id="user" aria-describedby="usuarioId" placeholder="usuario">
            <input class="form-control" type="password" id="password" name="password" placeholder="password">
             <button type="submit" class="btn btn-primary btn-block colorbotonsubmit formpost" value="Login">Login</button>
        </form>
        </div>
        <div class="col-4"> 
        </div>
    </div>   
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
