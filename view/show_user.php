<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="assets/style.css" type="text/css" rel="stylesheet"> 
    <script src="https://kit.fontawesome.com/8347ab5ff9.js" crossorigin="anonymous"></script>
    <title>کاربران</title>
   
</head>
<body>
<header>
        
        <nav>
               
               <div class = "col">
                 <div class = "as">
                     <ul>
                         <li><i class="fa-solid fa-user"></i><a href="">کاربران</a></li>-->
                         <li ><i class="fa-solid fa-shoe-prints"></i><a href="">محصولات</a></li>
                         <li ><i class="fa-solid fa-bag-shopping"></i><a href="">سفارشات</a></li>
                         <li ><i class="fa-solid fa-check-double"></i><a href="">درباره ما</a></li>
                         <li ><i class="fa-solid fa-check-double"></i><a href="">تیکت ها</a></li>
                         <li ><i class="fa-solid fa-message"></i><a href="">پیام ها</a></li>
                     </ul>
                     <div class="logo">
                      <a href="#">فروشگاه قطعات سخت افزاری کامپیوتر    </a>
                 </div>
                 </div>
                </div>
                
                 </nav>
                
        </header>
    <h1>کاربران</h1>
    <table class = "datatable">
     <thead>
        <tr>
            <th>نام و نام خانوادگی</th>
            <th>نام کاربری</th>
            <th>ایمیل</th>
            <th>جنسیت</th>
            <th>سطح دسترسی</th>
            <th> اعمال </th>
        </tr>
    </thead>
    <tbody>
    <?php
        if( count( $users ) == 0 ){
            echo '<p>کاربری یافت نشد</p>';
        }
        else{
            foreach( $users as $user ){          
                include 'template/user-row.php';
            }
        }
    ?>
    </tbody>
    </table>
    <footer class="footer">
    <div >
<p> ارتباط با ما توسط ایمیل mohammad.mahdi9720@gmail.com </p>
    &copy تمامی محتویات سایت محفوظ است
    </div>
</footer>
</body>
</html>