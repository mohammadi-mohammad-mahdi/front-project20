<tr>
    <td><?php echo $user['fullname']; ?></td>
    <td><?php echo $user['username']; ?></td>
    <td><?php echo $user['email']; ?></td>
    <td><?php if($user['gender'] == 'male')   echo 'مرد';  else{echo 'زن';}   ?></td>
    <td><?php echo $user['role']; ?></td>
    <!--
    <td> <?php if($user['role'] == 'normal')   echo 'کاربر';  else{echo 'مدیر';}   ?> </td>-->
    <td> <a href="register.php" class = "as"> <i class="fa-thin fa-plus"></i></a> </td>
    <td> <a href="edit_user.php?id=<?php echo $user['id']; ?>" class = ""> <i class="fa-solid fa-edit"></i></a> </td>
    <td> <a href="delete_user.php?id=<?php echo $user['id']; ?>" class = ""> <i class="fa-solid fa-trash"></i></a> </td>
</tr>