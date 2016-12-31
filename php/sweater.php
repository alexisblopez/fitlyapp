<?php

if (isset($_POST['submit'])) {

$con = mysql_connect("localhost","root","ajdwgplp");

if (!$con) {
    die("Cannot connect: " . mysql_error());
}

mysql_select_db("fitly",$con);

$sql = "INSERT INTO sweaters (name,email) VALUES ('$_POST[sname]','$_POST[semail]')";

mysql_query($sql,$con);

mysql_close($con);
    
}

?>