<?php
require ("phanquyen/function.php");
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    get_user($user, $pass);
}
?>

<form action="" method="POST">
    ten dang nhap:<input type="text" value="user"/>
    mat khau<input type="password" value="pass"/>
    <input type="submit" value="dang nhap"/> 

</form>