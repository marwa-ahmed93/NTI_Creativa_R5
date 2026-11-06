<?php

// session_destroy()

require_once 'dbc.php' ;

unset($_SESSION['user_id'] );


header('location:home.php');