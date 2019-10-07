{include file="header.tpl"}

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
            <input type="text" name="descripcion"  max="remera roja">
            <input type="number" name="precio"  max="200">
            <input type="number" name="stock"  max="70">
            <input type="text" name="imagenes"  max="">
            <input type="checkbox" name="finalizada" id="finalizada">
            <input type="submit" value="Insertar">
        </form>
    </body>
</html>