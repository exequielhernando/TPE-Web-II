{include file="header.tpl"}
{include file="nav.tpl"}

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
          {foreach from=$list_Products item=products}
            <tr>
                  <th scope="col">{$products->id_product}</th>
                  <th scope="col">{$products->description}</th>
                  <th scope="col">{$products->price}</th>
                  <th scope="col">{$products->stock}</th>
                  <th scope="col">{$products->image}</th>
                  <th scope="col">{$products->id_category}</th>

            </tr>
        {/foreach}
      </tbody>
    </table>
  </div>
