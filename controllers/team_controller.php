0<?php
//connect to the team class
require("../classes/team_class.php");

//sanitize data
function cleanText($data) 
{
  $data = trim($data);
  //$data = stripslashes($data);
  //$data = htmlspecialchars($data);
  return $data;
}

//INSERT
//function to insert teams into the database using the class
function team_registration_ctr($a, $b){

//setting instance of the class team
  $team_additon = new team_class();

  return $team_additon->team_addition_cls($a, $b);
}

function team_stats_addition_ctr($a,$b,$c,$d,$e,$f,$g,$h,$i,$j,$k,$l,$m,$n,$o,$p,$q,$r,$s,$t,$u,$v,$w){
  $team_stats = new team_class();

  return $team_stats->team_stats_addition_cls($a,$b,$c,$d,$e,$f,$g,$h,$i,$j,$k,$l,$m,$n,$o,$p,$q,$r,$s,$t,$u,$v,$w);
}




//SELECT
//function to select all teams from the database
	function select_team_ctr(){

    //setting instance of class team
    $team_select= new team_class();

    return $team_select->select_team_cls();

  }

  function select_1team_ctr($a){

    //setting instance of class team
    $team_select1= new team_class();

    return $team_select1->select_1team_cls($a);

  }

  function select_fixtures_ctr(){
    $fixtures_select = new team_class();
  
    return $fixtures_select->select_fixtures_cls();
  }
  function select_team1_ctr($a){
    $fixtures_selects = new team_class();
  
    return $fixtures_selects->select_team1_cls($a);
  }

  function select_team2_ctr($a){
    $fixtures_select2 = new team_class();
  
    return $fixtures_select2->select_team2_cls($a);
  }

  function select_game_ctr($a){
    $fixtures_select = new team_class();
  
    return $fixtures_select->select_game_cls($a);
  }

	function select_players_based_on_team_ctr($a){
    $select_based_players = new team_class();

    return $select_based_players->select_players_based_on_team_cls($a);
  }

function player_details_ctr(){

  $player_call = new user_class();

  return $player_call->player_details_cls();
}

?>