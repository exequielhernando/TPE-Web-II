<?php
/* Smarty version 3.1.33, created on 2019-10-08 03:04:06
  from 'C:\xampp\htdocs\BBDD\templates\registro.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d9be086403988_23013895',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '42f4a21e11b52d14334171c5efd40e44545a4995' => 
    array (
      0 => 'C:\\xampp\\htdocs\\BBDD\\templates\\registro.tpl',
      1 => 1570487932,
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
function content_5d9be086403988_23013895 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
         <div class="row">
                <div class="col-4"> 
                        </div>
                <div class="col-4 formmayor">    
                <form action="index.php" method="POST">
                         <div class="form-group">
                                <label for="usuario">Usuario:</label>
                                 <input type="number" class="form-control" id="usuario">
                        </div>

                        <div class="form-group">
                                <label for="password">Password:</label>
                                <input type="password" class="form-control" id="password">
                        </div>
                        <div class="form-group">
                                 <label for="nombre">Nombre:</label>
                                <input type="text" class="form-control" id="nombre">
                         </div>
                <div class="form-group">
                                <label for="apellido">Apellido:</label>
                                <input type="text" class="form-control" id="apellido">
                </div>
                <div class="form-group">
                         <label for="email">Email:</label>
                         <input type="email" class="form-control" id="email">
                </div>
                <div><button type="submit" class="btn btn-danger colorbotonsubmit">Submit</button></div>
                </form>
                </div>
                <div class="col-4"> 
                </div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> <?php }
}
