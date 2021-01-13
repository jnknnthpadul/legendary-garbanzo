<?php  
  
session_start(); 
   
$_SESSION['views'] = $_SESSION['views'] ?? 0;
$_SESSION['views']++;

$counter = $_SESSION['views'] ?? 0;
if ($_SESSION['views'] === 5) {
	$counter = $_SESSION['views'];
	echo 'Thank you for visiting page many times'.'<br>';
	
}
elseif ($_SESSION['views'] === 10) {
	header("Location:congratulations.php");
	session_unset();
	session_destroy();
}
?>

<h1>Hello</h1>
<p>You have visited this page <?php echo $counter?> times</p>
<p><a href="?reset=true">Reset</a></p>
