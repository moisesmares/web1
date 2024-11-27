<?php
include "./header.php";
?>

  <!-- Sección principal con una imagen de fondo (parallax) y un título con un botón de inicio de sesión -->
  <div id="index-banner" class="parallax-container">
    <div class="section no-pad-bot">
      <div class="container">
        <h1 class="header center yellow-text text-lighten-2 text-">Driver´s Company</h1>
        <div class="row center">
          <h5 class="header col s12 light text-white text-lighten-2">Seguridad y Confianza a donde sea que vayas</h5>
        </div>
        <div class="row center">
          <!-- Botón que redirige al login -->
          <a href="login.php" id="login-button" class="btn-large waves-effect waves-light green lighten-1">Iniciar Sesión</a>
        </div>
      </div>
    </div>
    <!-- Imagen de fondo con efecto parallax -->
    <div class="parallax"><img src="./Media/img/carretera.jpg" alt="Fondo de El banner principal"></div>
  </div>

  <!-- Sección de contenido con tres bloques de servicios -->
  <div class="container">
    <div class="section">
      <div class="row">
        <!-- Primer bloque de servicio: Seguridad -->
        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="black-text text-darken-4"><i class="material-icons">shield_with_heart</i></h2>
            <h5 class="black-text text-darken-2">Seguridad</h5>
            <p class="light">Contamos con conductores cerficados para que llegues a tu destino con completa seguridad, confianza y comodidad.</p>
          </div>
        </div>
  
        <!-- Segundo bloque de servicio: Gestión de Propiedades -->
        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="black-text text-darken-4"><i class="material-icons">airport_shuttle</i></h2>
            <h5 class="black-text text-darken-2">Calidad en Unidades</h5>
            <p class="light">Viaja en Unidades lujosas, comodas y de ultimo modelo. Las mejores marcas que hay en el mercado.</p>
          </div>
        </div>
  
        <!-- Tercer bloque de servicio: Notificaciones -->
        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="black-text text-darken-4"><i class="material-icons">event</i></h2>
            <h5 class="black-text text-darken-2">Flexibilidad</h5>
            <p class="light">Realiza tu registro en la fecha que quieras y contaras con el mejor servicio.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php
  include "./footer.php"
?>