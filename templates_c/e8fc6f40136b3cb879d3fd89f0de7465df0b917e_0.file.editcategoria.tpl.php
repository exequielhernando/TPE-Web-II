<?php
/* Smarty version 3.1.33, created on 2019-10-29 08:14:40
  from 'C:\xampp\htdocs\MayoristaRopa\templates\editcategoria.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5db7e6e0633417_76136374',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e8fc6f40136b3cb879d3fd89f0de7465df0b917e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\MayoristaRopa\\templates\\editcategoria.tpl',
      1 => 1572333279,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:navadm.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5db7e6e0633417_76136374 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:navadm.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> 
             <table class="table table-hover table-bordered tabla">
      <thead class="thead-dark">
          <tr>
                  <th scope="col">id_Category</th>
                  <th scope="col">Name</th>
                  <th scope="col">Description</th>
                  <th scope="col"> </th>
                  <th scope="col"> </th>
            </tr>
          </thead>
        <tbody class="contenedor-tabla" >
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_Category']->value, 'categoria');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->value) {
?>
            <tr>
                  <td scope="col"><?php echo $_smarty_tpl->tpl_vars['categoria']->value->id_category;?>
</t>
                  <td scope="col"><?php echo $_smarty_tpl->tpl_vars['categoria']->value->name;?>
</td>
                  <td scope="col"><?php echo $_smarty_tpl->tpl_vars['categoria']->value->description;?>
</td>
                  <td scope="col"> <a href="BorrarOneCategory/<?php echo $_smarty_tpl->tpl_vars['categoria']->value->id_category;?>
">BORRAR</td>
                  <td scope="col"> <a href="editCategory/<?php echo $_smarty_tpl->tpl_vars['categoria']->value->id_category;?>
">EDITAR</td>
            </tr>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </tbody>
    </table>
  </div>

  <div class="row"> 
  <div class="col-4">
  </div>
 <div class="col-4 fondoturro">
      <h2>Add Category</h2>
      <div class="forms">
      <form method="post" action="insertcategory"">
      <div class="form-group">
          <label for="name">Name:</label>
          <input type="text" class="form-control" id="idForm" name="name"  placeholder="name">
      </div>
      <div class="form-group">
          <label for="description">Description:</label>
          <input type="text" class="form-control" id="idForm" name="description"  placeholder="description">
        </div>
        <div class="center">
        <button type="submit" class="btn btn-primary btn-block colorbotonsubmit formpost">Add</button>
      </div>
      </form>
      </div>
    </div>
    </div>
<div class="col-4">
  </div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> <?php }
}
