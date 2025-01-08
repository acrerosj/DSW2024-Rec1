<?php
if (!isset($_GET['persons'])) {
  die('No se encuentra la variable persons');
} else {
  $persons = $_GET['persons'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="pag3.php" method="post">
      <?php for ($i=1; $i <= $persons ; $i++) { ?>
        <p>Datos persona <?=$i?>: 
          Nombre: <input type="text" name="name[]"> |
          Antigüedad: <input type="number" name="seniority[]"> |
          Fecha Nacimiento: <input type="date" name="birthdate[]">
        </p>
      <?php } ?>
      <input type="submit" value="Enviar">
  </form>  
</body>
</html>
