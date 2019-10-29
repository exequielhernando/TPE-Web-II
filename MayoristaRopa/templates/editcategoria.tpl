{include file="header.tpl"}
{include file="navadm.tpl"} 
             <table class="table table-hover">
      <thead class="thead-dark">
          <tr>
                  <th scope="col">id_Category</th>
                  <th scope="col">Name</th>
                  <th scope="col">Description</th>
                  <th scope="col"> </th>
                  <th scope="col"> </th>
            </tr>
          </thead>
        <tbody class="contenedor-tabla" >
          {foreach from=$list_Category item=categoria}
            <tr>
                  <th scope="col">{$categoria->id_category}</th>
                  <th scope="col">{$categoria->name}</th>
                  <th scope="col">{$categoria->description}</th>
                  <th scope="col"> <a href="BorrarOneCategory/{$categoria->id_category}">BORRAR</th>
                  <th scope="col"> <a href="editCategory/{$categoria->id_category}">Put</th>
            </tr>
        {/foreach}
      </tbody>
    </table>
  </div>

  <div class="row"> 
  <div class="col-4">
  </div>
 <div class="col-4 fondoturro">
      <h2>Add Category</h2>
      <div>
      <form method="post" action="insertcategory"">
          <label for="name">Name</label>
          <input type="text" class="form-control" id="idForm" name="name"  placeholder="name">
          <label for="description">Description</label>
          <input type="text" class="form-control" id="idForm" name="description"  placeholder="description">
        <button type="submit" class="btn btn-primary">Put Category</button>
      </form>
      </div>
    </div>
    </div>
<div class="col-4">
  </div>
</div>
{include file="footer.tpl"} 