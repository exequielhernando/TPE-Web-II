"use strict"

// event listeners
document.querySelector("#form-comments").addEventListener('submit', addComment);

// define la app Vue
let app = new Vue({
    el: "#template-vue-comments",
    data: {
        subtitle: "Estas tareas se renderizan desde el cliente usando Vue.js",
        comments: [],
        auth: true
    }
});

/**
 * Obtiene la lista de tareas de la API y las renderiza con Vue.
 */
function getComments() {
    fetch("api/comments")
    .then(response => response.json())
    .then(comments => {
        console.log(comments);
        
        app.comments = comments; // similar a $this->smarty->assign("tasks", $tasks)
    })
    .catch(error => console.log(error));
}

/**
 * Inserta una tarea usando la API REST.
 */
function addComment(event) {
    event.preventDefault();
    
    let data = {
        comment:  document.querySelector("input[name=comment]").value,        
        score:  document.querySelector("input[name=score]").value,
        date:  document.querySelector("input[name=date]").value,
        // id_category: document.querySelector("input[name=id_category]").value
    }
    console.log(data);


    fetch('api/comments', {
        method: 'POST',
        headers: {'Content-Type': 'application/json'},       
        body: JSON.stringify(data) 
     })
     .then(response => {
        getComments();
     })
     .catch(error => console.log(error));
}

// obtiene las tareas al iniciio
getComments();
