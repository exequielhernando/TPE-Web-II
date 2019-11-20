{literal}
<section id="template-vue-products">

    <h3> {{ subtitle }} </h3>

    <table class="table table-hover table-bordered tabla">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Name</th>
                <th scope="col"><a class="link-category" href="{$BASE_URL}productsbyorder" >Category</a></th>
                <th scope="col">Details</th>
            </tr> 
        </thead>
        <tbody class="contenedor-tabla nolink" >
            <tr v-for="product in products">
              <td scope="col">{{product.name}}</th>
              <td scope="col">{{product.nameCat}}</th>
              <td scope="col"><a data-id="{{product.id}}">Item</a></td>
            </tr>
      </tbody>
    </table>
   

</section>
{/literal}
