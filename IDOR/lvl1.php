<?php
try {
	$ip = "localhost"; //host
	$user = "root";  // host id
	$password = "";  // password local olduğu için varsayılan şifre
	$dbad = "1ccb8097d0e9ce9f154608be60224c7c"; // db adı

     $db = new PDO("mysql:host=$ip;dbname=$dbad", "$user", "$password");
     $db->query("SET CHARACTER SET 'utf8'");
     $db->query("SET NAMES 'utf8'");

} catch ( PDOException $e ){
     echo '<table>
<center><img src="veri/sql.png" alt="Örnek Resim"/></center>
<center>No MySQL Connection</center>
<center>Bunun Sebebi Bir DDoS Saldırısı Olabilir</center>
<center>Sistem Yöneticinizle Irtibata Geçin</center>
	 </table>';
}
$id = intval($_POST['id']);

if (!empty($id)) {
  $stmt = $db->prepare('select * from books where number = '.$id.'');
  $stmt->execute();
  while($row = $stmt->fetch()) {
    if($id == "8") {
    echo '<strong>You are bypassed! Your secrets '.file_get_contents("pwn.txt").'</strong><br /><br />';
    } else {
        echo 'Not found!';
    }
  }
  echo '<br /><br /><a href="IDOR-1.php">Go back</a>';
} else {
  echo 'Empty!';
}
?>