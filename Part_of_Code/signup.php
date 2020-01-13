<?php


include 'connect.php';
$conn = OpenCon();
if (array_key_exists('insertsubmit', $_POST)) {

$Name = $_POST['CName'];
$Phone = $_POST['CPhone'];
$sql = "insert into Customer values ('$Phone','$Name')";
$result=mysqli_query($conn, $sql) or
die(mysqli_error($conn));;
mysqli_commit($conn);

echo '<br><span style="color:BLACK;text-align:center;">Succesfully Sign In';
echo '<br><span style="color:BLACK;text-align:center;">Redirect back to the Reservation Page if no reaction';

header('refresh: 4; url=login.html');

}

?>
