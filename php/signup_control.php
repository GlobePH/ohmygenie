<?php
    header('Content-Type: application/json');
	$servername = "gator4004";
	$username = "ptutor_root";
	$password = "!123456";
	$dbname = "ptutor_ohmygenie";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);

	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 
		
	if (isset($_POST['frmUsername']) && isset($_POST['frmPassword']))
	{
		$frmusername = $_POST['frmUsername'];
		$frmpassword = $_POST['frmPassword'];
		
		$sql = "SELECT USERNAME FROM tbl_user_login where USERNAME='$frmusername'";
		$result = $conn->query($sql);
		
		if ($result->num_rows > 0) 
		{
			$msg = array('res_status' => "T_NG", 'res_msg' => 'Username already exists');
		}
		else
		{
			$sql = "INSERT INTO tbl_user_login(USERNAME, PASSWORD) values ('$frmusername','$frmpassword')";
			echo $sql;
			$result = $conn->query($sql);
			if($result){
				$msg = array('res_status' => "T_OK", 'res_msg' => 'User Created Successfully');
			}else{
				$msg = array('res_status' => "T_NG", 'res_msg' => 'User Registration Failed');
			}
		}
		echo json_encode($msg);
	}
	
	$conn->close();
?>