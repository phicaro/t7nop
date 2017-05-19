<?php
$db = new PDO('mysql:host=localhost;dbname=products', 'root', 'root');
$sql = "select * from dangky";
$result = $db->query($sql);
$arr = array();
while ($r = $result->fetch(PDO::FETCH_ASSOC)) {
    $arr[] = $r;
}
echo $json_response = json_encode($arr);
?>