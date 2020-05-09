
<?php 
    $this->load->view('layout/general/headerHTML');
    $this->load->view('layout/general/navbarMovil'); 
?>
<br>
<div class="container center1">    
<section>
    <fieldset class="scheduler-border">
        <legend class="scheduler-border heading-hr text-primary"> Crear una cuenta nueva. </legend>
        <form action="<?php echo base_url('nU/newUser/newUserZ'); ?>" method="post">
            <div class="row">
                <div class="col-sm-12 col-md-12" >
                    <h3 class="letrasNavEscritorioRed">Ultimo paso <?php echo " ".$usuarioF1[2]." " ?> </h3>
                    <input type="hidden" name="nombreUsuario" value="<?php echo " ".$usuarioF1[2]." " ?>" >
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-sm-6 col-md-3" >
                    <label for="numeroTelefono" class="letrasNavEscritorioRed" >Número de Telefono
                    </label><br>
                    <input type="text" class="form-control" name="numeroTelefono" id="numeroTelefono" placeholder="Número de Telefono">
                </div>
                <div class="col-sm-6 col-md-6" >
                    <label for="correo" class="letrasNavEscritorioRed" >Correo
                    </label><br>
                    <input type="text" class="form-control" name="correo" id="correo" placeholder="correo@dominio.com">
                </div>
                <div class="col-sm-6 col-md-3" >
                    <label for="genero" class="letrasNavEscritorioRed" >Genero
                    </label><br>
                    <select class="form-control" name="genero" name="genero" id="genero">
                        <option selected>Select</option>
                        <option vlaue="1">Hombre</option>
                        <option vlaue="2">Mujer</option>
                        <option vlaue="3">Otro</option>
                    </select>
                </div>
            </div> <br>
            <div class="row">
                <div class="col-sm-6 col-md-2" >
                    <label for="dia" class="letrasNavEscritorioRed" >Dia de nacimiento
                    </label><br>
                    <select class="form-control" name="dia" id="dia">
                        <option selected>Dia</option>
                        <option vlaue="1">1</option>
                        <option vlaue="2">2</option>
                        <option vlaue="3">3</option>
                    </select>
                </div>
                <div class="col-sm-6 col-md-2" >
                    <label for="mes" class="letrasNavEscritorioRed" >Mes de nacimiento
                    </label><br>
                    <select class="form-control" name="mes" id="mes">
                        <option selected>Mes</option>
                        <option vlaue="1">1</option>
                        <option vlaue="2">2</option>
                        <option vlaue="3">3</option>
                    </select>
                </div>
                <div class="col-sm-6 col-md-2" >
                    <label for="ano" class="letrasNavEscritorioRed" >Año de nacimiento
                    </label><br>
                    <select class="form-control" name="year" id="year">
                        <option selected>Año</option>
                        <option vlaue="1">1900</option>
                        <option vlaue="2">1902</option>
                        <option vlaue="3">1903</option>
                    </select>
                </div>
                <div class="col-sm-12 col-md-6">
                    <label for="crearUsuario" class="letrasNavEscritorioRed" >Guardar usuario</label> <br>
                    <button class="btn btn-primary btn-lg" type="submit">Confirmar usuario</button>
                </div>
            </div> <br>
        </form>
    </fieldset>
</section>
</div>
<?php $this->load->view('layout/general/footer') ?>

