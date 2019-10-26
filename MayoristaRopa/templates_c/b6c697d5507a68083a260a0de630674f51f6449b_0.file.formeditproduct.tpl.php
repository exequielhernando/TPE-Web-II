<?php
/* Smarty version 3.1.33, created on 2019-10-26 01:53:27
  from 'C:\xampp\htdocs\MayoristaRopa\templates\formeditproduct.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5db38af79bc854_44127219',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b6c697d5507a68083a260a0de630674f51f6449b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\MayoristaRopa\\templates\\formeditproduct.tpl',
      1 => 1572047558,
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
function content_5db38af79bc854_44127219 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:navadm.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> 
<div class="row"> 
  <div class="col-4">
  </div>
 <div class="col-4 fondoturro">
      <h2>Editar Producto</h2>
      <div>
      <form method="post" action="UpdateProduct">
          <input type="number" class="form-control" id="id_category" name="id_product" aria-describedby="id_product"  placeholder="$products->id_product" value="<?php echo $_smarty_tpl->tpl_vars['products']->value->id_product;?>
>
          <input type="input" class="form-control" id="price" name="description" aria-describedby="description" placeholder="$products->description" value="<?php echo $_smarty_tpl->tpl_vars['products']->value->description;?>
>
          <input type="number" class="form-control" id="stock" name="price" aria-describedby="price" placeholder="$products->price" value="<?php echo $_smarty_tpl->tpl_vars['products']->value->price;?>
>
          <input type="number" class="form-control" id="idForm" name="stock" aria-describedby="stock" placeholder="$products->stock" value="<?php echo $_smarty_tpl->tpl_vars['products']->value->stock;?>
>
          <input type="input" class="form-control-center" id="image" name="image" aria-describedby="image" placeholder="$products->image" value="<?php echo $_smarty_tpl->tpl_vars['products']->value->image;?>
>
          <input type="number" class="form-control-center" id="id_category" name="id_category" aria-describedby="id_category value="<?php echo $_smarty_tpl->tpl_vars['products']->value->id_category;?>
">

          
        <button type="submit" class="btn btn-primary">Put Product</button>
      </form>
      </div>
    </div>
    </div>
<div class="col-4">
  </div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> 
<?php }
}
