{include file="header.tpl"}
{include file="nav.tpl"}

          <table class="table table-hover table-bordered tabla">
      <thead class="thead-dark">
          <tr>
                  <th scope="col">Name</th>
                  {}
                  <th scope="col"><a class="link-category" href="{$BASE_URL}productsbyorder" >Category</a></th>
                  <th scope="col">Details</th>


            </tr> 
          </thead>
        <tbody class="contenedor-tabla nolink" >
          {foreach from=$list_Products item=products}
            <tr>
              <td scope="col">{$products->name}</th>
              <td scope="col">{$products->nameCat}</th>
              <td scope="col"> <a href="product/{$products->id_product}">Item</th>
            </tr>
        {/foreach}
      </tbody>
    </table>
  </div>
{include file="footer.tpl"} 