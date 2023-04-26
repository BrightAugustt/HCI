<?php

//connect to the user account class
include_once (dirname(__FILE__)) . '/../classes/product_class.php';


function add_catrecord_ctr($catname)
{
    // create an instance of the crop class
    $class_instance = new crop_class();
    // call the method from the class
    return $class_instance->add_catrecord_cls($catname);
}

function add_croprecord_ctr($cropName, $farmerName, $qty, $price, $category, $file, $cdesc)
{
    // create an instance of the crop class
    $class_instance = new crop_class();
    // call the method from the class
    return $class_instance->add_croprecord_cls($cropName, $farmerName, $qty, $price, $category, $file, $cdesc);
}

function getEmailSender_ctr($email)
{

    $details = new crop_class();

    return $details->getEmailSender($email);
}

function get_all_croprecords_ctr()
{
    //create an instance of the class
    $item_object = new crop_class();

    //run the method
    $item_records = $item_object->get_all_croprecords_cls();

    //check if the method worked
    if ($item_records) {
        //return all the data
        return $item_object->db_fetch_all();
    } else {
        //no data found
        return false;
    }
}

function get_all_approvedcrop_ctr()
{
    //create an instance of the class
    $item_object = new crop_class();

    //run the method
    $item_records = $item_object->get_all_approvedcrops_cls();

    //check if the method worked
    if ($item_records) {
        //return all the data
        return $item_object->db_fetch_all();
    } else {
        //no data found
        return false;
    }
}




function get_all_crop_feature_ctr()
{
    //create an instance of the class
    $item_object = new crop_class();

    //run the method
    $item_records = $item_object->get_all_crop_feature_cls();

    //check if the method worked
    if ($item_records) {
        //return all the data
        return $item_object->db_fetch_all();
    } else {
        //no data found
        return false;
    }
}

function show_allcrops_ctr()
{
    //create an instance of the class
    $item_object = new crop_class();

    //run the method
    $item_records = $item_object->showall_crops();

    //check if the method worked
    if ($item_records) {
        //return all the data
        return $item_object->db_fetch_all();
    } else {
        //no data found
        return false;
    }
}

function update_statuscrops_ctr($crop_id, $status)
{
    $updatestatus = new crop_class();
    return $updatestatus->updatestatus_crops($crop_id, $status);
}




function get_all_officercrop_ctr($customer_id)
{
    //create an instance of the class
    $item_object = new crop_class();

    //run the method
    $item_records = $item_object->get_all_officercrop_cls($customer_id);

    //check if the method worked
    if ($item_records) {
        //return all the data
        return $item_object->db_fetch_all();
    } else {
        //no data found
        return false;
    }
}

function get_all_catrecords_ctr()
{
    //create an instance of the class
    $item_object = new crop_class();

    //run the method
    $item_records = $item_object->get_all_catrecords_cls();

    //check if the method worked
    if ($item_records) {
        //return all the data
        return $item_object->db_fetch_all();
    } else {
        //no data found
        return false;
    }
}


function selectFruits_ctr()
{
    //create an instance of the class
    $item_object = new crop_class();

    //run the method
    $item_records = $item_object->selectFruits();

    //check if the method worked
    if ($item_records) {
        //return all the data
        return $item_object->db_fetch_all();
    } else {
        //no data found
        return false;
    }
}

function selectVeg_ctr()
{
    //create an instance of the class
    $item_object = new crop_class();

    //run the method
    $item_records = $item_object->selectVegetables();

    //check if the method worked
    if ($item_records) {
        //return all the data
        return $item_object->db_fetch_all();
    } else {
        //no data found
        return false;
    }
}

function selectCereal_ctr()
{
    //create an instance of the class
    $item_object = new crop_class();

    //run the method
    $item_records = $item_object->selectCereals();

    //check if the method worked
    if ($item_records) {
        //return all the data
        return $item_object->db_fetch_all();
    } else {
        //no data found
        return false;
    }
}

