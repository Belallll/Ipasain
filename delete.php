<?php
require_once "include/config.php";

$del_code = filter_var($_POST['id1'], FILTER_SANITIZE_STRING);
@mysqli_query($db,"delete from codes where id=$del_code");


// REST CODE
$rest_code = filter_var($_POST['id0'], FILTER_SANITIZE_STRING);
@mysqli_query($db,"UPDATE codes SET  uuid='' where id=283");

?>