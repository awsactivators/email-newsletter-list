<?php

include('includes/connect.php');
include('includes/functions.php');

session_destroy();

header('Location: login.php');
die();