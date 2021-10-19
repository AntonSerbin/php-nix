<?php

if ($_POST['name']) echo "You entered Name: ".($_POST['name'])."<br>";
if ($_POST['review']) echo "Entered review: " .($_POST['review'])."<br>";
if ($_POST['goodID']) echo "Your ID of chosen goods is : ".($_POST['goodID'])."<br>";
if ($_POST['quantityGood']) echo "Quantity: " .($_POST['quantityGood'])."<br>";
if ($_POST['nameCallback']) echo "Name for callback is : ".($_POST['nameCallback'])."<br>";
if ($_POST['phoneCallback']) echo "Telephone number: " .($_POST['phoneCallback'])."<br>";

?>

<button onclick="window.history.go(-1)">Return</button>