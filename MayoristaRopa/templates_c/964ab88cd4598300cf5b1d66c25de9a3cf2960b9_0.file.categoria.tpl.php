<?php
/* Smarty version 3.1.33, created on 2019-10-26 02:50:56
  from 'C:\xampp\htdocs\MayoristaRopa\templates\categoria.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5db398701dc986_88171392',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '964ab88cd4598300cf5b1d66c25de9a3cf2960b9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\MayoristaRopa\\templates\\categoria.tpl',
      1 => 1571985575,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5db398701dc986_88171392 (Smarty_Internal_Template $_smarty_tpl) {
?>             <table class="table table-hover">
      <thead class="thead-dark">
          <tr>
                  <th scope="col">id_Category</th>
                  <th scope="col">Name</th>
                  <th scope="col">Description</th>

            </tr>
          </thead>
        <tbody class="contenedor-tabla" >
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_Category']->value, 'category');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
?>
            <tr>
                  <th scope="col"><?php echo $_smarty_tpl->tpl_vars['category']->value->id_category;?>
</th>
                  <th scope="col"><?php echo $_smarty_tpl->tpl_vars['category']->value->name;?>
</th>
                  <th scope="col"><?php echo $_smarty_tpl->tpl_vars['category']->value->description;?>
</th>
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
