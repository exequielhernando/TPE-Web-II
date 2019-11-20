{literal}
<section id="template-vue-products">

    <h3> {{ subtitle }} </h3>

    <table class="table table-hover table-bordered tabla">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Category</th>
                <th scope="col">Details</th>
            </tr> 
        </thead>
        <tbody class="contenedor-tabla nolink" >
            <tr v-for="product in products">
              <td scope="col">{{product.name}}</th>
              <td scope="col">{{product.nameCat}}</th>
              <td scope="col"> <a href="product/{{product[id_product]}}">Item</td>
            </tr>
      </tbody>
    </table>
   

</section>
{/literal}
