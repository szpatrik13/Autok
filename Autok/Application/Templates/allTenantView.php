<?php 
$query = "SELECT * FROM `tenants`";
require_once APP.'Core/allTenant.php';

echo '<h2>Berlok</h2>';
echo '<table style="width:100%">';
foreach($result as $tenant) {
  echo '
  <tr>
    <th>' . $tenant['name'] . '</th>
    <th>' . $tenant['address'] . '</th>
    <th>' . $tenant['regCostumer'] . '</th>
    <th><a href="' . ROOT.'?tenants&id=' . $tenant['id'] . '"><button>Modify</button></a></th>
  </tr>';
}
echo '</table>';
?>