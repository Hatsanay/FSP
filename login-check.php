
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php
// login.php
include "Database/connect.php";

// Start a session
session_start();

// Get the username and password from the form
// $username = $_POST['user'];
// // $password = $_POST['pwd'];
// $password = MD5($_POST["pwd"]);

$u=$_POST['username'];
// $p=$_POST['password'];
$password = MD5($_POST["password"]);
// Connect to the database
// $conn = mysqli_connect('localhost', 'adminroot', '1234', 'db_crna');


// Check the connection
if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}

// Escape the username and password to prevent SQL injection attacks
$username = mysqli_real_escape_string($con, $u);
$password = mysqli_real_escape_string($con, $password);

// Check if the username and password are correct
$query ="select * from tbl_users where user_username='$username' and user_password='$password' or user_email='$username' and user_password='$password'";
$result = mysqli_query($con, $query);

if (mysqli_num_rows($result) == 1) {
  // The login is successful, so set the logged_in session variable to true and redirect the user to the protected page
  $_SESSION['logged_in'] = true;
  // Retrieve the user's ID and level from the database and store them in the session
  $row = mysqli_fetch_assoc($result);

  $user_id = $row['user_id'];
  $_SESSION['user_id'] = $user_id;

  $user_level = $row['user_lavel'];
  $_SESSION['user_level'] = $user_level;

  $user_password= $row['user_password'];
  $_SESSION['user_password'] = $user_password;

  $user_useusername = $row['user_username'];
  $_SESSION['user_useusername'] = $user_useusername;

  $user_fullname = $row['user_fullname'];
  $_SESSION['user_fullname'] = $user_fullname;

  $user_usedate = $row['user_date'];
  $_SESSION['user_usedate'] = $user_usedate;

  $user_avatar = $row['user_avatar'];
  $_SESSION['user_avatar'] = $user_avatar;




 






  // Check the user's level
  if ($user_level == '1') {
    // The user is an admin, so redirect them to the admin page
    // header('Location: pages\admin-dashboard.php');
    echo "<meta http-equiv='refresh'content='0;URL=rout-admin.php'/>";   
    exit;
  } else{
    // header('Location: home.php'); 
    
    // echo "<meta http-equiv='refresh'content='0;URL=home.php'/>";
    header('Location: index.php');


  }
} else {
  // The login is unsuccessful, so set the error session variable and redirect the user back to the login page
  $_SESSION['error'] = 'Invalid username or password';
  header('Location: index.php');
  echo "<script>";
    echo "alert(\" ชื่อผู้ใช้ หรือ รหัสผ่าน ไม่ถูกต้อง\");"; 
    echo "</script>";
  exit;
}

// Close the connection
mysqli_close($con);
?>

<!-- <script>
			setTimeout(function() {
			swal({
					title: "เกิดข้อผิดพลาด", //ข้อความ เปลี่ยนได้ เช่น บันทึกข้อมูลสำเร็จ!!
					text: "ไม่มีบัญชีนี้อยู่ในระบบ", //ข้อความเปลี่ยนได้ตามการใช้งาน
					type: "false", //success, warning, danger
					timer: 3000, //ระยะเวลา redirect 3000 = 3 วิ เพิ่มลดได้
					showConfirmButton: false //ปิดการแสดงปุ่มคอนเฟิร์ม ถ้าแก้เป็น true จะแสดงปุ่ม ok ให้คลิกเหมือนเดิม
				}, function(){
					window.location.href = "login.php"; //หน้าเพจที่เราต้องการให้ redirect ไป อาจใส่เป็นชื่อไฟล์ภายในโปรเจคเราก็ได้ครับ เช่น admin.php
					});
			});
		</script> -->

<!-- <script>
    function callAlert() {
        Swal.fire({
            title: 'ยินดีต้อนรับ',
            text: 'เข้าสู่เว็บไซต์ Devdit',
            icon: 'success',
            confirmButtonText: 'ยอดเยี่ยมเลย'
        });
    }
</script> -->

