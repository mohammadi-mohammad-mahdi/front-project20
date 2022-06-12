<tr>
    <td><?php echo $t_product['code_product']; ?></td>
    <td><?php echo $t_product['name_product']; ?></td>
    <td><?php echo $t_product['Number']; ?></td>
    <td><?php echo $t_product['money_product']; ?></td>
    <td><?php echo $t_product['about_product']; ?></td>
    <td><?php if($t_product['type_product'] == 'shoe')   echo 'کامپیوتر';  else{echo 'تلفن همراه';}   ?></td>
    <td> <a href="add_products.php" class = "as"> <i class="fa-thin fa-plus"></i></a> </td>
    <td> <a href="edit_products.php?code_product=<?php echo $t_product['code_product']; ?>" class = ""> <i class="fa-solid fa-edit"></i></a> </td>
    <td> <a href="delete_product.php?code_product=<?php echo $t_product['code_product']; ?>" class = ""> <i class="fa-solid fa-trash"></i></a> </td>
</tr>