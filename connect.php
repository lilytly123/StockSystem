<?php
$link=mysqli_connect("127.0.0.1","root","123456");
if(!$link){
    return false;
}
  $db_selected=mysqli_select_db($link,"test");
if(!$db_selected){
    return false;
}
mysqli_query($link,"set names 'utf8'");
?>