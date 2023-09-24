<?php
require_once "include/config.php";




// REST CODE
$rest_code = filter_var($_POST['id1'], FILTER_SANITIZE_STRING);
@mysqli_query($db,"UPDATE codes SET  uuid='' where id=$rest_code");

?>