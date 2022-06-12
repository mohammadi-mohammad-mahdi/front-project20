<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="assets/style.css" type="text/css" rel="stylesheet"> 
    <script src="https://kit.fontawesome.com/8347ab5ff9.js" crossorigin="anonymous"></script>
    <title>محصولات</title>
   
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
                  <a href="#">فروشگاه قطعات سخت افزاری کامپیوتر    </a>
             </div>
             </div>
            </div>
            
             </nav>
            
    </header>
    <div class = "gird">
    <aside>
    
             <div class = "as1">
                 <ul>
                     <li> <input type="checkbox" class="check"><p class="we"> تازه ترین  </p></li>
                     <li ><input type="checkbox" class="check"><p class="we"> قدیمی ترین  </p></li>
                     <li ><input type="checkbox" class="check"><p class="we">  موجود  </p></li>
                     <li ><input type="checkbox" class="check"><p class="we">  تخفیف دار  </p></li>
                     <li ><input type="checkbox" class="check"><p class="we"> کامپیوتر   </p></li>
                     <li ><input type="checkbox" class="check"><p class="we"> تلفن همراه   </p></li>
                 </ul>
                 <div class="logo">
                  <a href="#">فروشگاه قطعات سخت افزاری کامپیوتر </a>
             </div>
             </div>

    </aside>
    <main>
    <h1 class = "display">محصولات</h1>
    
   
    <div class="cards">
    <?php
        if( count( $products ) == 0 ){
            echo '<p>محصولی یافت نشد</p>';
        }
        else{
            foreach( $products as $product ){          
                include 'template/product_card.php';
            }
        }
    ?>
    </div>
   
    </main>
    </div>
</body>
<footer class="footer">
    <div >
<p> ارتباط با ما توسط ایمیل mohammad.mahdi9720@gmail.com </p>
    &copy تمامی محتویات سایت محفوظ است
    </div>
</footer>
</html>