<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8" />
    <title></title>
    <link rel="stylesheet" href="login.css" />
</head>
<body>
<div class="wrapper">
<form method="POST" >
    <h2 class="h2_open">Для входа : </h2>
    <h2 class="h2">введите свое имя</h2>
    <input type="text" name = "dog_name" placeholder = "dog_name" required >
    <br><br>
    <h2 class="h2"> введите свой возраст  </h2>
    <input type="text" name = "dog_age" placeholder = "dog_age" required >
    <br><br>
    <br><br>
    <a href="index1.php">
        <button class="button">РЕГИСТРАЦИЯ</button>
    </a>
</form>
</div>



<?php
session_start();
require('connect.php');
if(isset($_POST['dog_name']) and isset($_POST['dog_age'])){
    $dog_name = $_POST['dog_name'];
    $dog_age = $_POST['dog_age'];


$query = "SELECT * FROM onlydog WHERE dog_name='$dog_name' and dog_age='$dog_age'";
    $result = mysqli_query($connection , $query) or die (mysqli_error($connection));
    $count = mysqli_num_rows($result);
    if ($count == 1){
        $_SESSION['dog_name'] = $dog_name;
    } else{
        $fmsg = "ОШИБКА";
    }
}
if(isset($_SESSION['dog_name']))
    $dog_name = $_SESSION['dog_name'];
    echo  "<p >Привет  $dog_name  </p>" . " " ;
    echo "<p сл> вы вошли в приют для собак </p>" ;
    echo "<a href='index1.php' class='a' >вернуться на страницу регистрации</a>";
    echo "<a href='index.php' class='a' >вернуться на главную страницу</a>";

?>
</body>
</html>