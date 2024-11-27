<?php include "./header.php"; ?>

<!-- Estructura principal del contenido de la página de error de login -->
<div class="row">
    <div class="col s12 m5 offset-m3">
        <div class="card">
            <div class="card-content">
                <div class="center-align">
                    <!-- Título del mensaje de error de login -->
                    <span class="card-title red-text text-darken-2">Error de Login</span>
                    <!-- Mensaje que indica al usuario que debe intentar nuevamente con los datos correctos -->
                    <p>Tus datos son incorrectos, vuelve a intentarlo.</p>
                    <!-- Botón para regresar al formulario de login -->
                    <a href="login.php" class="btn waves-effect waves-light green">Regresar</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include "./footer.php"; ?>