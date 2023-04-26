<?php
include("../controllers/crop_controller.php");


if(isset($_POST["addcrop"])){
    $allowTypes=array('jpg','png','jpeg','gif');
    $crop_name=$_POST["crop_name"];
    $farmer_name=$_POST["farmer_name"];
    $farmer_contact=$_POST["farmer_contact"];
    $farm_size=$_POST["farm_size"];
    $qty=$_POST["qty"];
    $crop_price=$_POST["crop_price"];
    $crop_cat=$_POST["crop_cat"];
    $crop_desc=$_POST["crop_desc"];
    $customer_id = $_POST["customer_id"];
echo $customer_id."sap man";
    // image upload
    $output_dir = "../images/crops/";
    $RandomNum = time();
    $ImageName = str_replace(' ','-',strtolower($_FILES['crop_image']['name'][0]));
    $ImageType = $_FILES['crop_image']['type'][0];
    $ImageExt = substr($ImageName,strrpos($ImageName,'.'));
    $ImageExt = str_replace('.','',$ImageExt);
    $ImageName = preg_replace("/\.[^.\s]{3,4}$/", "", $ImageName);
    $NewImageName = $ImageName.'-'.$RandomNum.'.'.$ImageExt;
    $ret[$NewImageName]= $output_dir.$NewImageName;
    
    echo "Heyyaa";
    move_uploaded_file($_FILES["crop_image"]["tmp_name"][0],$output_dir."/".$NewImageName);
        if(addCrop_ctr($crop_name,$customer_id,$farmer_name,$farmer_contact,$farm_size,$qty,$crop_price,$NewImageName,$crop_cat,$crop_desc)==TRUE){
            echo $customer_id."idiot";
            echo"<script>alert('Crop uploaded successfully')</script>";
            header('Location:../aeo/view_crop.php');
        }else{
            echo "<script>alert('Crop not submitted successfully')</script>";
        }
    }else{
        echo "Something went wrong";

}



?>