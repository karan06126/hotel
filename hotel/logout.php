<?php
session_start();
session_destroy();
header("location: /hotel/login.php");
exit();
?>
