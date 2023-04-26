<?php 

//make the controller aware of the class
include_once(dirname(__FILE__)) . '/../classes/customer_class.php';


function add_record_ctr($fname, $lname, $number, $region, $email, $password, $user_role)
{
    // create an instance of the Product class
    $class_instance = new ContactClass();
    // call the method from the class
    return $class_instance->add_Cust_record_cls($fname, $lname, $number, $region, $email, $password, $user_role);
}

function update_custrecord_ctr($cid,$fname, $lname, $number, $email)
{
    // create an instance of the Product class
    $class_instance = new ContactClass();
    // call the method from the class
    return $class_instance->update_custrecord_cls($cid,$fname, $lname, $number, $email);
}

function add_Admin_record_ctr($fname, $lname, $number, $region, $email, $password, $user_role)
{
    // create an instance of the Product class
    $class_instance = new ContactClass();
    // call the method from the class
    return $class_instance->add_Admin_record_cls($fname, $lname, $number, $region, $email, $password, $user_role);
}


function select_exist_customer_ctr($b,$c){
    $select = new ContactClass();
    return $select->sel_regis_cls($b,$c);
  }

function getUserDetailsByEmail_ctr($email){

    $details = new ContactClass();

    return $details->getUserDetailsByEmail_cls($email);
}

function getAdminDetailsByEmail_ctr($email){

    $details = new ContactClass();

    return $details->getAdminDetailsByEmail_cls($email);
}


function get_all_records_ctr()
{
    //create an instance of the class
    $item_object = new ContactClass();

    //run the method
    $item_records = $item_object->get_all_records_cls();

    //check if the method worked
    if ($item_records) {
        //return all the data
        return $item_object->db_fetch_all();
    } else {
        //no data found
        return false;
    }
}


function get_all_adminrecords_ctr()
{
    //create an instance of the class
    $item_object = new ContactClass();

    //run the method
    $item_records = $item_object->get_all_adminrecords_cls();

    //check if the method worked
    if ($item_records) {
        //return all the data
        return $item_object->db_fetch_all();
    } else {
        //no data found
        return false;
    }
}

function get_one_record_ctr($cid)
{
    //create an instance of the class
    $item_object = new ContactClass();

    //run the method
    $item_records = $item_object->get_one_record_cls($cid);

    //check if the method worked
    if ($item_records) {
        //return all the data
        return $item_object->db_fetch_one();
    } else {
        //no data found
        return false;
    }
}

function update_record_ctr($id, $name, $number, $region)
{
    // create an instance of the Product class
    $class_instance = new ContactClass();
    // call the method from the class
    return $class_instance->update_record_cls($id, $name, $number, $region);
}

function delete_record_ctr($id)
{
    // create an instance of the Product class
    $class_instance = new ContactClass();
    // call the method from the class
    return $class_instance->delete_record_cls($id);
}

function delete_newsrecord_ctr($id)
{
    // create an instance of the Product class
    $class_instance = new ContactClass();
    // call the method from the class
    return $class_instance->delete_newsrecord_cls($id);
}

//--verify--//
function loginCustomer_ctr($customer_email){

    // Create an instance of the class
    $verify_customer = new ContactClass();

     return $verify_customer->verify_customer($customer_email);

}

function clientCustomer_ctr($user_role){

    // Create an instance of the class
    $verify_customer = new ContactClass();

     return $verify_customer->client_count($user_role);

}
?>
