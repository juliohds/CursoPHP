<?php

// logout.php
if(! isset($_SESSION)) session_start();

session_destroy();

header('Location: pagina5.php');