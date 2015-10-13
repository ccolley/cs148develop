<!DOCTYPE html>
<html lang="en">
<head>
	<title>CS 148, Christopher R. Colley</title>
	<meta charset="utf-8">
	<meta name="author" content="Christopher R. Colley">
	<meta name="description" content="Site map for my material for CS 148">


<!--[if lt IE 9]>
	<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<link rel="stylesheet"
	href="lib/style.css"
	media="screen">

<link rel="icon" href="../media/rsz_icon.png" type="image/x-icon">

</head>


<?php
$phpSelf = htmlentities($_SERVER['PHP_SELF'], ENT_QUOTES, "UTF-8");
$path_parts = pathinfo($phpSelf);
print '<body id="' . $path_parts['filename'] . '">';
?>


<body id="home">

<header>
	<h1>Christopher R. Colley: Assignment 2.0</h1>
</header>

<p>Follow the Links Below to Assignments: </p>
<hr>
<br>

<ol id='queryList'>
	<li><a href='q01.php'>Question 1</a></li>
	<li><a href='q02.php'>Question 2</a></li>
	<li><a href='q03.php'>Question 3</a></li>
	<li><a href='q04.php'>Question 4</a></li>  
	<li><a href='q05.php'>Question 5</a></li>
	<li><a href='q06.php'>Question 6</a></li>
	<li><a href='q07.php'>Question 7</a></li>
	<li><a href='q08.php'>Question 8</a></li>
	<li><a href='q09.php'>Question 9</a></li>  
	<li><a href='q10.php'>Question 10</a></li>
	<li><a href='q11.php'>Question 11</a></li>
	<li><a href='q12.php'>Question 12</a></li>	
</ol>  




</body>

</html>