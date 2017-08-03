<?php
$sql = "INSERT INTO topic (title,description,author,created) VALUES('".$_POST['title']."', '".$_POST['description']."', '".$_POST['author']."', now())";
$conn=mysqli_connect("localhost","root",871710);
mysqli_select_db($conn,"opentutorials");
$result = mysqli_query($conn,$sql);
header("location:http://localhost/index.php");


 ?>
