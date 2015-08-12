<?php

	/*
	 * 請各位同學注意, 以下程式僅供理解運作原理之用, 未來若有實際應用的需要,
	 * 務必注意程式安全議題
	 */

	//TODO 更換連線資訊
	$dbConn = new mysqli('localhost','user','password','database_name');	
	mysqli_query($dbConn, "SET CHARACTER SET UTF8");

	$dataArray = array();
	//TODO 確認SQL命令
	if ($result = $dbConn->query("SELECT * FROM table3")) {

		while($row = $result->fetch_array(MYSQL_ASSOC)) {
			//TODO 確認是否有中文欄位, 若有則需在此處以urlencode處理
			//$tempValue = $row['chinese_column'];
			//$row['chinese_column'] = urlencode($tempValue);
			
			$dataArray[] = $row;
		}
		echo urldecode(json_encode($dataArray));
	}
		
	$dbConn->close();

?>