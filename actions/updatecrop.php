<?php
 include("../controllers/crop_controller.php");

 if(isset($_POST['edit'])){
    $crop_id=$_POST["crop_id"];
    $crop_name=$_POST["crop_name"];
    $farmer_name=$_POST["farmer_name"];
    $farmer_contact=$_POST["farmer_contact"];
    $farm_size=$_POST["farm_size"];
    $qty=$_POST["qty"];
    $crop_price=$_POST["crop_price"];
    $crop_cat=$_POST["crop_cat"];
    $crop_desc=$_POST["crop_desc"];
    $image = $_FILES['crop_image']["name"];
    $tmp = $_FILES['crop_image']["tmp_name"];

   if( updateCrop_ctr($crop_id,$crop_name,$farmer_name,$farmer_contact,$farm_size,$qty,$crop_price,$crop_image,$crop_cat,$crop_desc)==TRUE){
    header('Location:../aeo/view_crop.php');
   }else{
    echo "Unable to edit";
   }
    
  
 } else if(isset($_POST['edit_image'])){
        $allowTypes = array('jpg','png','jpeg','gif'); 
        $crop_id = $_POST['crop_id'];
        $crop_image=$_FILES['crop_image']["name"];
        $img=$_POST['image'];
    

        $output_dir = "../images/crops/";/* Path for file upload */
        $RandomNum  = time();
        $ImageName  = str_replace(' ','-',strtolower($_FILES['crop_image']['name'][0]));
        $ImageType = $_FILES['crop_image']['type'][0];
        $ImageExt = substr($ImageName, strrpos($ImageName, '.'));
        $ImageExt = str_replace('.','',$ImageExt);
        $ImageName=preg_replace("/\.[^.\s]{3,4}$/", "", $ImageName);
        $NewImageName = $ImageName.'-'.$RandomNum.'.'.$ImageExt;
        $ret[$NewImageName]= $output_dir.$NewImageName;
        
        if(empty($ImageName)!=TRUE){
echo $crop_id;
echo $NewImageName;
            $file=$img;
            unlink($file);
            move_uploaded_file($_FILES["crop_image"]["tmp_name"][0],$output_dir."/".$NewImageName );
            if(update_image_ctr($crop_id,$NewImageName)==TRUE){
                header('Location:../admin/allProducts.php');
            }else{
                echo "unable to edit image";
            }
        }
 }
?>