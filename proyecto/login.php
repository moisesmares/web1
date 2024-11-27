<?php include "./header.php"; ?>

<div class="row">
    <div class="col s12 m5 offset-m3">
        <div class="card">
            <div class="card-content">
                <span class="card-title center-align teal-text text-darken-2">Login de la compañia</span>
                <form method="POST" action="Controlador/loguear.php">
                    <div class="input-field">
                        <input type="text" name="nombre_conductor" id="no_cuenta" placeholder="Ingresa tu nombre" required />
                        <label for="nombre_conductor">Nombre de Conductor</label>
                    </div>
                    <div class="input-field">
                        <input type="password" name="contraseña" id="clave" placeholder="Contraseña" required />
                        <label for="contraseña">Contraseña</label>
                    </div>
                    <!-- Centro el botón aquí -->
                    <div class="center-align">
                        <button type="submit" class="btn-large waves-effect waves-light green lighten-1" style="margin-right: 10px;">Iniciar Sesión</button>
                            <p class ="from_link">¿Quieres unirte a nosotros? <a href="Registro.php">Ingresa aqui</a> </p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include "./footer.php"; ?>
