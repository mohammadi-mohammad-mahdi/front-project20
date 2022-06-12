<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="../assets/style.css" type="text/css" rel="stylesheet">
    <link href="../assets/styles.css" type="text/css" rel="stylesheet"> 
    <script src="https://kit.fontawesome.com/8347ab5ff9.js" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> ثبت نام</title>
    <style>
        
    </style>
</head>
<body>
    <p>فروشگاه قطعات سخت افزاری کامپیوتر</p>
    
    <form action="../add_user_admin.php" method="post">
        <p>  ثبت نام کاربر</p>
        <div>
            <label for="fname">نام کامل</label>
            <input type="text" name="fname" id="fname" placeholder="محمد مهدی محمدی " >
        </div>
        <div>
            <label for="usern">نام کاربری</label>
            <input type="text" name="usern" id="usern" placeholder="mahdi9720" >
        </div>
        <div>
            <label for="pass">کلمه عبور</label>
            <input type="password" name="pass" id="pass" placeholder="Aa123456" >
        </div>
        <div>
            <label for = "email">آدرس ایمیل: </label>
            <input type = "email" name = "email" id = "email">
        </div>
        
        <button type="submit" name = "submit" class="btn"><i class="fa-solid fa-heart"></i>  ثبت نام کاربر</button>
    </form>
</body>
</html>