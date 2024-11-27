<?php include "./header.php"; ?>

<div class="container" style="max-width: 600px; margin-top: 20px;">
    <h4 class="center-align blue-text text-darken-2">Registro de Conductor</h4>
    
    <form action="./Controlador/enviarRegistro.php" method="post" style="margin-top: 20px;">
        <div class="input-field">
            <label for="nombre_conductor">Nombre del Conductor:</label>
            <input type="text" name="nombre_conductor" required maxlength="100" placeholder="Ingresa tu Nombre">
        </div>
        
        <div class="input-field">
            <label for="edad">Edad:</label>
            <input type="text" name="Edad" required maxlength="100" placeholder="Ingresa tu Edad">
        </div>
        
        <div class="input-field">
            <label for="email">Correo:</label>
            <input type="email" name="email" required maxlength="100" placeholder="Ingresa tu Correo">
        </div>
        
        <div class="input-field">
            <label for="telefono">Telefono:</label>
            <input type="text" name="telefono" required maxlength="100" placeholder="Ingresa tu Telefono">
        </div>


        <div class="input-field">
            <label for="marca_camioneta">Marca de la Camioneta:</label>
            <input type="text" name="marca_camioneta" required maxlength="100" placeholder="Ingresa la Marca de la Camioneta">
        </div>
        
        <div class="input-field">
            <label for="contraseña">Contraseña:</label>
            <input type="text" name="contraseña" required maxlength="100" placeholder="Ingresa tu Telefono">
        </div>

        <div class="center-align" style="margin-top: 20px;">
            <button type="submit" name="submit" class="btn waves-effect waves-light yellow lighten-1">Enviar Registro</button>
        </div>
    </form>

         <!-- Enlace adicional -->
    <div class="center-align" style="margin-top: 20px;">
        <a href="Principal.php" class="btn waves-effect waves-light teal lighten-1">Regresar</a>
    </div>
</div>


<?php include "./footer.php"; ?>
