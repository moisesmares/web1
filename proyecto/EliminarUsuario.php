<?php include "./header.php"; ?>

<div class="container" style="max-width: 400px; margin-top: 50px;">
    <h4 class="center-align red-text text-darken-2">Eliminar Usuario</h4>
    
    <form method="POST" action="./Controlador/deleteUsuario.php" style="margin-top: 30px;">
        <div class="input-field">
            <label for="no_cuenta">Nombre de Conductor</label>
            <input type="text" name="no_cuenta" placeholder="Ingresa el nombre de Conductor" required>
        </div>
        
        <div class="center-align" style="margin-top: 20px;">
            <button type="submit" class="btn waves-effect waves-light red lighten-1">Eliminar Usuario</button>
        </div>
    </form>

    <!-- Enlace adicional -->
    <div class="center-align" style="margin-top: 20px;">
        <a href="Principal.php" class="btn waves-effect waves-light teal lighten-1">Regresar</a>
    </div>
</div>

<?php include "./footer.php"; ?>
