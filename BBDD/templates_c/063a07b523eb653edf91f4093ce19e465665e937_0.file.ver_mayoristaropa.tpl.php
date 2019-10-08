<?php
/* Smarty version 3.1.33, created on 2019-10-08 01:23:47
  from 'C:\xampp\htdocs\BBDD\templates\ver_mayoristaropa.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d9bc90381b857_22831213',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '063a07b523eb653edf91f4093ce19e465665e937' => 
    array (
      0 => 'C:\\xampp\\htdocs\\BBDD\\templates\\ver_mayoristaropa.tpl',
      1 => 1570490625,
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
function content_5d9bc90381b857_22831213 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['lista_mayoristaropa']->value, 'mayoristaropa');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['mayoristaropa']->value) {
?>
            <?php if ($_smarty_tpl->tpl_vars['mayoristaropa']->value->finalizada == 1) {?>
                <strike><li><?php echo $_smarty_tpl->tpl_vars['mayoristaropa']->value->titulo;?>
: <?php echo $_smarty_tpl->tpl_vars['mayoristaropa']->value->descripcion;?>
</li></strike>
            <?php } else { ?>
                <li><?php echo $_smarty_tpl->tpl_vars['mayoristaropa']->value->titulo;?>
: <?php echo $_smarty_tpl->tpl_vars['mayoristaropa']->value->descripcion;?>
 - <a href='finalizar/<?php echo $_smarty_tpl->tpl_vars['mayoristaropa']->value->id;?>
'>Finalizar</a> - <a href='borrar/<?php echo $_smarty_tpl->tpl_vars['mayoristaropa']->value->id;?>
'>Borrar</a></li>
            <?php }?>
            
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

            <form action="insertar" method="post">
            <input type="number" name="id_producto" placeholder="1">
            <input type="number" name="id_categoria_" placeholder="1">
            <input type="text" name="descripcion">
            <input type="number" name="precio"  max="99999">
            <input type="number" name="stock"  max="999999">
            <input type="text" name="imagenes"  max="">
            <input type="submit" value="Insertar">
            </form>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> 
  <div class="row">
            <div class="col-12">
                
                <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>Categoria ID</th>
                            <th>Producto ID</th>
                            <th>Descripcion</th>
                            <th>Nombre</th>
                            <th>Precio</th>
                            <th>Stock</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                              <form action="administrador.php" method="POST">
                            <td><input class="input-categoria" type="number" name="categoria"></td>
                            <td><input class="input-producto" type="number" name="producto"></td>
                            <td><input class="input-descripcion" type="text" name="descripcion"></td>
                            <td><input class="input-nombre" type="text" name="nombre"></td>
                            <td><input class="input-precio" type="number" name="precio"></td>
                            <td><input class="input-stock" type="number" name="stock"></td>

                        </tr>
                        <tr></tr>
                    </tbody>
                </table>
                <div><button type="submit" class="btn btn-danger colorbotonsubmit">Submit</button></div>
            </div>       
        </div><?php }
}
