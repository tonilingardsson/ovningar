<!DOCTYPE html>
<html>
<head>
	<title>Systemstöd övning 2</title>
	<style>
	</style>
</head>
<body>
<?php echo "<p>PHP is installed and working</p>"; ?>
<h1>Övning 2</h1>
<form action="process.php" method="post" id="form" enctype="multipart/form-data">
<?php echo $message; ?>
<input type="text" name="name" value="" placeholder="Name" /> <br>
<input type="text" name="surname" value="" placeholder="Surname" /> <br>
<input type="text" name="email" value="" placeholder="E-mail" /> <br>
<input type="date" name="birthday" value="" placeholder="YEAR-MM-DD" /> <br>
<input type="password" name="password" /> <br>
<button type="<b>submit</b>">Submit</button>  <br>
</form>
</body>
</html>

<?php    
if(isset($_POST['SubmitButton'])){ //check if form was submitted
  $input = $_POST['inputText']; //get input text
  $message = "Success! You entered: ".$input;
}    
?>
</body>	
</html>