function selectLegume_ctr()
{
    //create an instance of the class
    $item_object = new crop_class();

    //run the method
    $item_records = $item_object->selectLegume();

    //check if the method worked
    if ($item_records) {
        //return all the data
        return $item_object->db_fetch_all();
    } else {
        //no data found
        return false;
    }
}

function selectSugars_ctr()
{
    //create an instance of the class
    $item_object = new crop_class();

    //run the method
    $item_records = $item_object->selectSugars();

    //check if the method worked
    if ($item_records) {
        //return all the data
        return $item_object->db_fetch_all();
    } else {
        //no data found
        return false;
    }
}


function get_all_orderrecords_ctr()
{
    //create an instance of the class
    $item_object = new crop_class();

    //run the method
    $item_records = $item_object->get_all_orderrecords_cls();

    //check if the method worked
    if ($item_records) {
        //return all the data
        return $item_object->db_fetch_all();
    } else {
        //no data found
        return false;
    }
}

function get_all_fruit_ctr()
{
    //create an instance of the class
    $item_object = new crop_class();

    //run the method
    $item_records = $item_object->get_all_fruit();

    //check if the method worked
    if ($item_records) {
        //return all the data
        return $item_object->db_fetch_all();
    } else {
        //no data found
        return false;
    }
}


function get_one_croprecord_ctr($cid)
{
    //create an instance of the class
    $item_object = new crop_class();

    //run the method
    $item_records = $item_object->get_one_croprecord_cls($cid);

    //check if the method worked
    if ($item_records) {
        //return all the data
        return $item_object->db_fetch_one();
    } else {
        //no data found
        return false;
    }
}

function search_for_one_crop_ctr($searchkeys)
{
    $one_crop = new crop_class();
    return $one_crop->search_for_one_crop_cls($searchkeys);
}


function get_one_catrecord_ctr($cid)
{
    //create an instance of the class
    $item_object = new crop_class();

    //run the method
    $item_records = $item_object->get_one_catrecord_cls($cid);

    //check if the method worked
    if ($item_records) {
        //return all the data
        return $item_object->db_fetch_one();
    } else {
        //no data found
        return false;
    }
}



function update_catrecord_ctr($id, $name)
{
    // create an instance of the crop class
    $class_instance = new crop_class();
    // call the method from the class
    return $class_instance->update_catrecord_cls($id, $name);
}

function update_croprecord_ctr($pid, $pcategory, $pbrand, $ptitle, $pprice, $pdesc, $pimage, $pkeywords)
{
    // create an instance of the crop class
    $class_instance = new crop_class();
    // call the method from the class
    return $class_instance->update_croprecord_cls($pid, $pcategory, $pbrand, $ptitle, $pprice, $pdesc, $pimage, $pkeywords);
}

function delete_croprecord_ctr($id)
{
    // create an instance of the crop class
    $class_instance = new crop_class();
    // call the method from the class
    return $class_instance->delete_croprecord_cls($id);
}


function delete_catrecord_ctr($id)
{
    // create an instance of the crop class
    $class_instance = new crop_class();
    // call the method from the class
    return $class_instance->delete_catrecord_cls($id);
}

function delete_cartrecord_ctr($pid)
{
    // create an instance of the crop class
    $class_instance = new crop_class();
    // call the method from the class
    return $class_instance->delete_cartrecord_cls($pid);
}


function delete_orderrecord_ctr($oid)
{
    // create an instance of the crop class
    $class_instance = new crop_class();
    // call the method from the class
    return $class_instance->delete_orderrecord_cls($oid);
}

function admincropshow_ctr()
{
    // create an instance of the crop class
    $class_instance = new crop_class();
    // call the method from the class
    return $class_instance->admincropshow();
}

function count_aeo_ctr()
{
    // create an instance of the crop class
    $class_instance = new crop_class();
    // call the method from the class
    return $class_instance->aeo_count();
}

function product_count_ctr()
{
    // create an instance of the crop class
    $class_instance = new crop_class();
    // call the method from the class
    return $class_instance->product_count();
}

function vendor_crop_count_ctr()
{
    // create an instance of the crop class
    $class_instance = new crop_class();
    // call the method from the class
    return $class_instance->vendor_crop_count();
}
