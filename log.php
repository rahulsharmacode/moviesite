<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="adddata.php" method="POST">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="name" required>
    <label for="uname"><b>Password</b></label>
    <input type="text" placeholder="Enter New Password" name="upass" required>
<input type="submit" value="Login"></form>
<h1>List of User</h1>
<table>
    <tr>
        <th>USERNAME</th>
        <th>PASSWORD</th>
</tr>


<?php 
include 'db.php';
$sql = "SELECT * FROM user";
$result = mysqli_query($conn,$sql);

if($result){
    while($row = mysqli_fetch_assoc($result)){
        $id = $row['id'];
        $user = $row['user'];
        $pass = $row['pass'];
        ?>
<tr>
<td><?php echo $user ?></td>
<td><?php echo $pass ?></td>
    </tr>

<?php

    }
}
?>

        
        




</table>
</body>
</html>