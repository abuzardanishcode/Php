<?php

session_start();
session_unset();
session_destroy();

$msg = "Your Session is no more please login again";

include "login.php";









?>