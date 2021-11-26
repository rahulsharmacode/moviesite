<?php
$name = $_POST['name'];
$upass = $_POST['upass'];
echo "Username is".$name ."Password is".$upass;

include 'db.php';
$sql = "INSERT INTO user(user,pass) VALUES ('$name','$upass')";
$result = mysqli_query($conn,$sql);

if($result){
    header('Location: m1.php');
}

?>
