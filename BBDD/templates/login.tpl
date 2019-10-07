{include file="header.tpl"}
        <div class="container-fluids all">
         <nav class="navbar navbar-light navbar-expand-md sticky-top navigation-clean-button" style="height:80px;background-color:#37434d;color:#ffffff;">
                <div class="container-fluid"><a class="navbar-brand" href="#"><i class="fa fa-globe"></i> MayoristaExpress</a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                         <div class="collapse navbar-collapse" id="navcol-1">
                                <ul class="nav navbar-nav ml-auto">
                                        <li class="nav-item" role="presentation"><a class="nav-link active" href="#" style="color:#ffffff;"><i class="fa fa-home"></i> Home</a></li>
                                        <li class="nav-item" role="presentation"><a class="nav-link active" href="#" style="color:#ffffff;"><i class="fa fa-wpexplorer"></i> Explore</a></li>
                                        <li class="nav-item" role="presentation"><a class="nav-link active" href="#" style="color:#ffffff;"><i class="fa fa-star-o"></i> Features</a></li>
                                        <li class="nav-item" role="presentation"><a class="nav-link active" href="#" style="color:#ffffff;"><i class="fa fa-user-circle-o"></i> Products</a></li>
                                        <li class="nav-item" role="presentation"><a class="nav-link active" href="#" style="color:#ffffff;"><i class="fa fa-sign-in"></i> Sign In</a></li>
                                </ul>
                        </div>
                 </div>
        </nav>   
         <div class="row primerRow">
            <div class="col-4"> 
                                </div>
                                <div class="col-4 formmenor">
        <form action="iniciarSesion" method="post">
            <input class="form-control" type="text" name="user" placeholder="Usuario">
            <input class="form-control" type="password" name="pass" placeholder="Password">
            <input class="btn btn-primary colorbotonsubmit formpost" type="submit" value="Login">
        </form>
        </div>
         <div class="col-4"> 
            </div>
      </div> 


// de aca para abajo falta hacer que ande y pasarlo a otro template que sea para modificar la tabla si es administrador sino solo verla.
// tambien hacer el registro en otra aparte

        <div class="row">
                <div class="col-4"> 
                        </div>
                <div class="col-4 formmayor">    
                <form action="index.php" method="POST">
                         <div class="form-group">
                                <label for="id_categoria">id categoria:</label>
                                 <input type="number" class="form-control" id="id_categoria">
                        </div>

                        <div class="form-group">
                                <label for="id_producto">id producto:</label>
                                <input type="text" class="form-control" id="id_producto">
                        </div>
                        <div class="form-group">
                                 <label for="descripcion">descripcion:</label>
                                <input type="text" class="form-control" id="descripcion">
                         </div>
                <div class="form-group">
                                <label for="nombre">nombre</label>
                                <input type="text" class="form-control" id="nombre">
                </div>
                <div class="form-group">
                         <label for="precio">precio:</label>
                         <input type="number" class="form-control" id="precio">
                </div>
                <div class="form-group">
                         <label for="stock">stock:</label>
                         <input type="number" class="form-control" id="stock">
                </div>
                <div><button type="submit" class="btn btn-danger colorbotonsubmit">Submit</button></div>
                </form>
                </div>
                <div class="col-4"> 
                        </div>
        <div class="row">
            <div class="col-12">
                
                <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>Categoria ID</th>
                            <th>Producto ID</th>
                            <th>Descripcion</th>
                            <th>Nombre</th>
                            <th>Precio</th>
                            <th>Stock</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                              <form action="administrador.php" method="POST">
                            <td><input class="input-categoria" type="number" name="categoria"></td>
                            <td><input class="input-producto" type="number" name="producto"></td>
                            <td><input class="input-descripcion" type="text" name="descripcion"></td>
                            <td><input class="input-nombre" type="text" name="nombre"></td>
                            <td><input class="input-precio" type="number" name="precio"></td>
                            <td><input class="input-stock" type="number" name="stock"></td>

                        </tr>
                        <tr></tr>
                    </tbody>
                </table>
                <div><button type="submit" class="btn btn-danger colorbotonsubmit">Submit</button></div>
            </div>       
        </div>
               
        <footer>
                        <div class="row">
                            <div class="col-sm-6 col-md-4 footer-navigation">
                                <h3><a href="#">Company<span>logo </span></a></h3>
                                <p class="links"><a href="#"></a></p>
                                <p class="company-name">Mayoclothes © 2019 </p>
                            </div>
                            <div class="col-sm-6 col-md-4 footer-contacts">
                                <div><span class="fa fa-map-marker footer-contacts-icon"></span>
                                    <p><span class="new-line-span">Av. del Valle 23</span></p>
                                </div>
                                <div><i class="fa fa-phone footer-contacts-icon"></i>
                                    <p class="footer-center-info email text-left"> +54 2494 774499</p>
                                </div>
                                <div><i class="fa fa-envelope footer-contacts-icon"></i>
                                    <p><a href="#" target="_blank">support@mayoclothes.com</a></p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-md-4 footer-about">
                                <h4>About the company</h4>
                                <p> Lorem ipsum dolor sit amet, consectateur adispicing elit. Fusce euismod convallis velit, eu auctor lacus vehicula sit amet. </p>
                            </div>
                        </div>
        </footer>
        </div>
</div>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>