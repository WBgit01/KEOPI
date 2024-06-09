<?php
include_once 'config/core.php';
session_destroy();
header("Location: ../landing-page/landing.php");
?>