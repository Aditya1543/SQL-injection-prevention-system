<?php
$uname =$_POST['uname'];
$pass = $_POST['pass'];
// Create connection
/*$conn = mysqli_connect('localhost', 'root', '','infosec');
if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
}*/
$db_connection = mysqli_connect("localhost", "root", "", "infosec");
$username = mysqli_real_escape_string($db_connection, $_POST['uname']);
$password = mysqli_real_escape_string($db_connection, $_POST['pass']);
$query = "SELECT * FROM details WHERE username = '" . $username. "'
AND password = '" . $password . "'";
//$sql="SELECT * FROM details where username='$uname' AND password='$pass' ";
$result = mysqli_query($db_connection,$query);
$check = mysqli_fetch_array($result);
if(isset($check)){
echo 'success';
}
else{
echo 'Failure';
}
?>
<html>
<head>
<title>LogInGateway</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-tofit=no">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-
alpha.2/css/bootstrap.min.css" integrity="sha384-
y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd"
crossorigin="anonymous">
<style>
.container{
text-align: center;
margin-top: 200px;
width: 350px;
}
.margin{
margin-top: 20px;
}
.centre{
text-align: center;
}
</style>
</head>
<body>
<div class="container">
<h1>LogInGateway</h1>
<form method="post" class="margin">
<fieldset class="form-group">
<label for="uname">Enter the UserName</label>
<input type="text" class="form-control centre" id="city" name="uname" value =
"<?php if (array_key_exists('uname', $_POST)) {
echo $_POST['uname'];
}
?>">
<label for="pass">Enter the Password</label>
<input type="text" class="form-control centre" id="city" name="pass" value = "<?php
if (array_key_exists('pass', $_GET)) {
echo $_GET['pass'];
}
?>">
</fieldset>
<button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
<script
src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-
alpha.2/js/bootstrap.min.js" integrity="sha384-
vZ2WRJMwsjRMW/8U7i6PWi6AlO1L79snBrmgiDpgIWJ82z8eA5lenwvxbMV1PAh7"
crossorigin="anonymous"></script>
</body>
</html>