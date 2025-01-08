<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<?php
  if (isset($_POST['country'], $_POST['material'], $_POST['tons'])) {
    require 'connectionPDO.php';
    $stmt = $link->prepare('INSERT INTO imports (country, material, tons) VALUES (:country, :material, :tons)');
    $stmt->bindParam(':country', $_POST['country']);
    $stmt->bindParam(':material', $_POST['material']);
    $stmt->bindParam(':tons', $_POST['tons'], PDO::PARAM_INT);
    $stmt->execute();
    echo "Material Creado.";  
  }
?>
  <form action="create.php" method="post">
    <input type="text" name="country" placeholder="país..." required>
    <input type="text" name="material" placeholder="material..." required>
    <input type="number" name="tons" placeholder="toneladas..." required>
    <input type="submit" value="crear">
  </form>
</body>
</html>