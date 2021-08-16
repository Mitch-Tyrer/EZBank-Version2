<?php
session_start();
if (isset($_SESSION['message'])){	
 $msg = $_SESSION['message'];
}
