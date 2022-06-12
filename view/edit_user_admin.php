<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="assets/style.css" type="text/css" rel="stylesheet">
    <link href="assets/styles.css" type="text/css" rel="stylesheet"> 
    <script src="https://kit.fontawesome.com/8347ab5ff9.js" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> تغییر اطلاعات کاربر</title>
    
        
</head>
<body>
    <p>فروشگاه قطعات سخت افزاری کامپیوتر</p>
    
    <form action="" method="post">
        <p>   تغییر اطلاعات کاربر</p>
        <div >
            <label for="fname">نام کامل</label>
            <input type="text" name="fname" id="fname" value = "<?php if(isset($row['fullname']) ) echo $row['fullname']; ?>">
        </div >
        <div >
            <label for="usern">نام کاربری</label>
            <input type="text" name="usern" id="usern" value = "<?php if(isset($row['username']) ) echo $row['username']; ?>">
        </div>
        <div >
            جنسیت: <br>
            <input type="radio" name="gender" id="male" value="male" <?php if( isset($row['gender']) && $row['gender'] == 'male' ) echo 'checked';?>>
            <label for="male">مرد</label>
            <br>
            <input type="radio" name="gender" id="female" value="female" <?php if( isset($row['gender']) && $row['gender'] == 'female' ) echo 'checked';?>>
            <label for="female">زن</label>
        </div>
        <button type="submit" name = "submit" class="btn"><i class="fa-solid fa-heart"></i> ثبت </button>
    </form>
</body>
</html>