<?php
$conn = mysqli_connect('localhost','root','','tourdb');
$sql=mysqli_query($conn,"SELECT * FROM users");
$result=mysqli_fetch_all($sql,MYSQLI_ASSOC);
exit(json_encode($result));
?>