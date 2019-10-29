<?php
/* Smarty version 3.1.33, created on 2019-10-29 03:36:30
  from 'D:\xampp\htdocs\htdocs\TPE-Web-II\templates\products.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5db7a5aea11494_20064198',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0ed847fb2bf950130d9ec9cc06cbdd9d2c2a419f' => 
    array (
      0 => 'D:\\xampp\\htdocs\\htdocs\\TPE-Web-II\\templates\\products.tpl',
      1 => 1572316519,
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
function content_5db7a5aea11494_20064198 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

          <table class="table table-hover">
      <thead class="thead-dark">
          <tr>
                  <th scope="col">Name</th>
                  <th scope="col">Category</th>
                  <th scope="col">Details</th>


            </tr> 
          </thead>
        <tbody class="contenedor-tabla" >
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_Products']->value, 'products');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['products']->value) {
?>
            <tr>
                  <th scope="col"><?php echo $_smarty_tpl->tpl_vars['products']->value->name;?>
</th>
                  <th scope="col"><?php echo $_smarty_tpl->tpl_vars['products']->value->nameCat;?>
</th>
                  <th scope="col"> <a href="product/<?php echo $_smarty_tpl->tpl_vars['products']->value->id_product;?>
">Item</th>


            </tr>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </tbody>
    </table>
  </div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> <?php }
}
