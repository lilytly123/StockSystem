<?php
session_start();
require_once('connect.php');
$queryString = $_POST['queryString'];
if(strlen($queryString) >0) {
    $sql= "SELECT value FROM company WHERE value LIKE '%".$queryString."%' LIMIT 10";
    $query = mysqli_query($link,$sql);
    while ($result = mysqli_fetch_array($query,MYSQLI_ASSOC)){
        $value=$result['value'];
        ?>
        <li onClick="fill('<?=$value?>')"><?=$value?></li>
        <?php
    }
}
?> 