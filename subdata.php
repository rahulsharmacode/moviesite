<?php
$ename = $_POST['ename'];
$mail = $_POST['mail'];
echo "Username is".$ename ."Password is".$mail;

include 'subdb.php';
$sql = "INSERT INTO subscribe(naame,email) VALUES ('$ename','$mail')";
$result = mysqli_query($conn,$sql);

if($result){
    header('Location: index.php');
}

?>
