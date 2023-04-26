<?php
include_once '../controllers/crop_controller.php';

if(isset($_POST["deletecrop"])){
    $crop_id=$_POST["crop_id"];
    $img=$_POST['image'];
    if(unlink("../images/crops/".$img)){
        if(deleteCrop_ctr($crop_id)==True){
            header('Location:../aeo/view_crop.php');
        }else{
            echo "Unable to delete";
        }
    }else if (!unlink("../images/crops/".$img)){
        if(deleteCrop_ctr($crop_id)==True){
            header('Location:../aeo/view_crop.php');
        }
    }
}
else{
    header('Location:../aeo/aeo.php');
}

?>