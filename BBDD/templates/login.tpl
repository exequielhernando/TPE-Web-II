{include file="header.tpl"}
{include file="nav.tpl"}  
    <div class="row primerRow">
        <div class="col-4">
        </div>
        <div class="col-4 formmenor ">
        <form class="clean-clean-form dark"  action="iniciarSesion" method="post">
            <input class="form-control" type="text" name="user" placeholder="Usuario">
            <input class="form-control" type="password" name="pass" placeholder="Password">
            <input class="btn btn-primary btn-block colorbotonsubmit formpost" type="submit" value="Login">
        </form>
        </div>
        <div class="col-4"> 
        </div>
    </div>   
{include file="footer.tpl"}