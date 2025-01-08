<?php require 'connectionPDO.php'; 

if (!isset($_GET['id'])) {
  die('Falta el id del material a borrar');
}

$id = $_GET['id'];
$stmt = $link->prepare('DELETE FROM imports WHERE id=:id');
$stmt->bindParam(':id', $id, PDO::PARAM_INT);
$stmt->execute();
echo "Recurso eliminado.";
?>
