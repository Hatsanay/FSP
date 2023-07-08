
<?php
	include "../../../Database/connect.php";
    if(isset($_POST['submit']))
	{
        $username = $_POST['username'];
        $password = MD5($_POST["password"]);
        // $password = $_POST['password'];
        $fullname = $_POST['fullname'];
        $email = $_POST['email'];
        $tel = $_POST['tel'];
        
        $date = date('Y-m-d H:i:s');
        $level = "1";
        $avatar = "https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_1280.png";

		// $id = mysqli_real_escape_string($con,$_POST['province']);
		$sql_insert =
		"INSERT INTO tbl_users(user_username,user_password,user_email,user_fullname	,user_tel,user_date,user_lavel,user_avatar) 
	    VALUES ('".$username."','".$password."','".$email."','".$fullname."','".$tel."','".$date."','".$level."','".$avatar."')";
		if(mysqli_query($con,$sql_insert))
		{
            echo '<script>alert("บันทึกเสร็จสิ้น")</script>';
            // echo "<meta http-equiv='refresh'content='0;URL=index.php'/>";
            header('Location: ../../../index.php');

            
		}

	}

?>