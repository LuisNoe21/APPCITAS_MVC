<div class="barra">
    <p>Hola: <?php echo $nombre ?? ''; ?></p>   <!-- muestra el nombre de usuario-->
    <div class="div-boton">
  <a class="boton-cerrar" href="/logout">Cerrar Sesión</a> 
  </div>  <!-- cierra la sesion del sistema -->
</div>


<?php if(isset($_SESSION['admin'])) { ?>  <!-- if para verificar si es admin o no-->
    <div class="barra-servicios">
        <a class="boton" href="/admin">Ver Citas</a>
        <a class="boton" href="/servicios">Ver Servicios</a>
        <a class="boton" href="/servicios/crear">Nuevo Servicio</a>
    </div>
<?php } ?>