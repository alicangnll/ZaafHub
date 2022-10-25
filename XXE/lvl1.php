<?php 
if($_POST) {
$path_info = pathinfo(''.$_POST['xml'].'');
	if($path_info['extension'] == "xml") {
    libxml_disable_entity_loader (false);
    $xmlfile = file_get_contents($_POST['xml']);
    $dom = new DOMDocument();
    $dom->loadXML($xmlfile, LIBXML_NOENT | LIBXML_DTDLOAD);
    $creds = simplexml_import_dom($dom);
    $user = $creds->user;
    $pass = $creds->pass;
    echo "You have logged in as <br>".strip_tags($_POST['xml'])."\n $user";
    echo '<br><a class="btn btn-danger mt-2"  name="_button" href="../index.php" style="width:85%;">Home Page</a>';
	} else {
	die("You dont have any access");
	}
} else {
	die("Where are your head ?");
}
?>