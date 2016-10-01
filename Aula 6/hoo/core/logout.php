<?php

require "settings.php";

// logout.php
if(! isset($_SESSION)) session_start();

session_destroy();

header('Location: ' . $URL_PATH . 'login.php');