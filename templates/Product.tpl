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
          {foreach from=$product item=products}
            <tr>
                  <td scope="col">{$products->name}</td>
                  <th scope="col">{$products->description}</th>
                  <th scope="col">{$products->price}</th>
                  <th scope="col">{$products->stock}</th>
                  <th scope="col">{$products->image}</th>
                  <th scope="col">{$products->nameCat}</th>


            </tr>
          {/foreach}
        </tbody>
    </table>
{include file="footer.tpl"} 