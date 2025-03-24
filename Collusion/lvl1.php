<?php 
if($_POST) {
$flag = "MD5_CRACKED";
$password = "9Hz7AuNRykKpd9Lyrm1PFV";
$password_hash = md5($password);
$user_password = isset($_POST["xml"]) ? $_POST["xml"] : "";
if($password == $user_password){
    die('[AUTHENTICATION FAILED]<br>Target MD5: '.$password_hash.'</p>'); 
} else {
    if($password_hash == md5($user_password)){
        die($flag . '</br>');
    } else {
        die('[AUTHENTICATION FAILED]</p>');
    }
}
} else {
	die("You are dumb!");
}
?>