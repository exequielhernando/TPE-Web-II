<?php
/* Smarty version 3.1.33, created on 2019-10-29 02:51:02
  from 'C:\xampp\htdocs\MayoristaRopa\templates\product.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5db79b06e59138_35035764',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1fe255be7795f030880f1b0a31d91a01797ee3fb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\MayoristaRopa\\templates\\product.tpl',
      1 => 1572313858,
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
function content_5db79b06e59138_35035764 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <table class="table table-hover">
      <thead class="thead">
          <tr>
                  <th scope="col">Name</th>
                  <th scope="col">Description</th>
                  <th scope="col">Price</th>
                  <th scope="col">Stock</th>
                  <th scope="col">Image</th>
                  <th scope="col">Category</th>

          </tr> 
        </thead>
        <tbody class="contenedor-tabla" >
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value, 'products');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['products']->value) {
?>
            <tr>
                  <td scope="col"><?php echo $_smarty_tpl->tpl_vars['products']->value->name;?>
</td>
                  <th scope="col"><?php echo $_smarty_tpl->tpl_vars['products']->value->description;?>
</th>
                  <th scope="col"><?php echo $_smarty_tpl->tpl_vars['products']->value->price;?>
</th>
                  <th scope="col"><?php echo $_smarty_tpl->tpl_vars['products']->value->stock;?>
</th>
                  <th scope="col"><?php echo $_smarty_tpl->tpl_vars['products']->value->image;?>
</th>
                  <th scope="col"><?php echo $_smarty_tpl->tpl_vars['products']->value->nameCat;?>
</th>


            </tr>
          <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </tbody>
    </table>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> <?php }
}