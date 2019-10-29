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
                  <th scope="col">{$products->nameCat}</th>
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
          <label for="name">Name</label>
          <input type="text" class="form-control" id="name" name="name" aria-describedby="name" placeholder="name">
          <label for="description">Description</label>
          <input type="text" class="form-control" id="description" name="description" aria-describedby="description" placeholder="description">
          <label for="price">Price</label>
          <input type="number" class="form-control" id="price" name="price" aria-describedby="price" placeholder="price">
          <label for="stock">Stock</label>
          <input type="number" class="form-control" id="stock" name="stock" aria-describedby="stock" placeholder="stock">
          <label for="image">Image</label>
          <input type="input" class="form-control-center" id="image" name="image" aria-describedby="image" placeholder="image">
          <label for="categoria">Categoria</label>
          <div class="select">
           <select id="id_category" name ="id_category" class="browser-default custom-select">
              {foreach from=$list_Category item=categoria}
                  <option value="{$categoria->id_category}">{$categoria->name}</option>          
            {/foreach}
           </select>
          </div>
        <button type="submit" class="btn btn-primary">Add Product</button>
      </form>
      </div>
    </div>
    </div>
<div class="col-4"
  </div>
</div>
{include file="footer.tpl"}