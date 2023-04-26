
<?php

include_once (dirname(__FILE__)) . "../../settings/db_class.php";


class crop_class extends db_connection
{
    // Insert crop into database
    function add_crop($crop_name, $customer_id, $farmer_name, $farmer_contact, $farm_size, $qty, $crop_price, $crop_image, $crop_cat, $crop_desc)
    {
        // Write query
        $sql = "INSERT INTO `crops`( `crop_name`,`customer_id`, `farmer_name`, `farmer_contact`, `farm_size`, `qty`, `crop_price`, `crop_image`, `crop_cat`, `crop_desc`) VALUES ('$crop_name','$customer_id','$farmer_name','$farmer_contact','$farm_size','$qty','$crop_price','$crop_image','$crop_cat','$crop_desc')";
        // Return  
        return $this->db_query($sql);
    }

    function add_cat($catname)
    {
        // return true or false
        return $this->db_query(
            "INSERT INTO categories (cat_name) values ('$catname')"
        );
    }

    // select one
    function selectOne_crop($crop_id)
    {
        // return true or false
        return $this->db_query(
            "SELECT * FROM `crops` where `crop_id`='$crop_id'"
        );
    }

    // select FRUITS & NUTS
    function selectFruits()
    {
        // return true or false
        return $this->db_query(
            "SELECT * FROM `crops` WHERE `crop_cat`='Fruit' AND `crop_cat`='Nuts'"
        );
    }

    // select Vegetables
    function selectVegetables()
    {
        // return true or false
        return $this->db_query(
            "SELECT * FROM `crops` WHERE `crop_cat`='Vegetable'"
        );
    }

    // select Legumes
    function selectLegume()
    {
        // return true or false
        return $this->db_query(
            "SELECT * FROM `crops` WHERE `crop_cat`='Legume'"
        );
    }

    // select Cereals
    function selectCereals()
    {
        // return true or false
        return $this->db_query(
            "SELECT * FROM `crops` WHERE `crop_cat`='Cereal'"
        );
    }

     // select Sugars
     function selectSugars()
     {
         // return true or false
         return $this->db_query(
             "SELECT * FROM `crops` WHERE `crop_cat`='Sugars'"
         );
     }

    // select all crops
    function selectAll_crop()
    {
        $sql = "SELECT * FROM `crops`";
        // Return
        return $this->db_fetch_all($sql);
    }

    // select all crops
    function selectofficer_crop($customer_id)
    {
        $sql = "SELECT * FROM `crops` WHERE `customer_id`='$customer_id'";
        // Return
        return $this->db_fetch_all($sql);
    }

    // select all crop categories
    function selectAll_cat()
    {
        $sql = "SELECT * FROM `categories`";
        // Return
        return $this->db_fetch_all($sql);
    }


    // update crop
    function update_crop($crop_id, $crop_name, $farmer_name, $farmer_contact, $farm_size, $qty, $crop_price, $crop_image, $crop_cat, $crop_desc)
    {
        // return true or false
        return $this->db_query(
            "UPDATE `crops` SET `crop_id`='$crop_id',`crop_name`='$crop_name',`farmer_name`='$farmer_name',`farmer_contact`='$farmer_contact',`farm_size`='$farm_size',`qty`='$qty',`crop_price`='$crop_price',`crop_image`='$crop_image',`crop_cat`='$crop_cat',`crop_desc`='$crop_desc' WHERE `crop_id`='$crop_id'"
        );
    }

    // delete crop
    function delete_crop($crop_id)
    {
        // return true or false
        return $this->db_query(
            "DELETE FROM `crops` WHERE `crop_id`='$crop_id'"
        );
    }


    // show crop
    function show_all_crop()
    {
        $sql = "SELECT * FROM `crops` where `Approved`='Yes'";
        return $this->db_fetch_all($sql);
    }

    function showUpdateCrop($id, $status)
    {
        $sql = "UPDATE  `crops` set Approved='$status' where `crop_id`='$id'";
        return $this->db_query($sql);
    }

    function update_crop_image($crop_id, $crop_image)
    {
        $sql = "UPDATE `crops` SET `crop_image`='$crop_image' WHERE `crop_id`='$crop_id'";
        return $this->db_query($sql);
    }

    function Sendemail($customer_id)
    {
        $sql = "SELECT customer_email FROM customer JOIN crops ON customer.customer_id = crops.customer_id WHERE crops.customer_id = '$customer_id'";
        return $this->db_query($sql);
    }

    function admincropshow()
    {
        $sql = "SELECT crops.*, customer.customer_email FROM crops JOIN customer ON crops.customer_id = customer.customer_id ORDER BY crops.crop_id DESC";
        return $this->db_query($sql);
    }

    function aeo_count($user_role)
    {
        $sql = "SELECT COUNT(*) FROM `customer` WHERE `user_role`='$user_role'";
        return $this->db_fetch_one($sql);
    
    }


    function customer_count()
    {
        $sql = "SELECT count(*) as `customers` FROM `customer`  WHERE `user_role`=1";
        return $this->db_fetch_one($sql);
    }
}
?>