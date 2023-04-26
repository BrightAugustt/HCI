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

class player_class extends db_connection
{
	//--INSERT--//
	function player_addition_cls($a,$b,$c,$d,$e,$f,$g){
		$sql= "INSERT INTO `player`(`player_image`, `player_position`, `player_name`, `team_id`, `jersey_number`, `Nationality`,`Gender`) 
        VALUES ('$a','$b','$c','$d','$e','$f','$g')";

		return $this->db_query($sql);
	}

	function player_stats_addition_cls($a,$b,$c,$d,$e,$f,$g,$h,$i,$j,$k,$l,$m,$n,$o,$p,$q,$r,$s,$t,$u,$v,$w,$x,$y,$z,$a1,$a2){
		$sql = "INSERT INTO `player_stats`(`player_id`, `goals`, `assists`, `fouls`, `yellow_cards`, `red_cards`, `passes`, `shots`, `shots_on_target`, `tackles`, `blocked_shots`, `crosses`, `clearances`, `saves`,`cleansheet`, `interceptions`, `crosses_caught`, `matches_played`, `games_won`, `games_lost`, `games_draw`,`goals_per_game`,`shots_per_game`, `passes_per_game`, `interception_per_game`, `tackles_per_game`, `saves_per_game`, `season`) VALUES ('$a','$b','$c','$d','$e','$f','$g','$h','$i','$j','$k','$l','$m','$n','$o','$p','$q','$r','$s','$t','$u','$v','$w','$x','$y','$z','$a1','$a2')";

		//  echo($sql);
		return $this->db_query($sql);
	}

	function delete_player_cls($a){
		$sql="DELETE FROM `player` WHERE `player_id`= '$a'";
	
		return $this->db_query($sql);
	}

	function player_dis_class1()
	{
		$sql = "SELECT player_image, player_name, player_position FROM `player` ORDER by RAND() limit 2";
		return $this->db_fetch_one($sql);
	
	}


	function player_dis_class2()
	{
		$sql = "SELECT player_image, player_name, player_position FROM `player`  ORDER by RAND() limit 1";
		return $this->db_fetch_one($sql);
	
	}

	function player_dis_class3()
	{
		$sql = "SELECT player_image, player_name, player_position FROM `player` ORDER by RAND() limit 1";
		return $this->db_fetch_one($sql);
	
	}

	function player_dis_class4()
	{
		$sql = "SELECT player_image, player_name, player_position FROM `player` ORDER by RAND() limit 1";
		return $this->db_fetch_one($sql);
	
	}
	function select_log_table_class(){
		$sql = "SELECT team.team_name,team.team_image,team_stats.Points,team_stats.goals,team_stats.goals_conceded,team_stats.goal_diff,team_stats.games_won,team_stats.games_lost,team_stats.games_drawn FROM team_stats INNER JOIN team ON team_stats.team_id = team.team_id ORDER BY team_stats.points DESC";
		return $this->db_fetch_all($sql);
	}
	function select_results_class(){
		$sql="SELECT t1.team_name AS team1, t2.team_name AS team2, t1.team_image AS image1,t2.team_image AS image2,results.Team1_score,results.Team2_score FROM results JOIN team t1 ON results.team_id1 = t1.team_id JOIN team t2 ON results.team_id2 = t2.team_id";
		return $this->db_fetch_all($sql);
	}
	function select_fixtures_class(){
		$sql="SELECT t1.team_name AS team1, t2.team_name AS team2, t1.team_image AS image1,t2.team_image AS image2,CONCAT(DAY(Date),' ',MONTHNAME(Date))AS gamedate, fixtures.stadium FROM fixtures JOIN team t1 ON fixtures.team_id = t1.team_id JOIN team t2 ON fixtures.team_id1 = t2.team_id ORDER by Date ASC";

		return $this->db_fetch_all($sql);
	}
	function select_team_class(){
		$sql="SELECT `team_id`, `team_name`,`team_image` FROM `team` WHERE `team_name` NOT LIKE '%women'";
		return $this->db_fetch_all($sql);
	}

	function select_tops_and_asst_class(){
		$sql="SELECT player_stats.player_id,player_stats.goals,team.team_name,player.player_name FROM player_stats INNER JOIN player ON player.player_id = player_stats.player_id INNER JOIN team ON player.team_id = team.team_id ORDER BY player_stats.goals DESC limit 4";
		return $this->db_fetch_all($sql);
	}

	function select_tops_class(){
		$sql="SELECT player_stats.player_id,player.player_image,player_stats.goals,team.team_name,player.player_name FROM player_stats INNER JOIN player ON player.player_id = player_stats.player_id INNER JOIN team ON player.team_id = team.team_id ORDER BY player_stats.goals DESC limit 10";
		return $this->db_fetch_all($sql);
	}

	function select_filter_stats($a,$b){
		$sql="SELECT player_stats.player_id,player.player_image,player_stats.goals,team.team_name,player.player_name FROM player_stats INNER JOIN player ON player.player_id = player_stats.player_id INNER JOIN team ON team.team_id = '$a' AND player_stats.season = '$b'";

		return $this->db_fetch_all($sql);

	}

	function select_asst_class(){
		$sql="SELECT player_stats.player_id,player_stats.assists,team.team_name,player.player_name FROM player_stats INNER JOIN player ON player.player_id = player_stats.player_id INNER JOIN team ON player.team_id = team.team_id ORDER BY player_stats.assists DESC limit 4";
		return $this->db_fetch_all($sql);
	}
	function select_cleansheet_class(){
		$sql="SELECT player_stats.player_id,player.player_position,player_stats.cleansheet,team.team_name,player.player_name FROM player_stats INNER JOIN player ON player.player_id = player_stats.player_id INNER JOIN team ON player.team_id = team.team_id WHERE player.player_position like '%Goalkeeper'ORDER BY player_stats.cleansheet DESC limit 4";
		return $this->db_fetch_all($sql);
	}
	function select_coach_class(){
		$sql="SELECT coach_info.coach_id,coach_info.coach_name,coach_info.position,coach_info.Nationality,coach_info.coach_image,team.team_name FROM coach_info JOIN team ON team.team_id = coach_info.team_id";
		return $this->db_fetch_all($sql);
	}
	function select_team_cls(){
		$sql="SELECT `team_id`, `team_name` FROM `team` ORDER by `team_id` ASC";
		
		return $this->db_fetch_all($sql);
	}
	
	//--SELECT--//


	//--UPDATE--//



	//--DELETE--//
	

}

?>