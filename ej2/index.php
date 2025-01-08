<?php require 'connectionPDO.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Importaciones</h1>
  <table>
    <thead>
      <tr>
        <th>ID</th>
        <th>País</th>
        <th>Material</th>
        <th>Toneladas</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
<?php
  $stmt = $link->prepare('SELECT * FROM imports');
  $stmt->execute();
  $materials = $stmt->fetchAll(PDO::FETCH_OBJ);
  foreach($materials as $material) {
?>
      <tr>
        <td><?=$material->id ?></td>
        <td><?=$material->country ?></td>
        <td><?=$material->material ?></td>
        <td><?=$material->tons ?></td>
        <td>
          <a href="delete.php?id=<?=$material->id?>"><button>Eliminar</button></a>
        </td>
      </tr>
<?php } ?>      
    </tbody>
  </table>
</body>
</html>