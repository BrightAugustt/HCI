<?php
//connect to database class
include_once (dirname(__FILE__))  . '../../settings/db_class.php';

/**
*General class to handle all functions 
*/
/**
 *@author Aaron Kwame Andoh & Harry Lamptey 
 *
 */

class coach_class extends db_connection
{
	//--INSERT--//
	function coach_cls($a,$b,$c,$d,$e,$f,$g){
		$sql= "INSERT INTO `coach_info`(`coach_name`, `position`, `team_id`, `Nationality`, `type_of_league`, `coach_image`,`Gender`) VALUES ('$a','$b','$c','$d','$e','$f','$g')";

		return $this->db_query($sql);
}

function coach_stats_add_cls($a,$b,$c,$d,$e){
	$sql="INSERT INTO `coach_stats`(`coach_id`, `wins`, `draw`, `loss`, `season`) VALUES ('$a','$b','$c','$d','$e')";

	return $this->db_query($sql);
}
	
	//--SELECT--//
function select_coach_cls(){
	$sql="SELECT `coach_id`, `coach_name` FROM `coach_info`";

	return $this->db_fetch_all($sql);
}

	//--UPDATE--//



	//--DELETE--//
	

}

?>