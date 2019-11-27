"use strict"

// define la app Vue
let app = new Vue({
    el: "#template-vue-comments",
    data: {
        subtitle: "Comments",
        loading: false,
        comments: [],
    }
});

window.onload = function(){
    GetCommentsProduct();

}

document.getElementById('btn-refresh').addEventListener("click", GetCommentsProduct);

let btnAddComment = document.getElementById("addComment");
btnAddComment.addEventListener("click", addComment);
/**
 * Obtiene la lista de tareas de la API y las renderiza con Vue.
 */
function GetCommentsProduct() {
    app.loading = true;
    let id_product = document.getElementById("id_product").value;
    
    fetch(`api/comments/${id_product}`)
    .then(response => response.json())
    .then(comments => {
            
        app.comments = comments; // similar a $this->smarty->assign("tasks", $tasks)
        app.loading = false;

    })
    .catch(error => console.log(error));
}

/**
 * Inserta una tarea usando la API REST.
 */
function addComment(event) {
    event.preventDefault();
    let actualComment = document.querySelector("#textComment").value;
    let actualDate = new Date();
    let selecScore=0;
    let id_product = document.getElementById("id_product").value;
        let selecStar = document.getElementsByName("estrellas");
        // Recorremos todos los valores del radio button para encontrar el
        // seleccionado
        for(var i=0;i<selecStar.length;i++)
        {
            if(selecStar[i].checked)
            selecScore=selecStar[i].value;
        }
    let data = {
        comment: actualComment,        
        score: selecScore,
        date:  actualDate,
        id_product :id_product
    }
    console.log(data);


    fetch(`api/comments/${id_product}`, {
        method: 'POST',
        headers: {'Content-Type': 'application/json'},       
        body: JSON.stringify(data) 
     })
     .then(response => {
        console.log(response);

        GetCommentsProduct();
        document.getElementById("form_comment").reset();
     })
     .catch(error => console.log(error));
}
function deleteComments(event) {
    event.preventDefault();
    

}

// obtiene las tareas al inicio
GetCommentsProduct();
