{literal}
<section id="template-vue-comments">

    <h3> {{ subtitle }} </h3>

    <table class="table table-hover table-bordered tabla">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Comments</th>
                <th scope="col">Score</th>
                <th scope="col">Date</th>
            </tr> 
        </thead>
        <tbody class="contenedor-tabla nolink" >
            <tr v-for="comment in comments">
              <td scope="col">{{comment.comment}}</th>
              <td scope="col">{{comment.score}}</th>
              <td scope="col">{{comment.date}}</td>
            </tr>
      </tbody>
    </table>
   

</section>
{/literal}
