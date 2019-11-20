{include file="header.tpl"}
{include file="nav.tpl"}
                
    <div class="row">
        <div class="col-12">
        {include file="vue/products.tpl"}
            <form id="form-products" action="insertar" method="post">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="name" aria-describedby="name" placeholder="name">
                <label for="description">Description:</label>
                <input type="text" class="form-control" id="description" name="description" aria-describedby="description" placeholder="description">
                <label for="price">Price:</label>
                <input type="number" class="form-control" id="price" name="price" aria-describedby="price" placeholder="price">
                <label for="stock">Stock:</label>
                <input type="number" class="form-control" id="stock" name="stock" aria-describedby="stock" placeholder="stock">
                <label for="image">Image:</label>
                <input type="input" class="form-control" id="image" name="image" aria-describedby="image" placeholder="image">
                <div class="select">
                    <label for="categories">Categoria:</label>
                    <select v-model="selected">
                        <option v-for="category in categories" v-bind:value="category.name">
                            {{ category.name }}
                        </option>
                    </select>                
                </div>
                <button type="submit" class="btn btn-primary btn-block colorbotonsubmit formpost">Add</button>
            </form>
        </div>
    </div>
{include file="footer.tpl"} 
