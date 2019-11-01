{include file="header.tpl"}
{include file="nav.tpl"}

          <table class="table table-hover table-bordered tabla">
      <thead class="thead-dark">
          <tr>
                  <th scope="col">Name</th>
                  <th scope="col">Category</th>
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
  <h2>Filtrar por Categoria</h2>
   <div>
      <form method="post" action="OrderPorCategory">
          <select id="id_category" name ="id_category" value="{$category[0]->id_category}" class="browser-default custom-select">
              {foreach from=$list_Category item=categoria}
                <option value="{$category->name}">{$categoria->name}</option>          
              {/foreach}
            </select>
        <button type="submit" class="btn btn-primary">Filtrar</button>
      </form>
      </div>
{include file="footer.tpl"} 
