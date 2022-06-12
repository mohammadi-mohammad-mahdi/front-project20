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
    <h1>محصولات</h1>
    <table class = "datatable">
     <thead>
        <tr>
            <th>کد محصول</th>
            <th>نام محصول </th>
            <th>موجودی</th>
            <th>قیمت</th>
            <th>درباره محصول </th>
            <th> نوع محصول </th>
            <th> اعمال </th>
        </tr>
    </thead>
    <tbody>
    <?php
        if( count( $t_products ) == 0 ){
            echo '<p>محصولی یافت نشد</p>';
        }
        else{
            foreach( $t_products as $t_product ){          
                include 'template/product-row.php';
            }
        }
    ?>
    </tbody>
    </table>
</body>
</html>