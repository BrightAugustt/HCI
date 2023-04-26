<?php

include_once(dirname(__FILE__)) . "../../settings/db_class.php";

class ContactClass extends db_connection
{
    function add_Cust_record_cls($fname, $lname, $number, $region, $email, $password, $user_role)
    {
        // return true or false
        return $this->db_query(
            "INSERT INTO customer (`customer_fname`, `customer_lname`, `customer_contact`, `customer_region`, `customer_email`, `customer_pass`, `user_role`) VALUES ('$fname', '$lname', '$number', '$region', '$email', '$password', '$user_role')"
        );
    }

    function update_custrecord_cls($cid,$fname, $lname, $number, $email)
    {
        // return true or false
        return $this->db_query(
            "UPDATE `customer` SET `customer_fname`='$fname', `customer_lname`='$lname', `customer_contact`='$number',`customer_email`='$email' WHERE `customer_id`='$cid'"
        );
    }

    function add_Admin_record_cls($fname, $lname, $number, $country, $email, $password, $user_role)
    {
        // return true or false
        return $this->db_query(
            "INSERT INTO customer (`customer_fname`, `customer_lname`, `customer_contact`, `customer_country`, `customer_email`, `customer_pass`, `user_role`) VALUES ('$fname', '$lname', '$number', '$country', '$email', '$password', '$user_role')"
        );
    }

    
    function getUserDetailsByEmail_cls($email)
    {
        //write the sql
        $sql = "SELECT * FROM `customer` WHERE `customer_email` = '$email'";
        //execute the sql
        return $this->fetchOne($sql);
    }

    function getAdminDetailsByEmail_cls($email)
    {
        //write the sql
        $sql = "SELECT * FROM `customer` WHERE `customer_email` = '$email' AND `user_role` = 2";
        //execute the sql
        return $this->fetchOne($sql);
    }
    
    //login
	function sel_regis_cls ($b,$c){
		$c_p = md5($c);
		$sql = "SELECT * FROM `customer` WHERE `customer_email` = '$b' AND `customer_pass` = '$c_p'";
		return $this->db_fetch_one($sql);
	}

    function get_all_records_cls()
    {
        // return true or false
        return $this->db_query(
            "SELECT * from customer"
        );
    }

    function getAdminActions()
    {
        // return true or false
        return $this->db_query(
            "SELECT "
        );
    }


    function get_all_adminrecords_cls()
    {
        // return true or false
        return $this->db_query(
            "SELECT * from customer WHERE `user_role` = 2"
        );
    }

    function get_one_record_cls($cid)
    {
        // return true or false
        return $this->db_query(
            "SELECT * from customer where customer_id ='$cid'"
        );
    }

    function update_record_cls($id, $name, $number, $country)
    {
        // return true or false
        return $this->db_query(
            "UPDATE `customer` SET `customer_name`='$name',`customer_contact`='$number',`customer_country`='$country' WHERE `customer_id`='$id'"
        );
    }

    function delete_record_cls($id)
    {
        // return true or false
        return $this->db_query(
            "DELETE FROM `customer` WHERE `customer_id`='$id'"
        );
    }

    function delete_newsrecord_cls($id)
    {
        // return true or false
        return $this->db_query(
            "DELETE FROM `newsletter` WHERE `news_id`='$id'"
        );
    }

    function verify_customer($customer_email){

		// Write query
		$sql = "Select * FROM `customer` where customer_email = '$customer_email'";

		// Excute query
		return$this -> db_fetch_one($sql);

	}

    function client_count($user_role)
    {
        $sql = "SELECT COUNT(*) FROM `customer` WHERE `user_role`='$user_role'";
        return $this->db_fetch_one($sql);
    
    }

    
 

}
