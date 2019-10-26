{include file="header.tpl"}
{include file="nav.tpl"}  
    <div class="row primerRow">
        <div class="col-4">
        </div>
        <div class="col-4 formmenor ">
        <form class="clean-clean-form dark"  action="iniciarSesion" method="post">
            <input class="form-control" type="input" name="user" id="user" aria-describedby="usuarioId" placeholder="usuario">
            <input class="form-control" type="password" id="password" name="password" placeholder="password">
             <button type="submit" class="btn btn-primary btn-block colorbotonsubmit formpost" value="Login">Login</button>
        </form>
        </div>
        <div class="col-4"> 
        </div>
    </div>   
{include file="footer.tpl"}
