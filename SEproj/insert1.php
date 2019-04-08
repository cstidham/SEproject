<html>
<link rel="stylesheet" href="./css/style1.css">
<body>





<?php

$con = mysql_connect("localhost","root","","demo");

if (!$con)

  {

  die('Could not connect: ' . mysql_error());

  }



mysql_select_db("demo", $con);



$sql="INSERT INTO contact (name, email, message)

VALUES

('$_POST[name]','$_POST[email]','$_POST[message]')";



if (!mysql_query($sql,$con))

  {

  die('Error: ' . mysql_error());

  }

echo "Thank you for contacting us you will recieve a email as soon as possible";



mysql_close($con)

?>

</body>

</html>
