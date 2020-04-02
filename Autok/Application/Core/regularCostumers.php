<?php 
require_once APP.'database.php';

$allCar = $pdo->prepare("SELECT * FROM `tenants` WHERE `regCostumer`='1'");
$allCar->execute();
$result = $allCar->fetchAll();
?>