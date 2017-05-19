<?php
mysqli_connect("localhost", "root", "root");
mysqli_select_db(db);
session_start();

function getuser($user, $pass) {
    $sql = mysqli_query("select *from user where email='$user' and password='$pass'");

    if (mysqli_num_row($sql) > 0) {
        $row = mysql_fetch_array($sql);
        $_SESSION['currUser'] = $row['user'];
        if ($row['role'] == 1) {
            $_SESSION['currAdmin'] = $row['role'];
            header('location:admin.php');
        }
    } else {
        header('location:index.php');
    }
}

?>