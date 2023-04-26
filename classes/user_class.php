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

class user_class extends db_connection
{
	//--INSERT--//
	function user_registration_cls($a,$b,$c,$d,$e,$f,$g)
	{
		// encrypting the password

		$password_encrypted = password_hash($c, PASSWORD_DEFAULT);

		//insert sql function
		
		$sql = "INSERT INTO `users`(`User_image`, `user_name`, `user_email`, `user_pass`, `customer_contact`, `Nationality`, `user_role`) VALUES ('$a','$b','$c','$password_encrypted','$e','$f','$g')";
		echo $sql;

		return $this->db_query($sql);
	}

	
function Customer_Login_cls($email,$password){

		// encrypting the password
		$password_encrypted = password_hash($password, PASSWORD_DEFAULT);

		//select email and password for login.
		$sql = "SELECT `User_image`, `user_id`, `user_name`, `user_email`, `user_pass`, `customer_contact`, `Nationality`, `user_role` FROM `users` WHERE user_email='$email'";

		return $this->db_fetch_one($sql);
	}
	//--SELECT--//


function customer_details_cls(){

	$sql = "SELECT `User_image`, `user_id`, `user_name`, `user_email`, `user_pass`, `customer_contact`, `Nationality`, `user_role` FROM `users` WHERE `user_role`= 1";

	return $this->db_fetch_all($sql);
}

function player_details_cls(){
	$sql= "SELECT player.player_id, player.player_image, player.player_position, player.player_name, player.jersey_number, player.Nationality,team.team_name FROM player INNER JOIN team ON player.team_id = team.team_id";

	return $this->db_fetch_all($sql);

}

function select_team_cls(){
	$sql="SELECT `team_id`, `team_name` FROM `team` ORDER by `team_id` ASC";
	
	return $this->db_fetch_all($sql);
}
	//--DELETE--//
function team_details_cls(){
	$sql="SELECT `team_id`,`team_name`,`team_image` FROM `team`";
	return $this->db_fetch_all($sql);

}

function coach_details_cls(){
	$sql="SELECT coach_info.coach_id, coach_info.coach_name, coach_info.position, coach_info.team_id, coach_info.Nationality, coach_info.type_of_league, coach_info.coach_image, team.team_name FROM coach_info INNER JOIN team ON coach_info.team_id=team.team_id";

	return $this->db_fetch_all($sql);
}

function count_team_cls(){
	$sql="SELECT COUNT(team_id) AS teamcount FROM team";

	return $this->db_fetch_all($sql);

}

function count_women_team_cls(){
	$sql="SELECT COUNT(team_id) AS teamcount FROM team WHERE team_name LIKE '%women'";

	return $this->db_fetch_all($sql);

}
function count_men_team_cls(){
	$sql="SELECT COUNT(team_id) AS teamcount FROM team WHERE team_name NOT LIKE '%women'";

	return $this->db_fetch_all($sql);

}
function count_tot_player_cls(){
	$sql="SELECT COUNT(player_id) AS playercount FROM player";

	return $this->db_fetch_all($sql);
}
function count_men_player_cls(){
	$sql="SELECT COUNT(player_id) AS Mplayercount FROM player WHERE Gender = 'Male'";

	return $this->db_fetch_all($sql);

}
function count_female_player_cls(){
	$sql="SELECT COUNT(player_id) AS Mplayercount FROM player WHERE Gender = 'Female'";

	return $this->db_fetch_all($sql);

}

function count_tot_coaches_cls(){
	$sql="SELECT COUNT(coach_id) AS playercount FROM coach_info";

	return $this->db_fetch_all($sql);
}
function count_men_coach_cls(){
	$sql="SELECT COUNT(coach_id) AS playercount FROM coach_info WHERE Gender = 'Male'";

	return $this->db_fetch_all($sql);

}
function count_women_coach_cls(){
	$sql="SELECT COUNT(coach_id) AS playercount FROM coach_info WHERE Gender = 'Female'";

	return $this->db_fetch_all($sql);

}
function count_tot_accounts_cls(){
	$sql="SELECT COUNT(user_id) AS usercount FROM users";

	return $this->db_fetch_all($sql);
}

function count_tot_user_cls(){
	$sql="SELECT COUNT(user_id) AS usercount FROM users WHERE user_role=1";

	return $this->db_fetch_all($sql);
}
function count_tot_admin_cls(){
	$sql="SELECT COUNT(user_id) AS usercount FROM users WHERE user_role=2";

	return $this->db_fetch_all($sql);
}

function coach_cls($a,$b,$c,$d,$e,$f,$g){
	$sql= "INSERT INTO `coach_info`(`coach_name`, `position`, `team_id`, `Nationality`, `type_of_league`, `coach_image`,`Gender`) VALUES ('$a','$b','$c','$d','$e','$f','$g')";

	return $this->db_query($sql);
}

function delete_player_cls($a){
	$sql="DELETE FROM `player` WHERE `player_id`='$a'";

	return $this->db_query($sql);
}

