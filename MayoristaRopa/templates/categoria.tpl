{include file="header.tpl"}
{include file="nav.tpl"}

             <table class="table table-hover">
      <thead class="thead-dark">
          <tr>
                  <th scope="col">Name</th>
                  <th scope="col">Description</th>

            </tr>
          </thead>
        <tbody class="contenedor-tabla" >
          {foreach from=$list_Category item=category}
            <tr>
                  <th scope="col">{$category->name}</th>
                  <th scope="col">{$category->description}</th>
            </tr>
        {/foreach}
      </tbody>
    </table>
  </div>
{include file="footer.tpl"} 