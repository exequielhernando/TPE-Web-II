{include file="header.tpl"}
{include file="navadm.tpl"} 
<div class="row"> 
  <div class="col-4">
  </div>
 <div class="col-4 fondoturro">
      <h2>Editar Producto</h2>
      <div>
      <form method="post" action="UpdateProduct">
          <input type="number" class="form-control" id="id_category" name="id_product" aria-describedby="id_product"  placeholder="$products->id_product" value="{$products->id_product}>
          <input type="input" class="form-control" id="price" name="description" aria-describedby="description" placeholder="$products->description" value="{$products->description}>
          <input type="number" class="form-control" id="stock" name="price" aria-describedby="price" placeholder="$products->price" value="{$products->price}>
          <input type="number" class="form-control" id="idForm" name="stock" aria-describedby="stock" placeholder="$products->stock" value="{$products->stock}>
          <input type="input" class="form-control-center" id="image" name="image" aria-describedby="image" placeholder="$products->image" value="{$products->image}>
          <input type="number" class="form-control-center" id="id_category" name="id_category" aria-describedby="id_category value="{$products->id_category}">

          
        <button type="submit" class="btn btn-primary">Put Product</button>
      </form>
      </div>
    </div>
    </div>
<div class="col-4">
  </div>
</div>
{include file="footer.tpl"} 
