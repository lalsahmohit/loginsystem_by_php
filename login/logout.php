<?php
session_status();

session_unset();
session_destroy();

header("location:login.php")
?>