	//--SELECT--//
	function player_stats_sel_cls(){
		$sql="SELECT player.player_image,player.player_name, player_stats.goals, player_stats.assists FROM player INNER JOIN player_stats ON player_stats.player_id = player.player_id WHERE player.Gender='Male' AND player.player_position !='Goalkeeper' ORDER BY player_stats.goals DESC";
	
		return $this->db_fetch_all($sql);
		
}
function player_ratio_gen_select_cls(){
	$sql="SELECT player.player_name,player.player_position,player_stats.goals_per_game,player_stats.shots_per_game,player_stats.passes_per_game,player_stats.interception_per_game,player_stats.tackles_per_game,player_stats.saves_per_game,player_stats.matches_played FROM player_stats INNER JOIN player ON player.player_id=player_stats.player_id WHERE player.Gender='Male' ORDER BY player_stats.goals DESC" ;

	return $this->db_fetch_all($sql);
}
function player_ratio_select_cls(){
	$sql="SELECT player.player_name,player.player_position,player_stats.goals_per_game,player_stats.shots_per_game,player_stats.passes_per_game,player_stats.interception_per_game,player_stats.tackles_per_game,player_stats.saves_per_game,player_stats.matches_played FROM player_stats INNER JOIN player ON player.player_id=player_stats.player_id WHERE player.Gender='Male'AND player.player_position !='Goalkeeper'  ORDER BY player_stats.goals DESC" ;

	return $this->db_fetch_all($sql);
}

function select_players_based_on_team_cls($a){
	$sql="SELECT `player_id`,`player_name` FROM `player` WHERE `team_id`='$a'";

	return $this->db_fetch_all($sql);
}

function select_1team_cls($a){
	$sql="SELECT `team_id`, `team_name` FROM `team` WHERE `team_id`='$a'";
	return $this->db_fetch_all($sql);
}

function select_stats_view_cls(){
	$sql = "SELECT player.player_image, player.player_name, player_stats.goals, player_stats.assists, player_stats.matches_played, player_stats.games_won FROM player_stats INNER JOIN player ON player_stats.player_id = player.player_id";

	return $this->db_fetch_all($sql);
}

function select_team_stats_cls(){
	$sql = "SELECT team.team_image, team.team_name, team_stats.goals, team_stats.assists,team_stats.total_no_of_players, team_stats.goals_conceded, team_stats.games_drawn, team_stats.season,team_stats.games_won, team_stats.games_lost FROM team_stats INNER JOIN team ON team_stats.team_id = team.team_id";

	return $this->db_fetch_all($sql);
}
function select_coach_cls(){
	$sql="SELECT `coach_id`, `coach_name` FROM `coach_info`";

	return $this->db_fetch_all($sql);
}
function select_coach_stats_cls(){
	$sql="SELECT coach_info.coach_id, coach_info.coach_name, coach_stats.wins,coach_info.coach_image,coach_stats.wins,coach_stats.draw,coach_stats.loss,coach_stats.season FROM coach_stats INNER JOIN coach_info ON coach_stats.coach_id = coach_info.coach_id";

	return $this->db_fetch_all($sql);
}
function delete_coach_cls($a){
	$sql="DELETE FROM `coach_info` WHERE `coach_id`='$a'";

	return $this->db_query($sql);
}
function delete_team_cls($a){

	$sql = "DELETE FROM `team` WHERE `team_id`='$a'";

	return $this->db_query($sql);
}
function goalkeeper_stats_sel_cls(){
	
	$sql="SELECT player_stats.cleansheet,player_stats.saves,player_stats.crosses_caught,player_stats.matches_played,player.player_name,player.player_position,player_stats.saves_per_game,player_stats.passes_per_game FROM player_stats INNER JOIN player ON player_stats.player_id = player.player_id WHERE player.player_position='Goalkeeper' ORDER BY player_stats.cleansheet DESC";

	return $this->db_fetch_all($sql);
}
function total_matches_team_cls(){


	$sql="SELECT SUM(`games_won`+`games_lost`+`games_drawn`) AS Total_matches FROM `team_stats`";

	return $this->db_fetch_all($sql);
}
}

?>