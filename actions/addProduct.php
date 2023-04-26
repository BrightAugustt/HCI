<?php
include('../controllers/product_controller.php');

if (isset($_POST['insertBtn'])) {
    $pcategory = $_POST['product_cat'];
    $pbrand = $_POST['product_brand'];
    $ptitle = $_POST['product_title'];
    $pprice = $_POST['product_price'];
    $pdesc = $_POST['product_desc'];
    $pkeywords = $_POST['product_keywords'];
    $file = $_FILES['crop_image']['name'];
    move_uploaded_file($_FILES["crop_image"]["tmp_name"],"../images/crops/".$_FILES["crop_image"]["name"]);


    // $root_dir = ".\\..\\images\\productImages\\";
    // $upload_root_dir = "../images/productImages/";
    // $file = $_FILES["crop_image"];
    // $file_dest = $root_dir . basename($file["name"]);
    // $upload_file_dest = $upload_root_dir . basename($file["name"]);
    // $file_type = strtolower(pathinfo($file_dest, PATHINFO_EXTENSION));
    // move_uploaded_file($file["tmp_name"], $file_dest);

    // echo $pcategory, $pbrand, $ptitle, $pprice, $pdesc, $pimage, $pkeywords;

    $result=add_productrecord_ctr($pcategory, $pbrand, $ptitle, $pprice, $pdesc, $file, $pkeywords);
    if ($result == true) {
        header('Location: ../admin/allProducts.php');
    } else {
        echo 'error';
    }
}
