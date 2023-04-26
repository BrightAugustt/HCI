<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $destination = $_POST['region'];

  switch ($destination) {
    case 'Greater Accra':
      header('Location: ../Ecom/gAccra.php');
      break;
    case 'Eastern':
      header('Location: ../Ecom/eastern.php');
      break;
    default:
      echo 'Invalid destination selected.';
      break;
  }
  exit;
}
?>