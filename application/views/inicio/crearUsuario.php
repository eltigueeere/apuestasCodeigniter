
<?php 
    $this->load->view('layout/general/headerHTML');
    $this->load->view('layout/general/navbarMovil'); 
?>
<div class="container center1">    
    <section>
        <fieldset class="scheduler-border">
            <legend class="scheduler-border heading-hr text-primary"> Crear una cuenta nueva. </legend>
                <div class="row">
                    <div class="col-sm-12 col-md-4">
                        <div class="wrap-input100 m-b-10 letrasNavEscritorioRed">
                            <?php echo muestra_mensaje_flash($this->session->flashdata('mensaje'));?>
                        </div>
                    </div>
                </div>
                <form action="nU/newUser/newUserA" method="post">
                    <div class="row">
                        <div class="col-sm-12 col-md-4" >
                            <label for="nombreUsuario" class="letrasNavEscritorioRed" placeholder="Nombre" >Nombre
                            </label><br>
                            <input type="text" class="form-control" name="nombreUsuario" id="nombreUsuario" placeholder="Nombre" required >
                        </div>
                        <div class="col-sm-12 col-md-4" >
                            <label for="apellidoUsuario" class="letrasNavEscritorioRed">Apellido
                            </label><br>
                            <input type="text" class="form-control" name="apellidoUsuario" id="apellidoUsuario" placeholder="Apellido" required>
                        </div>
                        <div class="col-sm-12 col-md-4" >
                            <label for="nombreUsuarioAka" class="letrasNavEscritorioRed">Nombre Usuario
                            </label><br>
                            <input type="text" class="form-control" name="nombreUsuarioAka" id="nombreUsuarioAka" placeholder="Nombre Usuario" required >
                        </div>
                    </div> <br>
                    <div class="row">
                        <div class="col-sm-12 col-md-4">
                            <label class="letrasNavEscritorioRed" for="contrasena1">Contraseña</label>
                            <input class="form-control" type="password" name="contrasena1" id="contrasena1" placeholder="Contraseña" minlength="6" maxlength="10" required >
                        </div>
                        <div class="col-sm-12 col-md-4">
                            <label class="letrasNavEscritorioRed" for="contrasena2">Confirma Contraseña</label>
                            <input class="form-control" type="password" name="contrasena2" id="contrasena2" placeholder="Confirma Contraseña" minlength="6" maxlength="10" required >
                        </div>
                        <div class="col-sm-12 col-md-4">
                            <label class="letrasNavEscritorioRed" for="paso1/2">Paso1/2</label> <br>
                            <button  class="btn btn-default btn-primary">Crear Usuario</button>
                        </div>
                    </div> 
                </form>
        </fieldset>
    </section>
</div>
<?php $this->load->view('layout/general/footer') ?>