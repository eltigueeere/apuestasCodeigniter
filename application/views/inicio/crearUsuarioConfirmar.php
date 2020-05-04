
<?php 
    $this->load->view('layout/general/headerHTML');
    $this->load->view('layout/general/navbarMovil'); 
?>
<br>
<div class="container">    
    <section>
        <fieldset class="scheduler-border">
            <legend class="scheduler-border heading-hr text-primary"> Crear una cuenta nueva. </legend>
            <div class="row">
                <div class="col-sm-12 col-md-4" >
                    <label for="nombreUsuario" class="letrasNavEscritorioRed" placeholder="Nombre" >Nombre
                    </label><br>
                    <input type="text" class="form-control" name="nombreUsuario" id="nombreUsuario" placeholder="Nombre">
                </div>
                <div class="col-sm-12 col-md-4" >
                    <label for="apellidoUsuario" class="letrasNavEscritorioRed">Apellido
                    </label><br>
                    <input type="text" class="form-control" name="apellidoUsuario" id="apellidoUsuario" placeholder="Apellido" >
                </div>
                <div class="col-sm-12 col-md-4" >
                    <label for="nombreUsuario" class="letrasNavEscritorioRed">Nombre Usuario
                    </label><br>
                    <input type="text" class="form-control" name="nombreUsuario" id="nombreUsuario" placeholder="Nombre Usuario" >
                </div>
            </div> <br>
            <div class="row">
                <div class="col-sm-12 col-md-4">
                    <label class="letrasNavEscritorioRed" for="numeroTelefono">Número Telefono</label>
                    <input class="form-control" type="text" name="numeroTelefono" id="numeroTelefono" placeholder="Número Telefono" >
                </div>
                <div class="col-sm-12 col-md-4">
                    <label class="letrasNavEscritorioRed" for="contraseña1">Contraseña</label>
                    <input class="form-control" type="password" name="contraseña1" id="contraseña1" placeholder="Contraseña">
                </div>
                <div class="col-sm-12 col-md-4">
                    <label class="letrasNavEscritorioRed" for="contraseña2">Confirma Contraseña</label>
                    <input class="form-control" type="password" name="contraseña2" id="contraseña2" placeholder="Confirma Contraseña" >
                </div>
            </div> <br>
            <div class="row">
                <div class="col-sm-12 col-md-12">
                    <button class="btn btn-primary btn-lg" type="submit">Crear Usuario</button>
                </div>
            </div>
        </fieldset>
    </section>
</div>
<?php $this->load->view('layout/general/footer') ?>