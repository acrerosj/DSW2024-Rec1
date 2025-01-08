<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Enlaces</h1>
  <?php for ($i=1; $i <= 30 ; $i++) { ?>
    <p><a href="pag2.php?persons=<?=$i?>">Crea formulario para <?=$i?> personas</a></p>
  <?php } ?>
</body>
</html>