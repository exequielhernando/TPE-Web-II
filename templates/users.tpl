{include file="header.tpl"}
{include file="navadm.tpl"} 
          <table class="table table-hover table-bordered tabla">
         <thead class="thead-dark">
          <tr>
                  <th scope="col">Name</th>
                  <th scope="col">lastname</th>
                  <th scope="col">usuario</th>
                  <th scope="col">email</th>
                  <th scope="col">Administrator</th>
                  <th scope="col"> </th>
                  <th scope="col"> </th>
            </tr>
          </thead>

        <tbody class="contenedor-tabla" >
          {foreach from=$Users item=User}
            <tr>
                  <td scope="col">{$User->name}</td>
                  <td scope="col">{$User->lastname}</td>
                  <td scope="col">{$User->usuario}</td>
                  <td scope="col">{$User->email}</td>
                  <td scope="col">
                    {if $User->is_admin==1}
                        Yes
                    {else}
                        No
                    {/if}
                  </td>
                  <td scope="col"> <a href="deleteUser/{$User->id_usuario}">BORRAR</td>
                  <td scope="col"> <a href="editUser/{$User->id_usuario}">EDITAR</td> 
            </tr>
          {/foreach}
      </tbody>
    </table>
  </div>
{* <div class="row"> 
  <div class="col-4">
  </div>
 <div class="col-4 fondoturro">
      <h2>Add Product</h2>
      <div>
      <form class="forms" method="post" action="insertproduct">
          <label for="name">Name:</label>
          <input type="text" class="form-control" id="name" name="name" aria-describedby="name" placeholder="name">
          <label for="description">Description:</label>
          <input type="text" class="form-control" id="description" name="description" aria-describedby="description" placeholder="description">
          <label for="price">Price:</label>
          <input type="number" class="form-control" id="price" name="price" aria-describedby="price" placeholder="price">
          <label for="stock">Stock:</label>
          <input type="number" class="form-control" id="stock" name="stock" aria-describedby="stock" placeholder="stock">
          <label for="image">Image:</label>
          <input type="input" class="form-control-center" id="image" name="image" aria-describedby="image" placeholder="image">
          <div class="select">
          <label for="categoria">Categoria:</label>
           <select id="id_category" name ="id_category" class="browser-default custom-select">
              {foreach from=$list_Category item=categoria}
                  <option value="{$categoria->id_category}">{$categoria->name}</option>          
            {/foreach}
           </select>
          </div>
        <button type="submit" class="btn btn-primary btn-block colorbotonsubmit formpost">Add</button>
      </form>
      </div>
    </div>
    </div>
<div class="col-4"
  </div>
</div> *}
{include file="footer.tpl"}