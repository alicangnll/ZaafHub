<?php
if(isset($_GET["data"])) {
    if($_GET["data"] == "getmyflag") {
        echo '<html><!-- flag:getflags --></html>';
    } else {
        echo 'You are closer!';
    }
}  else {
    echo '<!-- ?data -->Maybe a GET request ?!';
}
?>