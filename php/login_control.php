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
		
	if (isset($_POST['lUsername']) && isset($_POST['lPassword']))
	{
		$lusername = $_POST['lUsername'];
		$lpassword = $_POST['lPassword'];
		
		$sql = "SELECT USERNAME, PASSWORD FROM tbl_user_login where USERNAME='$lusername'";
		$result = $conn->query($sql);
		
		if ($result->num_rows > 0) 
		{
			while($row = mysqli_fetch_assoc($result)) 
			{
				$cpassword = $row["PASSWORD"];
				if ($cpassword == $lpassword)
				{
					$msg = array('res_status' => "T_OK", 'res_msg' => 'Login Successful');
				}
				else
				{
					$msg = array('res_status' => "T_NG", 'res_msg' => 'Wrong Password');
				}
			}
		}
		else
		{
			$msg = array('res_status' => "T_NG", 'res_msg' => 'User does not exist');
		}
		echo json_encode($msg);
	}
	
	$conn->close();
?>