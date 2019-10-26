{include file="header.tpl"}
{include file="nav.tpl"}
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
          {foreach from=$list_Products item=products}
            <tr>
                  <th scope="col">{$products->name}</th>
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
{include file="footer.tpl"} 