<html>
<head><title>Your Favorite</title></head>
<body>
    <?php
        if (isset($_POST['username'])) {
        	$name = htmlentities($_POST['username']);
        	echo "Thanks for your selection ", ($name), "<br>";
        	echo "You really enjoyed ", $_POST['dish'], "<br>";
       	
       	if (empty($_POST["color"])) {
    	echo "Thank you and Please come again";
  		} else {
    	echo "-especially with a nice ", $_POST["color"], " wine";
  		}
  	}
    ?>
</body>
</html>