"use strict"

// event listeners
document.querySelector("#form-products").addEventListener('submit', addProducts);

// define la app Vue
let app = new Vue({
    el: "#template-vue-products",
    data: {
        subtitle: "Estas tareas se renderizan desde el cliente usando Vue.js",
        products: [],
        categories:[]
        // auth: true
    }
});

/**
 * Obtiene la lista de tareas de la API y las renderiza con Vue.
 */
function getProducts() {
    fetch("api/products")
    .then(response => response.json())
    .then(products => {
        console.log(products);
        
        app.products = products; // similar a $this->smarty->assign("tasks", $tasks)
    })
    .catch(error => console.log(error));
}
function getCategories() {
    fetch("api/categories")
    .then(response => response.json())
    .then(categories => {
        console.log(categories);
        
        app.categories = categories; // similar a $this->smarty->assign("tasks", $tasks)
    })
    .catch(error => console.log(error));
}

/**
 * Inserta una tarea usando la API REST.
 */
function addProducts(e) {
    e.preventDefault();
    
    let data = {
        name:  document.querySelector("input[name=name]").value,        
        description:  document.querySelector("input[name=description]").value,
        price:  document.querySelector("input[name=price]").value,
        stock:  document.querySelector("input[name=stock]").value,
        image:  document.querySelector("input[name=image]").value
        // id_category: document.querySelector("input[name=id_category]").value
    }
    console.log(data);


    fetch('api/products', {
        method: 'POST',
        headers: {'Content-Type': 'application/json'},       
        body: JSON.stringify(data) 
     })
     .then(response => {
        getProducts();
     })
     .catch(error => console.log(error));
}

// obtiene las tareas al iniciio
getProducts();
getCategories();