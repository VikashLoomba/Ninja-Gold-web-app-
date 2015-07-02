<?php 
session_start();
if (!isset($_SESSION['user_gold'])) {
      $_SESSION['user_gold'] = 0;
    }

if (!isset($_SESSION['text_area'])) {
      $_SESSION['text_area'] =  array();
    }


if (isset($_POST['farm'])) {
	$_SESSION['farm'] = rand(10,20);
	$_SESSION['user_gold'] += $_SESSION['farm'];
	$farm = "farm";
    array_push($_SESSION['text_area'], "You have entered a farm. You have earned " . $_SESSION['farm'] . " coins."); 
	
}
if (isset($_POST['cave'])) {
	$_SESSION['cave'] = rand(5,10);
	$_SESSION['user_gold'] += $_SESSION['cave'];
	$cave = "cave";
	array_push($_SESSION['text_area'],"You have entered a cave. You have earned " . $_SESSION['cave'] . " coins."); 
}
if (isset($_POST['house'])) {
	$_SESSION['house'] = rand(2,5);
	$_SESSION['user_gold'] += $_SESSION['house'];
	$house = "house";
	array_push($_SESSION['text_area'], "You have entered a house. You have earned " . $_SESSION['house'] . " coins."); 
}
if (isset($_POST['casino'])) {
	$_SESSION['casino'] = rand(-50,50);
	$_SESSION['user_gold'] += $_SESSION['casino'];
	$casino = "casino";
	array_push($_SESSION['text_area'], "You have entered a casino. You have earned " . $_SESSION['casino'] . " coins."); 
}

header('Location: index.php');

?>