<?php
/* Smarty version 3.1.33, created on 2019-10-26 02:50:56
  from 'C:\xampp\htdocs\MayoristaRopa\templates\products.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5db398701871b5_69213217',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c7d23d145631d861d86520b54b5d12a0f15e5819' => 
    array (
      0 => 'C:\\xampp\\htdocs\\MayoristaRopa\\templates\\products.tpl',
      1 => 1571985575,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:nav.tpl' => 1,
  ),
),false)) {
function content_5db398701871b5_69213217 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

          <table class="table table-hover">
      <thead class="thead-dark">
          <tr>
                  <th scope="col">id_Product</th>
                  <th scope="col">Description</th>
                  <th scope="col">Price</th>
                  <th scope="col">Stock</th>
                  <th scope="col">Image</th>
                  <th scope="col">id_Category</th>

            </tr> 
          </thead>
        <tbody class="contenedor-tabla" >
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_Products']->value, 'products');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['products']->value) {
?>
            <tr>
                  <th scope="col"><?php echo $_smarty_tpl->tpl_vars['products']->value->id_product;?>
</th>
                  <th scope="col"><?php echo $_smarty_tpl->tpl_vars['products']->value->description;?>
</th>
                  <th scope="col"><?php echo $_smarty_tpl->tpl_vars['products']->value->price;?>
</th>
                  <th scope="col"><?php echo $_smarty_tpl->tpl_vars['products']->value->stock;?>
</th>
                  <th scope="col"><?php echo $_smarty_tpl->tpl_vars['products']->value->image;?>
</th>
                  <th scope="col"><?php echo $_smarty_tpl->tpl_vars['products']->value->id_category;?>
</th>

            </tr>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </tbody>
    </table>
  </div>
<?php }
}
