{literal}
<section id="template-vue-comments">
    <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <button id="btn-refresh" type="button" class="btn btn-primary btn-sm">Refresh</button>
            </div>

            <div v-if="loading" class="card-body">
                Cargando...
            </div>

            <table class="table table-hover table-bordered tabla">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Comments</th>
                        <th scope="col">Score</th>
                        <th scope="col">Date</th>
                    </tr> 
                </thead>
                <tbody v-if="!loading"  class="contenedor-tabla nolink" >
                    <tr v-for="comment in comments" v-bind:href="'comment/' + comment.id_comment">
                    <td scope="col">{{comment.comment}}</th>
                    <td scope="col">{{comment.score}}</th>
                    <td scope="col">{{comment.date}}</td>

                    </tr>
            </tbody>
            </table>
            
        </div>


    

   

</section>
{/literal}
