<?php

define('HOST','localhost');
define('USER','root');
define('PASS','root');
define('NAME','phpclass');

$connect = mysqli_connect(HOST,USER,PASS,NAME);

$sql = "SELECT * FROM user";

$res = mysqli_query($connect,$sql);

/*while($a = mysqli_fetch_assoc($res)){
    echo $a['id'],'<br>';
    echo $a['login'],'<br>';
    echo $a['parol'],'<br>';
    echo $a['fio'],'<br>';
}*/


?>

<table  border="1" width = '800'>
     <tr>
        <th>ID</th>
        <th>LOGIN</th>
        <th>PAROL</th>
        <th>FIO</th>
        <th>Email</th>
     </tr>
     <tr>
         <?php while($a = mysqli_fetch_assoc($res)): ?>
        <td><?php echo $a['id'],'<br>'?></td>
        <td><?php echo $a['login'],'<br>'?></td>
        <td><?php echo $a['parol'],'<br>'?></td>
        <td><?php echo $a['fio'],'<br>'?></td>
     </tr>
        <?php endwhile ?>

</table>