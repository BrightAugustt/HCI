<?php
//connect to the team class
include("../classes/player_class.php");

//sanitize data
function cleanText($data) 
{
  $data = trim($data);
  //$data = stripslashes($data);
  //$data = htmlspecialchars($data);
  return $data;
}

//function that class customer insertion function
function player_registration_ctr($a,$b,$c,$d,$e,$f,$g){

//setting instance of the class customer
  $player_additon = new player_class();

  return $player_additon->player_addition_cls($a,$b,$c,$d,$e,$f,$g);
}
function player_stats_addition_ctr($a,$b,$c,$d,$e,$f,$g,$h,$i,$j,$k,$l,$m,$n,$o,$p,$q,$r,$s,$t,$u,$v,$w,$x,$y,$z,$a1,$a2){
  $playere_stats = new player_class();

  return $playere_stats->	player_stats_addition_cls($a,$b,$c,$d,$e,$f,$g,$h,$i,$j,$k,$l,$m,$n,$o,$p,$q,$r,$s,$t,$u,$v,$w,$x,$y,$z,$a1,$a2);

}
function delete_player_ctr($a){
  $player_delete = new player_class();

  return $player_delete->delete_player_cls($a);
}
function player_dis_ctr1(){
  $player_goals = new player_class();

  return $player_goals->player_dis_class1();
}
function player_dis_ctr2(){
  $player_goals = new player_class();

  return $player_goals->player_dis_class2();
}
function player_dis_ctr3(){
  $player_goals = new player_class();

  return $player_goals->player_dis_class3();
}
function player_dis_ctr4(){
  $player_goals = new player_class();

  return $player_goals->player_dis_class4();
}
function select_log_table_ctr(){
  $log = new player_class();

  return $log->select_log_table_class();
}

function select_results_ctr(){
  $res = new player_class();

  return $res->select_results_class();
}
function select_team_ctr(){
  $team = new player_class();

  return $team->select_team_class();
}
function select_tops_and_asst_ctr(){
  $st = new player_class();

  return $st->select_tops_and_asst_class();

}
function select_asst_ctr(){
  $sta = new player_class();

  return $sta->select_asst_class();

}
function select_cleansheet_ctr(){
  $stc = new player_class();

  return $stc->select_cleansheet_class();

}
function select_coach_ctr(){
  $coach= new player_class();

  return $coach->select_coach_class();
}
function select_fixtures_ctr(){
  $fixtures = new player_class();

  return $fixtures->select_fixtures_class();

}

function select_tops_ctr(){
  $goalss = new player_class();

  return $goalss->select_tops_class();
}

function select_filter_stats_ctr($a,$b){
  $sl= new player_class();

  return $sl->select_filter_stats($a,$b);
}

