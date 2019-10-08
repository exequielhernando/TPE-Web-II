{include file="header.tpl"}
{include file="nav.tpl"}
         <div class="row">
                <div class="col-4"> 
                        </div>
                <div class="col-4 formmayor">    
                <form action="index.php" method="POST">
                         <div class="form-group">
                                <label for="usuario">Usuario:</label>
                                 <input type="number" class="form-control" id="usuario">
                        </div>

                        <div class="form-group">
                                <label for="password">Password:</label>
                                <input type="password" class="form-control" id="password">
                        </div>
                        <div class="form-group">
                                 <label for="nombre">Nombre:</label>
                                <input type="text" class="form-control" id="nombre">
                         </div>
                <div class="form-group">
                                <label for="apellido">Apellido:</label>
                                <input type="text" class="form-control" id="apellido">
                </div>
                <div class="form-group">
                         <label for="email">Email:</label>
                         <input type="email" class="form-control" id="email">
                </div>
                <div><button type="submit" class="btn btn-danger colorbotonsubmit">Submit</button></div>
                </form>
                </div>
                <div class="col-4"> 
                </div>
{include file="footer.tpl"} 