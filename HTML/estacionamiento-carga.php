<?php

 ?>

<!DOCTYPE html>
<html>
  <?php require_once('head.php'); ?>
<body>

  <div class="container">

    <?php require_once('header.php'); ?>

    <div class="bodies-main-content">

      <hr>

      <h1>Cargar Estacionamiento - Información General</h1>

      <section class="cargaEstacionamiento-paso1">

        <?php
        // if ($camposVacios)
        //   echo "<p style='color:red'>Completar los campos vacíos</p>";
        // if (isset($_COOKIE['error']) && !empty($_COOKIE['error']))
        //   echo "<p style='color:red'>" . $_COOKIE['error'] . "</p>";
        ?>

        <div class="form-generico">

          <form action="estacionamiento-carga.php" method="post" enctype="multipart/form-data" class="form-cargaEstacionamiento">

            <label for="" class="carga-label-titulo">¿Donde está ubicado tu espacio?</label>
            <input type="text" placeholder="Domicilio. Ej: Av. Eduardo Madero 399" name="direccion" class="" style="<?php echo $emptyFields['direccion']; ?>" value="<?php echo (isset($_COOKIE['direccion']) && !empty($_COOKIE['direccion'])) ? $_COOKIE['direccion'] : ""; ?>">
            <input type="text" placeholder="Número de departamento (opcional)" name="dpto" class="" value="<?php echo (isset($_COOKIE['dpto']) && !empty($_COOKIE['dpto'])) ? $_COOKIE['dpto'] : ""; ?>">
            <?php
             $s = "selected";
             $tipo = isset( $_COOKIE['pais']) ? $_COOKIE['pais'] : '';
            ?>
            <select name="pais" style="<?php echo $emptyFields['pais']; ?>">
              <option value="">País</option>
              <option value="Argentina" <?php echo $tipo=='Argentina'?$s:''; ?>>Argentina</option>
            </select>
            <?php
             $s = "selected";
             $tipo = isset( $_COOKIE['provincia']) ? $_COOKIE['provincia'] : '';
            ?>
            <select name="provincia" style="<?php echo $emptyFields['provincia']; ?>">
              <option value="">Provincia</option>
              <option value="BuenosAires" <?php echo $tipo=='BuenosAires'?$s:''; ?>>Buenos Aires</option>
              <option value="CABA" <?php echo $tipo=='CABA'?$s:''; ?>>Ciudad Autónoma de Buenos Aires</option>
            </select>
            <?php
             $s = "selected";
             $tipo = isset( $_COOKIE['ciudad']) ? $_COOKIE['ciudad'] : '';
            ?>
            <select name="ciudad" style="<?php echo $emptyFields['ciudad']; ?>">
              <option value="">Ciudad</option>
              <option value="ciudad" <?php echo $tipo=='ciudad'?$s:''; ?>>ciudad</option>
            </select>
            <input type="text" placeholder="Código Postal" name="codigoPostal" class="" style="<?php echo $emptyFields['codigoPostal']; ?>" value="<?php echo (isset($_COOKIE['codigoPostal']) && !empty($_COOKIE['codigoPostal'])) ? $_COOKIE['codigoPostal'] : ""; ?>">

            <?php
             $s = "selected";
             $tipo = isset( $_COOKIE['tipoCochera']) ? $_COOKIE['tipoCochera'] : '';
            ?>

            <label for="" class="carga-label-titulo">¿Qué tipo de espacio es?</label>
            <select name="tipoCochera" style="<?php echo $emptyFields['tipoCochera']; ?>">
              <option value="">Elige una opción</option>
              <option value="cocheraPrivada" <?php echo $tipo=='cocheraPrivada'?$s:''; ?>>Cochera privada</option>
              <option value="playaEstacionamiento" <?php echo $tipo=='playaEstacionamiento'?$s:''; ?>>Playa de estacionamiento</option>
            </select>

            <label for="" class="carga-label-titulo">¿Cuántos vehículos se permiten?</label>
            <label for="" class="carga-label-tipovehiculo">Autos</label> <input type="number" placeholder="" name="cantAutos" class="carga-input-tipovehiculo" min="0" max="1" value="<?php echo (isset($_COOKIE['cantAutos']) && !empty($_COOKIE['cantAutos'])) ? $_COOKIE['cantAutos'] : 0; ?>">
            <label for="" class="carga-label-tipovehiculo">Motos</label> <input type="number" placeholder="" name="cantMotos" class="carga-input-tipovehiculo" min="0" max="4" value="<?php echo (isset($_COOKIE['cantMotos']) && !empty($_COOKIE['cantMotos'])) ? $_COOKIE['cantMotos'] : 0; ?>">
            <label for="" class="carga-label-tipovehiculo">Bicicletas</label> <input type="number" placeholder="" name="cantBicicletas" class="carga-input-tipovehiculo" min="0" max="4" value="<?php echo (isset($_COOKIE['cantBicicletas']) && !empty($_COOKIE['cantBicicletas'])) ? $_COOKIE['cantBicicletas'] : 0; ?>">

            <label for="" class="carga-label-titulo">¿Tiene alguno de los siguientes servicios especiales?</label>
            <input type="checkbox" name="serviciosEspeciales" value="aptoDiscapacitados" class="carga-checkbox-especiales" id="aptoDiscapacitados"><label for="aptoDiscapacitados" class="carga-label-especiales">Apto para discapacitados</label>
            <input type="checkbox" name="serviciosEspeciales" value="cargaElectricos" class="carga-checkbox-especiales" id="cargaElectricos"><label for="cargaElectricos" class="carga-label-especiales">Carga para autos eléctricos</label>

            <label for="" class="carga-label-titulo">Información extra (visible por todos) -opcional-</label>
            <textarea name="name" rows="5" cols="80"></textarea>

            <label for="" class="carga-label-titulo">Información extra (únicamente visible por quienes alquilen tu espacio) -opcional-</label>
            <textarea name="name" rows="5" cols="80"></textarea>

            <label for="" class="carga-label-titulo">Fotos de tu espacio</label>
            <input type="file" name="profilePic" accept="image/*" style="<?php echo $emptyFields['profilePic']; ?>" multiple>

            <input type="submit" name="boton-submit" value="SIGUIENTE">
          </form>

        </div>

      </section>
    </div>
    <?php require_once('footer.php'); ?>
  </div>
  <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script src="js/menu.js"></script>
</body>
</html>
