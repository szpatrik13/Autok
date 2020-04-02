<?php 
require_once APP.'database.php';

$modifyTenant = $pdo->prepare('UPDATE tenants SET name="' . $_POST['name'] . '", address="' . $_POST['address'] . '", regCostumer="' . $_POST['regCostumer'] . '" WHERE id="' . $_GET['id'] . '"');
$modifyTenant->execute();

?>