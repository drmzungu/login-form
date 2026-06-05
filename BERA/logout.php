<?php
session_start();
session_destroy();
header("location: register.php? signin=1");
?>php