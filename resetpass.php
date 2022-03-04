<?php
  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">

    <title>Document</title>
</head>
<body>
      <header>
        <div id="logo">
          <img class="logo" src="img/logo1.svg"> 
        </div>
        <nav>
          <ul>
            <li><a href="/home">หน้าเเรก</a></li>
            <li><a href="/products">ให้เช่า</a></li>
            <li><a href="/about">รายการเเนะนำ</a></li>
            <li><a href="/about">เกี่ยวกับเรา</a></li>
            <li><a href="/about">ติดต่อเรา</a></li>
            <li><a href="/about">ข่าว</a></li>
            <li id="post"><a href="/login" >+ลงประกาศ</a></li>
            <li id="login"><a href="/login" >Login</a></li>
            <li id="signup"><a href="/signup">Signup</a></li>
          </ul>
        </nav>
        <div id="hamburger-icon" onclick="toggleMobileMenu(this)">
          <div class="bar1"></div>
          <div class="bar2"></div>
          <div class="bar3"></div>
          <ul class="mobile-menu">
          <li><a href="/home">หน้าเเรก</a></li>
            <li><a href="/products">ให้เช่า</a></li>
            <li><a href="/about">รายการเเนะนำ</a></li>
            <li><a href="/about">เกี่ยวกับเรา</a></li>
            <li><a href="/about">ติดต่อเรา</a></li>
            <li><a href="/about">ข่าว</a></li>
            <li id="post"><a href="/login" >+ลงประกาศ</a></li>
            <li id="login"><a href="/login" >Login</a></li>
            <li id="signup"><a href="/signup">Signup</a></li>
          </ul>
        </div>
      </header>
    
        
      <div class="card">
            <img src="img/message.png" alt="Email" style="width:70%">
            <h2>รีเซ็ตรหัสผ่าน</h2><br>
            <form>
            <input type="email" id="email" name="email" placeholder="Enter Email"><br><br>
           <a class="button" href="newpass.php">ต่อไป</a>
            </form><br>
      </div>

          <script src="index.js"></script>
</body>
</html>