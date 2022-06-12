<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> تغییر اطلاعات</title>
    <link href="assets/style.css" type="text/css" rel="stylesheet">
    <link href="assets/styles.css" type="text/css" rel="stylesheet"> 
    <script src="https://kit.fontawesome.com/8347ab5ff9.js" crossorigin="anonymous"></script>s
        
</head>
<body>
<header>
        
        <nav>
               
               <div class = "col">
                 <div class = "as">
                     <ul>
                         <li><i class="fa-solid fa-user"></i><a href="">کاربران</a></li>
                         <li ><i class="fa-solid fa-shoe-prints"></i><a href="">محصولات</a></li>
                         <li ><i class="fa-solid fa-bag-shopping"></i><a href="">سفارشات</a></li>
                         <li ><i class="fa-solid fa-check-double"></i><a href="">درباره ما</a></li>
                         <li ><i class="fa-solid fa-check-double"></i><a href="">تیکت ها</a></li>
                         <li ><i class="fa-solid fa-message"></i><a href="">پیام ها</a></li>
                     </ul>
                     <div class="logo">
                      <a href="#">فروشگاه قعات سخت افزاری کامپیوتر    </a>
                 </div>
                 </div>
                </div>
                
                 </nav>
                
        </header>
    <p>فروشگاه قطعات سخت افزای کامپیوتر</p>
    
    <form action="" method="post">
        <p>   تغییر اطلاعات</p>
        <div >
            <label for="fname">نام کامل</label>
            <input type="text" name="fname" id="fname" value = "<?php if(isset($row['fullname']) ) echo $row['fullname']; ?>">
        </div >
        <div >
            <label for="usern">نام کاربری</label>
            <input type="text" name="usern" id="usern" value = "<?php if(isset($row['username']) ) echo $row['username']; ?>">
        </div>
        <div >
            <label for="pass">کلمه عبور</label>
            <input type="password" name="pass" id="pass">
        </div>
        <div >
            <label for = "email">آدرس ایمیل: </label>
            <input type = "email" name = "email" id = "email">
        </div>
        <div >
            جنسیت: <br>
            <input type="radio" name="gender" id="male" value="male" <?php if( isset($row['gender']) && $row['gender'] == 'male' ) echo 'checked';?>>
            <label for="male">مرد</label>
            <br>
            <input type="radio" name="gender" id="female" value="female" <?php if( isset($row['gender']) && $row['gender'] == 'female' ) echo 'checked';?>>
            <label for="female">زن</label>
        </div>
        <button type="submit" name = "submit" class = "btn"><i class="fa-solid fa-heart"></i> ثبت </button>
    </form>
    <footer class="footer">
    <div >
<p> ارتباط با ما توسط ایمیل mohammad.mahdi9720@gmail.com </p>
    &copy تمامی محتویات سایت محفوظ است
    </div>
</footer>
</body>
</html>