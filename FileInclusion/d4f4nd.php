<?php
session_start();
if(isset($_SESSION["data"])) {
    $veri = intval($_SESSION["data"] + 1);
    if($veri >= 2) {
        echo '<html><!-- flag:twoandthreee --></html>';
    } else {
        $veri = $veri + 1;
        echo 'You are closer!';
    }
} else {
    $_SESSION["data"] = "1";
}
?>