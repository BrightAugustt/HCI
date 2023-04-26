<?php

//connect to the user account class
include_once(dirname(__FILE__)) . '/../classes/crop_class.php';


function addCrop_ctr($crop_name,$customer_id,$farmer_name,$farmer_contact,$farm_size,$qty,$crop_price,$crop_image,$crop_cat,$crop_desc)
{
    // create an instance of the crop class
    $add_crop = new crop_class();

    return $add_crop->add_crop($crop_name,$customer_id,$farmer_name,$farmer_contact,$farm_size,$qty,$crop_price,$crop_image,$crop_cat,$crop_desc);
}

// function add_catrecord_ctr($catname)
// {
//     // create an instance of the crop class
//     $add_cat = new crop_class();

//     return $add_cat->add_cat($catname);
// }

function updateCrop_ctr($crop_id,$crop_name,$farmer_name,$farmer_contact,$farm_size,$qty,$crop_price,$crop_image,$crop_cat,$crop_desc)
{
    // create an instance of the crop class
    $update_crop = new crop_class();

    return $update_crop->update_crop($crop_id,$crop_name,$farmer_name,$farmer_contact,$farm_size,$qty,$crop_price,$crop_image,$crop_cat,$crop_desc);
}

function selectallCrop_ctr()
{
    //create an instance of the crop class
    $selectall = new crop_class();

    return $selectall->selectAll_crop();
}

function selectallOfficerCrop_ctr($customer_id)
{
    //create an instance of the crop class
    $selectall = new crop_class();

    return $selectall->selectofficer_crop($customer_id);
}

function selectoneCrop_ctr($crop_id)
{
    // create an instance of the crop class
    $selectone = new crop_class();

    return $selectone->selectOne_crop($crop_id);
}

function deleteCrop_ctr($crop_id)
{
    // create an instance of the crop class
    $delete = new crop_class();

    return $delete->delete_crop($crop_id);
}

// function get_all_catrecords_ctr()
// {
//     //create an instance of the class
//     $item_object = new crop_class();

//     //run the method
//    return $item_object->selectAll_cat();

// }

function show_all_crops_ctr()
{
    $show= new crop_class();

    return $show->show_all_crop();
}



function update_show_crop_ctr($id,$status)
{
    $update= new crop_class();
    return $update->showUpdateCrop($id,$status);
}

function update_image_ctr($crop_id,$crop_image)
{
    $edit=new crop_class();
    return $edit->update_crop_image($crop_id,$crop_image);
}

function Sendemail_ctr($customer_id)
{
    $edit=new crop_class();
    return $edit->Sendemail($customer_id);
}

function admincropshow_ctr()
{
    $edit=new crop_class();
    return $edit->admincropshow();
}


function aeo_count_ctr($user_role)
{
    $edits=new crop_class();
    return $edits->aeo_count($user_role);
}


function customer_count_ctr()
{
    $edit=new crop_class();
    return $edit->customer_count();
}

// function product_count_ctr()
// {
//     $edit=new crop_class();
//     return $edit->product_count();
// }

?>