<?php

//connect to database class
include_once(dirname(__FILE__)) . "../../settings/db_class.php";

/**
*General class to handle all functions 
*/
/**
 *@author David Sampah
 *
 */

class general_class extends db_connection
{
	//--INSERT--//
	function aeo_count()
    {
        $sql = "SELECT COUNT(*) FROM `customer` WHERE user_role=2";
        return  $this->fetchOne($sql);
    }

	function customer_count()
    {
        $sql = "SELECT COUNT(*) FROM `customer` WHERE user_role=1";
        return  $this->fetchOne($sql);
    }

	function sales_count()
    {
        $sql = "SELECT SUM(amount) FROM `orders`";
        return $this->fetchOne($sql);
    }

    function customerOrder_amount_count($cust_id)
    {
        $sql = "SELECT SUM(amount) FROM `orders` WHERE `customer_id`='$cust_id'";
        return $this->fetchOne($sql);
    }

    function customerorder_count($cust_id)
    {
        $sql = "SELECT count(*) FROM `orders` WHERE `customer_id`='$cust_id'";
        return $this->fetchOne($sql);
    }


	function crops_count()
    {
        $sql = "SELECT COUNT(*) FROM `crops`";
        return  $this->fetchOne($sql);
    }

    function aeo_crop_count($cid)
    {
    $sql = "SELECT COUNT(*) FROM `crops` WHERE `customer_id` = '$cid'";

    return $this->fetchOne($sql);
    }

	function count_farmers_by_customer($cid) {
        $sql = "SELECT COUNT(DISTINCT farmer_name) FROM crops WHERE customer_id = $cid";
        $result = $this->fetchOne($sql);
        return $result;
    }
    

}
