<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> ثبت نام</title>
    <link href="assets/style.css" type="text/css" rel="stylesheet">
    <link href="assets/styles.css" type="text/css" rel="stylesheet"> 
    
    <script src="https://kit.fontawesome.com/8347ab5ff9.js" crossorigin="anonymous"></script>
</head>
<body>
    <p>فروشگاه قطعات سخت افزاری کامپیوتر </p>
    
    <form action="" method="post">
        <p>  ثبت نام</p>
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
        <div class = "form-input-component">
            جنسیت: <br>
            <input type="radio" name="gender" id="male" value="male" >
            <label for="male">مرد</label>
            <br>
            <input type="radio" name="gender" id="female" value="female" >
            <label for="female">زن</label>
        </div>
        <button type="submit" name = "submit" class = "btn">
        <i class="fa-solid fa-heart"></i> 
         ثبت نام
        </button>
    </form>
</body>
</html>