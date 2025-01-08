<?php
if ( isset($_POST['name'], $_POST['seniority'], $_POST['birthdate']) ) {
  $names = $_POST['name'];
  $seniorities = $_POST['seniority'];
  $birthdates = $_POST['birthdate'];
  // Como todos los arrays tienen el mismo tamaño, con saber el número de nombres, se sabe el número de personas.
  $num_persons = count($names);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <table>
    <thead>
      <tr>
        <th>Nombre</th>
        <th>Edad</th>
      </tr>
    </thead>
    <tbody>
      <?php for ($i=0; $i < $num_persons; $i++) {  
        // Se añade el estilo si es mayor que 5 años de antiguedad, en otro caso, no se añade nada. 
        $color = ($seniorities[$i] > 5) ? 'style="background-color: lightblue"' :'';
        $birthdate = new DateTime($birthdates[$i]);
        $now = new DateTime('now');
        $diff = $now->diff($birthdate);
        $age = $diff->y;
        ?>
        <tr <?=$color?>>
          <td><?=$names[$i]?></td>
          <td><?=$age?></td>
        </tr>
      <?php } ?>
    </tbody>
  </table>
</body>
</html>
<?php
}
?>