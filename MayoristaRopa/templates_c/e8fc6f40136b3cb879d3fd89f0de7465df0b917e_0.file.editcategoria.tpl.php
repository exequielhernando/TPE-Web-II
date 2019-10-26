<?php
/* Smarty version 3.1.33, created on 2019-10-26 01:47:02
  from 'C:\xampp\htdocs\MayoristaRopa\templates\editcategoria.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5db3897654a2c2_96728915',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e8fc6f40136b3cb879d3fd89f0de7465df0b917e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\MayoristaRopa\\templates\\editcategoria.tpl',
      1 => 1572040027,
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
function content_5db3897654a2c2_96728915 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:navadm.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> 
             <table class="table table-hover">
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
                  <th scope="col"><?php echo $_smarty_tpl->tpl_vars['categoria']->value->id_category;?>
</th>
                  <th scope="col"><?php echo $_smarty_tpl->tpl_vars['categoria']->value->name;?>
</th>
                  <th scope="col"><?php echo $_smarty_tpl->tpl_vars['categoria']->value->description;?>
</th>
                  <th scope="col"> <a href="BorrarOneCategory/<?php echo $_smarty_tpl->tpl_vars['categoria']->value->id_category;?>
">BORRAR</th>
                  <th scope="col"> <a href="editCategory/<?php echo $_smarty_tpl->tpl_vars['categoria']->value->id_category;?>
">Put</th>
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
      <div>
      <form method="post" action="insertcategory"">
          <input type="number" class="form-control" id="idForm" name="id_category"  placeholder="id_category">
          <input type="text" class="form-control" id="idForm" name="name"  placeholder="name">
          <input type="text" class="form-control" id="idForm" name="description"  placeholder="description">
        <button type="submit" class="btn btn-primary">Put Category</button>
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
