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

class gallery_class extends db_connection
{
	//--INSERT--//

    function gallery_insertion_cls($a,$b,$c,$d){
        $sql = "INSERT INTO `gallery`( `image_name`, `Filepath`, `Date`, `Description`) VALUES ('$a','$b','$c','$d')";

        return $this->db_query($sql);

    }
	//--SELECT--//


	//--UPDATE--//




	//--DELETE--//
	

}

?>