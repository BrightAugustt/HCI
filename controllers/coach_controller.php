<?php
//connect to the team class
include("../classes/coach_class.php");

//sanitize data
function cleanText($data) 
{
  $data = trim($data);
  //$data = stripslashes($data);
  //$data = htmlspecialchars($data);
  return $data;
}
//INSERT CONTROLLER

//function to insert teams into the database using the class
function coach_ctr($a,$b,$c,$d,$e,$f,$g){

//setting instance of the class team
  $coach_additon = new coach_class();

  return $coach_additon->coach_cls($a,$b,$c,$d,$e,$f,$g);
}

function coach_stats_add_ctr($a,$b,$c,$d,$e){

  $coach_stats= new coach_class();

  return $coach_stats->coach_stats_add_cls($a,$b,$c,$d,$e);
}
 
//Select CONTROLLER
function select_coach_ctr(){
  $select_coach = new coach_class();

  return $select_coach->select_coach_cls();
}
?>