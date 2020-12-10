<?php

include "index.php";

$sql = "SELECT * FROM user";

$res = mysqli_query($db,$sql);

echo mysqli_num_rows($res);
$users = array();
while($row = mysqli_fetch_assoc($res)){
    $users[] = $row;
};

print_r($users);

?>

<table border = "1", width="800">
    <tr>
        <th>ID</th>
        <th>login</th>
        <th>parol</th>
        <th>fio</th>
        
    </tr>
    <?php foreach($users as $user): ?>
    <tr>
        <td><?= $user['id']?></td>
        <td><?= $user['login']?></td>
        <td><?= $user['parol']?></td>
        <td><?= $user['fio']?></td>
        
    </tr>
    <?php endforeach ?>
</table>