


<!DOCTYPE html>
<html>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>
<div class="row">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
<header class="w3-container w3-teal">
  <h1 align="center">Faculty Login </h1>
</header>

<div class="w3-container w3-half w3-margin-top">

<form class="w3-container w3-card-4" method="post">

<p>
<input class="w3-input" type="email" name="e" style="width:90%" required>
<label>Name</label></p>
<p>
<input class="w3-input" type="password" name="p" style="width:90%" required>
<label>Password</label></p>


<p>
<input id="milk" class="w3-check" type="checkbox" checked="checked">
<label>Stay logged in</label></p>

<p>
<button class="w3-button w3-section w3-teal w3-ripple" type="submit" name="save"> Log in </button></p>

</form>

</div>

</body>
</html> 
</div>
</div>


<?php 
extract($_POST);
if(isset($save))
{

	if($e=="" || $p=="")
	{
	$err="<font color='red'>fill all the fileds first</font>";	
	}
	else
	{

$sql=mysqli_query($conn,"select * from faculty where email='$e' and password='$p'");

$r=mysqli_num_rows($sql);


if($r==true)
{
$_SESSION['faculty_login']=$e;
echo '<script>window.location.href = "faculty";
</script>';
//header('location:faculty');
}

else
{

$err="<font color='red'>Invalid login details</font>";

}
}
}

?>