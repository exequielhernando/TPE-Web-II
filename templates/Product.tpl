{include file="header.tpl"}
{include file="nav.tpl"}
    <table class="table table-hover table-bordered tabla">
      <thead class="thead">
          <tr>
                  <th scope="col">Name</th>
                  <th scope="col">Description</th>
                  <th scope="col">Price</th>
                  <th scope="col">Stock</th>
                  <th scope="col">Category</th>

          </tr> 
        </thead>
        <tbody class="contenedor-tabla" >
          {foreach from=$Product item=products}
            <tr>
                  <td scope="col">{$products->name}</td>
                  <td scope="col">{$products->description}</th>
                  <td scope="col">{$products->price}</th>
                  <td scope="col">{$products->stock}</th>
                  <td scope="col">{$products->nameCat}</th>
            </tr>
          {/foreach}
        </tbody>
    </table>


    <!-- <div class="row">
        <div class="col-3"></div>

        <div class="col-6">

    <table class="table table-hover table-bordered tabla">
        <thead class="thead">
            <tr>
                <th scope="col">Imagenes del producto</th>
            </tr> 
          </thead>
          <tbody class="contenedor-tabla" >
            {foreach from=$Images  mages item=images}
              <tr>  
                  <td scope="col"> <img class="imgchica" src="{$images->direccion}"> </td>
              </tr>
            {/foreach}
          </tbody>
      </table>
    </div>
      <div class="col-3"></div>

    </div> -->
    {include file="images.tpl"} 

{include file="footer.tpl"} 
