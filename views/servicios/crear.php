
<?php
    include_once __DIR__ . '/../templates/barra.php';
    include_once __DIR__ . '/../templates/alertas.php';
?>

<h1 class="nombre-pagina-crear-servicios">Nuevo Servicio</h1>
<p class="descripcion-pagina-crear-servicios">Llena todos los campos para añadir un nuevo servicio</p>


<form action="/servicios/crear" method="POST" class="formulario">
    <?php include_once __DIR__ . '/formulario.php'; ?>
    <input type="submit" class="boton-act" value="Guardar Servicio">
</form>