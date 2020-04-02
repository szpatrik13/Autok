<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="<?php echo APP.'Style/style.css' ?>">
</head>
<body>

<div class="topnav">
  <a class="active" href="<?php echo ROOT ?>">Home</a>
  <a href="<?php echo ROOT.'?cars' ?>">Cars</a>
  <a href="<?php echo ROOT.'?tenants' ?>">All tenants</a>
  <a href="<?php echo ROOT.'?regular' ?>">Regular costumers</a>
</div>

<div style="padding-left:16px">
  <br>
  <?php 
    // eldonti hogy melyik oldalt kell behozni
    // posters
    if (isset($_GET['modifyCar'])) {
      if (isset($_POST['producer']) && isset($_POST['type'])  && isset($_POST['vintage'])  && isset($_POST['fuel'])) {
        require_once APP.'Core/modifyCar.php';
        header("Location: " . ROOT . '?cars');
      } else {
        echo 'You can not leave empty anything';
      }
    } else if (isset($_GET['modifyTenant'])) {
      if (isset($_POST['name']) && isset($_POST['address'])  && isset($_POST['regCostumer'])) {
        require_once APP.'Core/modifyTenant.php';
        header("Location: " . ROOT . '?tenants');
      } else {
        echo 'You can not leave empty anything';
      }
    }
    // getters
    else if(isset($_GET['cars'])) {
      if (!isset($_GET['id'])) {
        require_once APP.'Templates/carsView.php';
      } else {
        require_once APP.'Templates/modifyCarsView.php';
      }
    } else if (isset($_GET['tenants'])) {
      if (!isset($_GET['id'])) {
        require_once APP.'Templates/allTenantView.php';
      } else {
        require_once APP.'Templates/modifyTenantView.php';
      }
    } else if (isset($_GET['regular'])) {
      require_once APP.'Templates/regularCostumersView.php';
    } else {
      require_once APP.'Templates/homeView.php';
    }

  ?>
</div>

<?php //require_once APP.'Templates/homeView.php'; ?>

</body>
</html>
