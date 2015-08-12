<?php

	/*
	 * 請各位同學注意, 以下程式僅供理解運作原理之用, 未來若有實際應用的需要,
	 * 務必注意程式安全議題
	 */

	//TODO 更換連線資訊
	$dbConn = new mysqli('localhost','user','password','database_name');
	mysqli_query($dbConn, "SET CHARACTER SET UTF8");
	
	//TODO 確認傳入參數
	$name = $_POST['name'];
	$level = $_POST['level'];
	
	//TODO 更換 table_name、欄位、欄位值
	$sql = "INSERT INTO table_name (name, level) VALUES ('$name', $level)";
	
	$dataArray = array();
	if ($result = $dbConn->query($sql)) {
		$dataArray['STATUS'] = 'OK';
	}else{
		$dataArray["STATUS"] = 'ERROR';
	}

	echo json_encode($dataArray);
	
	$dbConn->close();
	
?>