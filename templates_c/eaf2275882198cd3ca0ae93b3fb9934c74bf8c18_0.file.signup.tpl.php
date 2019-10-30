<?php
/* Smarty version 3.1.33, created on 2019-10-30 02:15:22
  from 'D:\xampp\htdocs\htdocs\TPE-Web-II\templates\signup.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5db8e42aecec24_78519036',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eaf2275882198cd3ca0ae93b3fb9934c74bf8c18' => 
    array (
      0 => 'D:\\xampp\\htdocs\\htdocs\\TPE-Web-II\\templates\\signup.tpl',
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
function content_5db8e42aecec24_78519036 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
         <div class="row">
                <div class="col-4"> 
                        </div>
                <div class="col-4  formmayor">    
                <form action="registrarse" method="POST">
                         <div class="form-group">
                                <label for="usuario">Usuario:</label>
                                 <input type="text" class="form-control" id="usuario" name="usuario" aria-describedby="usuario" placeholder="usuario">
                        </div>

                        <div class="form-group">
                                <label for="password">Password:</label>
                                <input type="password" class="form-control" id="pass" name="pass" aria-describedby="pass" placeholder="pass">

                        </div>
                        <div class="form-group">
                                 <label for="email">Email:</label>
                                 <input type="email" class="form-control" id="email" name="email" aria-describedby="email" placeholder="email">

                                
                         </div>
                <div class="form-group">
                                <label for="name">Name:</label>
                                <input type="text" class="form-control" id="name" name="name" aria-describedby="name" placeholder="name">

                </div>
                <div class="form-group">
                         <label for="apellido">Apellido:</label>
                        <input type="text" class="form-control" id="lastname" name="lastname" aria-describedby="lastname" placeholder="lastname">
                </div>
                <div><button type="submit" class="btn btn-primary btn-block colorbotonsubmit formpost" value="registrarse">Sign Up</button></div>
                </form>
                </div>
                <div class="col-4"> 
                </div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> <?php }
}
