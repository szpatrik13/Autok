<?php 
require_once APP.'Core/regularCostumers.php';

echo '<h2>Torzsvasarlok</h2>';
echo '<table style="width:100%">';
foreach($result as $regCos) {
  echo '
  <tr>
    <th>' . $regCos['name'] . '</th>
    <th>' . $regCos['address'] . '</th>
  </tr>';
}
echo '</table>';

?>