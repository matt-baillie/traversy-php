<?php
session_start();
session_destroy();
header('Location: /traversy-php/13_sessions.php');
