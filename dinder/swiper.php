<?php session_start();
include "header.php";
if(empty($_SESSION)){
    header("location: login.php");}?>
<div class="py-5"></div>
<h3>welkom <?php getUsername(); ?>!</h3>
<?php  ?>