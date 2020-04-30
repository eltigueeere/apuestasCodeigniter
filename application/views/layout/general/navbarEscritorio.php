
<header>
  <div class="container b-header__box b-relative">
<nav class="navbar navbar-default" role="navigation">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
    </div>
    <div class="navbar-collapse collapse">
        <ul class="nav navbar-nav navbar-left">
            <li><a href="<?php echo base_url(); ?>">F2F</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-center">
            <li><a href="<?php echo base_url('Home/nosotros'); ?>" class="">Nosotros</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li>
            <form>
                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Usuario">  
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Contraseña">
            </form>
            </li>
            <li><br><input class="btn btn-lg btn-primary lalo" type="submit" value="Entrar"></li>
            <li><br><button type="button" class="btn btn-lg btn-success lalo">Crear Cuenta</button></li>
        </ul>
    </div>
</nav>
</div>
</header>