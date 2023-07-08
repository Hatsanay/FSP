<!DOCTYPE html>
<html>
<head>
  <title>สมัครสมาชิก</title>
  <link rel="stylesheet" href="signup.css">
</head>
<body>

<script type="text/javascript">
function fncSubmit()
{
    if(document.getElementById('username').value == "")
    {
        alert('กรุณากรอกชื่อผู้ใช้');
        
        return false;
    }

    }
    else if(document.getElementById('password').value == "")
    {
        alert('กรุณากรอกรหัสผ่าน');
        return false;
    }
    else if(document.getElementById('fullname').value == "")
    {
        alert('กรุณากรอกชื่อ');
        return false;
    }
    else if(document.getElementById('email').value == "")
    {
        alert('กรุณากรอกอีเมล์');
        return false;
    }
    else if(document.getElementById('tel').value == "")
    {
        alert('กรอกเบอร์โทร');
        return false;
    }

</script>

  <div class="container">
    <h2 style="text-align: center;">สมัครสมาชิก</h2>
    <form action="signup-save.php" method="POST" onsubmit="return fncSubmit();">
      <div class="row">
        <div class="column">
          <div class="form-group">
            <label for="username">ชื่อผู้ใช้:</label>
            <input type="text" id="username" name="username" placeholder="กรอกชื่อผู้ใช้">
          </div>
        </div>
        <div class="column">
          <div class="form-group">
            <label for="password">รหัสผ่าน:</label>
            <input type="password" id="password" name="password" placeholder="กรอกรหัสผ่าน">
          </div>
        </div>
      </div>
      <div class="form-group">
        <label for="name">ชื่อ-นามสกุล:</label>
        <input type="text" id="fullname" name="fullname" placeholder="กรอกชื่อ">
      </div>
      <div class="form-group">
        <label for="email">อีเมล์:</label>
        <input type="email" id="email" name="email" placeholder="กรอกอีเมล์">
      </div>
      <div class="form-group">
        <label for="name">เบอร์โทร:</label>
        <input type="text" id="tel" name="tel" placeholder="กรอกเบอร์โทร">
      </div>
      <div class="form-group">
        <button type="submit" name="submit">สมัครสมาชิก</button>
      </div>
    </form>
  </div>

  <script>
    function fncSubmit() {
      // โค้ดการตรวจสอบและดำเนินการส่งข้อมูลไปยังเซิร์ฟเวอร์
    }
  </script>
</body>
</html>
