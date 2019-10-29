<?php
/* Smarty version 3.1.33, created on 2019-10-29 08:02:48
  from 'C:\xampp\htdocs\MayoristaRopa\templates\editproducts.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5db7e418486473_60976198',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '779878a0ba86b1ccd43ff36dd82e6799d00f3551' => 
    array (
      0 => 'C:\\xampp\\htdocs\\MayoristaRopa\\templates\\editproducts.tpl',
      1 => 1572332549,
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
function content_5db7e418486473_60976198 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:navadm.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> 

          <table class="table table-hover table-bordered tabla">
         <thead class="thead-dark">
          <tr>
                  <th scope="col">id_Product</th>
                  <th scope="col">Name</th>
                  <th scope="col">Description</th>
                  <th scope="col">Price</th>
                  <th scope="col">Stock</th>
                  <th scope="col">Image</th>
                  <th scope="col">id_Category</th>
                  <th scope="col"> </th>
                  <th scope="col"> </th>
            </tr>
          </thead>
        <tbody class="contenedor-tabla" >
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_Products']->value, 'products');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['products']->value) {
?>
            <tr>
                  <td scope="col"><?php echo $_smarty_tpl->tpl_vars['products']->value->id_product;?>
</td>
                  <td scope="col"><?php echo $_smarty_tpl->tpl_vars['products']->value->name;?>
</td>
                  <td scope="col"><?php echo $_smarty_tpl->tpl_vars['products']->value->description;?>
</td>
                  <td scope="col"><?php echo $_smarty_tpl->tpl_vars['products']->value->price;?>
</td>
                  <td scope="col"><?php echo $_smarty_tpl->tpl_vars['products']->value->stock;?>
</td>
                  <td scope="col"><?php echo $_smarty_tpl->tpl_vars['products']->value->image;?>
</td>
                  <td scope="col"><?php echo $_smarty_tpl->tpl_vars['products']->value->nameCat;?>
</td>
                  <td scope="col"> <a href="BorrarOneProduct/<?php echo $_smarty_tpl->tpl_vars['products']->value->id_product;?>
">BORRAR</td>
                  <td scope="col"> <a href="FormEditProduct/<?php echo $_smarty_tpl->tpl_vars['products']->value->id_product;?>
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
      <h2>Add Product</h2>
      <div>
      <form class="forms" method="post" action="insertproduct">
          <label for="name">Name:</label>
          <input type="text" class="form-control" id="name" name="name" aria-describedby="name" placeholder="name">
          <label for="description">Description:</label>
          <input type="text" class="form-control" id="description" name="description" aria-describedby="description" placeholder="description">
          <label for="price">Price:</label>
          <input type="number" class="form-control" id="price" name="price" aria-describedby="price" placeholder="price">
          <label for="stock">Stock:</label>
          <input type="number" class="form-control" id="stock" name="stock" aria-describedby="stock" placeholder="stock">
          <label for="image">Image:</label>
          <input type="input" class="form-control-center" id="image" name="image" aria-describedby="image" placeholder="image">
          <div class="select">
          <label for="categoria">Categoria:</label>
           <select id="id_category" name ="id_category" class="browser-default custom-select">
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_Category']->value, 'categoria');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->value) {
?>
                  <option value="<?php echo $_smarty_tpl->tpl_vars['categoria']->value->id_category;?>
"><?php echo $_smarty_tpl->tpl_vars['categoria']->value->name;?>
</option>          
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
           </select>
          </div>
        <button type="submit" class="btn btn-primary btn-block colorbotonsubmit formpost">Add</button>
      </form>
      </div>
    </div>
    </div>
<div class="col-4"
  </div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
