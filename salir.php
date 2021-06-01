<?php
session_start();
if(isset($_SESSION['IdUser'])){
    unset($_SESSION['IdUser']);
}
session_destroy();
header('location: index.html');
