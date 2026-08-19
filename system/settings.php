<?php
global $mysqli, $setting;

$setting = array();

if(isset($mysqli) && !mysqli_connect_errno()){
	$result = $mysqli->query("SELECT * FROM boom_setting WHERE id = '1' LIMIT 1");
	if($result && $result->num_rows > 0){
		$setting = $result->fetch_assoc();
	}
}
?>
