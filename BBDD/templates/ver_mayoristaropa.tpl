{include file="header.tpl"}
{include file="nav.tpl"}
            {foreach from=$lista_mayoristaropa item=mayoristaropa}
            {if $mayoristaropa->finalizada eq 1}
                <strike><li>{$mayoristaropa->titulo}: {$mayoristaropa->descripcion}</li></strike>
            {else}
                <li>{$mayoristaropa->titulo}: {$mayoristaropa->descripcion} - <a href='finalizar/{$mayoristaropa->id}'>Finalizar</a> - <a href='borrar/{$mayoristaropa->id}'>Borrar</a></li>
            {/if}
            
            {/foreach}

            <form action="insertar" method="post">
            <input type="number" name="id_producto" placeholder="1">
            <input type="number" name="id_categoria_" placeholder="1">
            <input type="text" name="descripcion">
            <input type="number" name="precio"  max="99999">
            <input type="number" name="stock"  max="999999">
            <input type="text" name="imagenes"  max="">
            <input type="submit" value="Insertar">
            </form>

{include file="footer.tpl"} 
  <div class="row">
            <div class="col-12">
                
                <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>Categoria ID</th>
                            <th>Producto ID</th>
                            <th>Descripcion</th>
                            <th>Nombre</th>
                            <th>Precio</th>
                            <th>Stock</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                              <form action="administrador.php" method="POST">
                            <td><input class="input-categoria" type="number" name="categoria"></td>
                            <td><input class="input-producto" type="number" name="producto"></td>
                            <td><input class="input-descripcion" type="text" name="descripcion"></td>
                            <td><input class="input-nombre" type="text" name="nombre"></td>
                            <td><input class="input-precio" type="number" name="precio"></td>
                            <td><input class="input-stock" type="number" name="stock"></td>

                        </tr>
                        <tr></tr>
                    </tbody>
                </table>
                <div><button type="submit" class="btn btn-danger colorbotonsubmit">Submit</button></div>
            </div>       
        </div>