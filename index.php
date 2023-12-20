<?php
if(str_contains($_SERVER['HTTP_HOST'], 'www')){
	header('Location: https://smartstreetlights.in');
   }else{
	   header("Location: ./Views/index.php");
   }
   exit;
?>
