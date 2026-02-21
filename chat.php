<?php

if(isset($_GET['msg'])){

$file = fopen("chat.txt","a");
fwrite($file,$_GET['msg']."<br>");
fclose($file);

}

if(file_exists("chat.txt")){
    echo file_get_contents("chat.txt");
}

?>