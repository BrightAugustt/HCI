	
<?php
//connect to database class
include_once(dirname(__FILE__)) . "../../settings/db_class.php";

// session_start();

/**
 *This folder handles all the sql query for each service
 */
/**
 *@author David Sampah
 *
 */

class Myitems_class extends db_connection
{

	// public $db_conn;



	// function __construct() {
	// 	$db_conn = new db_connection();
	//     $this->db_conn = $db_conn->db_connect();
	//   }


	//--INSERT--//



	//--SELECT--//
	function select_myitems_class()
	{
		$u_id = $_SESSION["u_id"];
		$rows = $this->db_fetch_all("SELECT * FROM add_item where `u_id`='$u_id' ORDER BY id DESC");
		if (empty($rows)) {
			return false;
		}
		return $rows;
	}


	function select_itemdet_class($id)
	{
		$rows = $this->db_fetch_one("SELECT * FROM add_item WHERE `id` = $id");
		if (empty($rows)) {
			return false;
		}
		return $rows;
	}



	//--UPDATE--//
	function update_myitems_class($id, $itemname, $itemtype, $price, $qty, $itemdesc, $address, $newImageName)
	{
		$query = "UPDATE `add_item` SET `itemname`='$itemname',`itemtype`='$itemtype',`price`='$price',`qty`='$qty',`itemdesc`='$itemdesc',`address`='$address',`image`='$newImageName' WHERE `id`='$id'";
		return $this->db_query($query);
	}

	//--DELETE--//
	function delete_myitems_class($id)
	{
		$query = "DELETE FROM add_item WHERE `id`='$id'";
		return $this->db_query($query);
	}
}


?>