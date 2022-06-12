<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ویرایش محصول</title>
    <link href="assets/style.css" type="text/css" rel="stylesheet">
    <link href="assets/styles.css" type="text/css" rel="stylesheet"> 
    <script src="https://kit.fontawesome.com/8347ab5ff9.js" crossorigin="anonymous"></script>

</head>
<body>
    <p>فروشگاه قطعات سخت افزاری کامپیوتر</p>
    
    <form action="" method="post">
        <p>   محصول</p>
        <div>
            <label for="code_product">کدمحصول  </label>
            <input type="text" name="code_product" id="code_product" value = "<?php if(isset($row['code_product']) ) echo $row['code_product']; ?>" >
        </div>
        <div>
            <label for="name_product">نام محصول</label>
            <input type="text" name="name_product" id="name_product" value = "<?php if(isset($row['name_product']) ) echo $row['name_product']; ?>" >
        </div>
        <div>
            <label for="Number"> موجودی اول دوره</label>
            <input type="text" name="Number" id="Number" value = "<?php if(isset($row['Number']) ) echo $row['Number']; ?>" >
        </div>
        <div>
            <label for="money_product">قیمت محصول </label>
            <input type="text" name="money_product" id="money_product" value = "<?php if(isset($row['money_product']) ) echo $row['money_product']; ?>" >
        </div>
        <div>
            <label for = "image_product"> تصویر محصول </label>
            <input type = "file" name = "image_product" id = "image_product"  >
             <img src = "<?php echo $row['image_product']; ?>">
        </div>
        <div>
            <label for = "about_product">  مشخصات </label>
            <textarea name = "about_product" id = "about_product" value = "<?php if(isset($row['about_product']) ) echo $row['about_product']; ?>"></textarea>
        </div>
        <div>
            نوع محصول: <br>
            <input type="radio" name="type_product" id="bags" value="bags" <?php if( isset($row['type_product']) && $row['type_product'] == 'bags' ) echo 'checked';?>>
            <label for="bags">کامپیوتر</label>
            <br>
            <input type="radio" name="type_product" id="shoe" value="shoe" <?php if( isset($row['type_product']) && $row['type_product'] == 'shoe' ) echo 'checked';?>>
            <label for="shoe">تلفن همراه</label>
        </div>
        <button type="submit" name = "submit" class = "btn"> <i class="fa-solid fa-heart"></i> ویرایش محصول</button>
    </form>
</body>
</html>