{include file="header.tpl"}
{include file="navadm.tpl"} 

          <table class="table table-hover">
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
          {foreach from=$list_Products item=products}
            <tr>
                  <th scope="col">{$products->id_product}</th>
                  <th scope="col">{$products->name}</th>
                  <th scope="col">{$products->description}</th>
                  <th scope="col">{$products->price}</th>
                  <th scope="col">{$products->stock}</th>
                  <th scope="col">{$products->image}</th>
                  <th scope="col">{$products->id_category}</th>
                  <th scope="col"> <a href="BorrarOneProduct/{$products->id_product}">BORRAR</th>
                  <th scope="col"> <a href="FormEditProduct/{$products->id_product}">EDITAR</th>

            </tr>
          {/foreach}
      </tbody>
    </table>
  </div>
<div class="row"> 
  <div class="col-4">
  </div>
 <div class="col-4 fondoturro">
      <h2>Add Product</h2>
      <div>
      <form method="post" action="insertproduct">
          <input type="number" class="form-control" id="id_category" name="id_product" aria-describedby="id_product"  placeholder="id_product" >
          <input type="text" class="form-control" id="description" name="description" aria-describedby="description" placeholder="description">
          <input type="number" class="form-control" id="price" name="price" aria-describedby="price" placeholder="price">
          <input type="number" class="form-control" id="stock" name="stock" aria-describedby="stock" placeholder="stock">
          <input type="input" class="form-control-center" id="image" name="image" aria-describedby="image" placeholder="image">
          <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
             Dropdown button
          </button>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
          </div>
          <input type="input" class="form-control-center" id="id_category" name="id_category" aria-describedby="id_category" placeholder="id_category">

          
        <button type="submit" class="btn btn-primary">Add Product</button>
      </form>
      </div>
    </div>
    </div>
<div class="col-4">
  </div>
</div>
{include file="footer.tpl"}