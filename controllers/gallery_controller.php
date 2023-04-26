<?php
//connect to the team class
include("../classes/gallery_class.php");

//sanitize data
function cleanText($data) 
{
  $data = trim($data);
  //$data = stripslashes($data);
  //$data = htmlspecialchars($data);
  return $data;
}

//function that class customer insertion function
function gallery_insertion_ctr($a,$b,$c,$d){

//setting instance of the class customer
  $gallery_additon = new gallery_class();

  return $gallery_additon->gallery_insertion_cls($a,$b,$c,$d);
}
