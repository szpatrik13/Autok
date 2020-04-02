<?php 
$query = "SELECT * FROM `cars`";
require_once APP.'Core/cars.php';

echo '<h2>Autok</h2>';
echo '<table style="width:100%">';
foreach($result as $car) {
  echo '
  <tr>
    <th>' . $car['producer'] . '</th>
    <th>' . $car['type'] . '</th>
    <th>' . $car['vintage'] . '</th>
    <th>' . $car['fuel'] . '</th>
    <th><a href="' . ROOT.'?cars&id=' . $car['id'] . '"><button>Modify</button></a></th>
  </tr>';
}
echo '</table>';

?>