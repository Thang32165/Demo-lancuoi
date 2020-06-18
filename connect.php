<?php
$conn_string="host=ec2-34-230-231-71.compute-1.amazonaws.com port=5432 dbname=dg1hsao74k1hd 
password=539e3faa6b42dc88442a24f02ee2d81d1a49bb09e2285b9f77bac25e03b789b0";
$dbconn= pg_connect($conn_string);
if (isset($_POST['username'])) {
	# code...
	$username = $_POST['username'];
}

if (isset($_POST['pass'])) {
	# code...
	$pass = $_POST['pass'];
}
$sql = "SELECT * FROM Acount WHERE _user='".$username."' AND _pass='".$pass."'";
$result =pg_query($dbconn, $sql);
$row = pg_num_rows($result);
if ($row==1)
{
	echo "Login success";
}
else
{
	echo "Login failed";
}
?>
