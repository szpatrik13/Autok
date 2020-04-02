<?php
$query = 'SELECT * FROM `tenants` WHERE id="' . $_GET['id'] . '"';
require_once APP.'Core/allTenant.php';

echo '<h2>Autok</h2>';
echo '<table style="width:100%">';
foreach($result as $tenant) {
  echo '
  <form method="POST" action="' . ROOT . '?modifyTenant&id=' . $_GET['id'] . '">
  <tr>
    <th><input type="text" name="name" value="' . $tenant['name'] . '"></th>
    <th><input type="text" name="address" value="' . $tenant['address'] . '"></th>
    <th><input type="text" name="regCostumer" value="' . $tenant['regCostumer'] . '"></th>
    <th><button type="submit">Change</button></th>
  </tr>
  </form>';
}
echo '</table>';

?>