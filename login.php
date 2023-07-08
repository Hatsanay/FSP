<!DOCTYPE html>
<html>
<head>
  <title>Login Page</title>
  <link rel="stylesheet" href="login.css">
  
<body>
  <div class="container">
    <h2 style="text-align: center;">เข้าสู่ระบบ</h2>
    <form action="login-check.php" method="POST";>
      <div class="form-group">
        <label for="username">ชื่อผู้ใช้:</label>
        <input type="text" id="username" name="username" placeholder="กรอกชื่อผู้ใช้">
      </div>
      <div class="form-group">
        <label for="password">รหัสผ่าน:</label>
        <input type="password" id="password" name="password" placeholder="กรอกรหัสผ่าน">
      </div>
      <div class="form-group">
        <button>เข้าสู่ระบบ</button>
        <a href="pages\Admin\SingUp\signup.php" ><button type="button" class="signup-button">สมัครสมาชิก</button></a>
      </div>
    </form>
  </div>
</body>
</html>
