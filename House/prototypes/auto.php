<?php
session_start();
$connection = mysqli_connect('localhost','id9594495_bogdanbozhik','31012004','id9594495_creatorschoolusers'); 
global $user_logged;
$login = $_GET["login"];
$password = $_GET["password"];
if($_GET["submit"] == "Submit"){
    $user = mysqli_query($connection, "SELECT * FROM `IdOfUsers` WHERE `login` = '$login' AND `password` = '$password'") or die(mysqli_error($connection));
$result = mysqli_num_rows($user);
if($result == 1){
header('Location: /cab.php');
$_SESSION['user_logged'] = mysqli_fetch_array($user);
}
else
{
    echo "The login or password isn`t correct!";
}
}
if(isset($_SESSION['user_logged']) == 1){
?>
Ви авторизовані!<br>
Ви можете ввійти у свій <a href = "/cab.php">особистий кабінет</a>
<?php }
else { ?>
<form method = "POST">
   <input type = "text" name = "login"> 
<input type = "password" name = "password">
    <input type = "submit" name = "submit" value = "Submit">
    </form>
    <?php }
    ?>