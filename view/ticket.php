<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../assets/style.css" type="text/css" rel="stylesheet">
    <link href="../assets/styles.css" type="text/css" rel="stylesheet"> 
    <script src="https://kit.fontawesome.com/8347ab5ff9.js" crossorigin="anonymous"></script>
    <title>پشتیبانی</title>
</head>
<body>

    <form action = "../ticket.php" method = "post">
        <h1> تیکت پشتیبانی</h1>
        <div class="vs">
            <label for = "name">نام کاربری: </label>
            <input type = "text" name = "username" id = "username">
        </div>
        <div class="vs">
            <label for = "email">آدرس ایمیل: </label>
            <input type = "email" name = "email" id = "email">
        </div>
        <div class="vs">
            <label for = "phone"> موضوع : </label>
            <input type = "text" name = "subject" id = "subject">
        </div>
    
        <div class="vs">
            <label for = "list"> اولویت : </label>
            <input type="text" list="Priority" name = "Priority" id = "Priority">
            <datalist id="Priority">
                <option value="Low">کم</option>
                <option value="medium">متوسط</option>
                <option value="instantaneous">فوری</option>
            </datalist>

        </div>

        <div>
            <label for = "textt">متن پیام: </label>
            <textarea name = "text" id = "text"></textarea>
        </div>
        
            <input type = "submit" value = "ارسال" class="btn">
        </form>
      
</body>
</html>