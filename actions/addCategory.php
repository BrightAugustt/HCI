<?php
include_once '../controllers/crop_controller.php';


if (isset($_POST['insertBtn'])) {
    $catname = $_POST['cat_name'];

    $result = add_catrecord_ctr($catname);
    if ($result) {
        header('Location: ../admin/productCat.php');
    } else {
        echo 'error';
    }
}

?>
