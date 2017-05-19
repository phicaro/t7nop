<?php
if (!isset($_SESSION['currUser'])) {
    ?>
    <a href="login.php">dang nhap</a>
    <?php
} else {

    echo"xin chao" . $_SESSION['currUser'];
    echo "<a href='logout.php'>thoat</a>";
}
?>
