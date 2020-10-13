html>
<body>
<?php
$username = "mariamfahes";
$password = "password";
if($_POST["username"] == $username && $_POST["password"] == $password ){
    echo "<h1>goood</h1>";
}


else{
header("Location:/home.php?error=1");
}
?>
</body>
</html>
