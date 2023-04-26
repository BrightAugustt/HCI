<?php
//connect to the user account class
include("../classes/user_class.php");

//sanitize data
function cleanText($data) 
{
  $data = trim($data);
  //$data = stripslashes($data);
  //$data = htmlspecialchars($data);
  return $data;
}

//function that class customer insertion function
function user_registration_ctr($a, $b, $c, $d,$e,$f,$g){

//setting instance of the class customer
  $Customer_registration = new user_class();

  return $Customer_registration->user_registration_cls($a, $b, $c, $d,$e,$f,$g);
}


//--SELECT--//
function customer_details_ctr(){

  $user_call = new user_class();

    return $user_call->customer_details_cls();
  
}
// //--SELECT--//
function player_details_ctr(){

  $player_call = new user_class();

  return $player_call->player_details_cls();
}

function select_team_ctr(){

  //setting instance of class team
  $team_select= new user_class();

  return $team_select->select_team_cls();

}

function team_details_ctr(){
  
  $team_call = new user_class();


  return $team_call->team_details_cls();
}

function coach_details_ctr(){
  $coach_call = new user_class();

  return $coach_call->coach_details_cls();
}

function count_team_ctr(){
  $count_team = new user_class();

  return $count_team->count_team_cls();
}

function count_women_team_ctr(){
  $count_wteam = new user_class();

  return $count_wteam->count_women_team_cls();
}

function count_men_team_ctr(){
  $count_mteam = new user_class();

  return $count_mteam->count_men_team_cls();
}

function count_tot_player_ctr(){
  $player_count = new user_class();

  return $player_count->count_tot_player_cls();
  
}

function count_men_player_ctr(){
  $mplayer_count = new user_class();

  return $mplayer_count->count_men_player_cls();
  
}
function count_female_player_ctr(){
  $fplayer_count = new user_class();

  return $fplayer_count->count_female_player_cls();
  
}
function count_tot_coaches_ctr(){
  $coach_count = new user_class();

  return $coach_count->count_tot_coaches_cls();
  
}

function count_men_coach_ctr(){
  $mcoach_count = new user_class();

  return $mcoach_count->count_men_coach_cls();
  
}
function count_women_coach_ctr(){
  $wcoach_count = new user_class();

  return $wcoach_count->count_women_coach_cls();
  
}

function count_tot_accounts_ctr(){
  $tuser_count = new user_class();

  return $tuser_count->count_tot_accounts_cls();
  
}

function count_tot_user_ctr(){
  $user_count = new user_class();

  return $user_count->count_tot_user_cls();
  
}

function count_tot_admin_ctr(){
  $admin_count = new user_class();

  return $admin_count->count_tot_admin_cls();
  
}
function coach_ctr($a,$b,$c,$d,$e,$f,$g){

  //setting instance of the class team
    $coach_additon = new user_class();
  
    return $coach_additon->coach_cls($a,$b,$c,$d,$e,$f,$g);
  }
  function delete_player_ctr($a){
    $player_delete = new user_class();

    return $player_delete->delete_player_cls($a);
 }
  
 function player_stat_sel_ctr(){
  $player_goals = new user_class();

  return $player_goals->player_stats_sel_cls();
}
function select_1team_ctr($a){

  //setting instance of class team
  $team_select1= new user_class();

  return $team_select1->select_1team_cls($a);

}
function select_players_based_on_team_ctr($a){
  $select_based_players = new user_class();

  return $select_based_players->select_players_based_on_team_cls($a);
}

function select_stats_view_ctr(){
  $select_stat = new user_class();

  return $select_stat->select_stats_view_cls();
}

function select_team_stats_ctr(){
  $select_team_stats = new user_class();

  return $select_team_stats->select_team_stats_cls();
}
function select_coach_ctr(){
  $select_coach = new user_class();

  return $select_coach->select_coach_cls();
}
function select_coach_stats_ctr(){
  $select_coach_stats = new user_class();

  return $select_coach_stats->select_coach_stats_cls();
}
//--DELETE--//
function delete_coach_ctr($a){
  $delete_coach = new user_class();

  return $delete_coach->delete_coach_cls($a);
}
function delete_team_ctr($a){

  $delete_team = new user_class();

  return $delete_team->delete_team_cls($a);
}

function goalkeeper_stats_sel_ctr(){
  $GK_sel = new user_class();

  return $GK_sel->goalkeeper_stats_sel_cls();
}

function total_matches_team_crt(){
  $total_matches_team = new user_class();

  return $total_matches_team->total_matches_team_cls();
}
function player_ratio_select_ctr(){
  $ratio_sel = new user_class();

  return $ratio_sel->player_ratio_select_cls();

}
function player_ratio_gen_select_ctr(){
  $ratio_sel = new user_class();

  return $ratio_sel->player_ratio_gen_select_cls();
}
function Customer_Login_ctr($email,$password){

  $Customer_login = new user_class();

  return $Customer_login->Customer_Login_cls($email,$password);
}

?>