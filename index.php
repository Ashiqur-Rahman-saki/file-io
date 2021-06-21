<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Registration  Form</title>
</head>
<body>

	<h1>Registration  Form</h1>

	<?php
		// $arr = array("name"=>"arafat","gender"=>"male","age"=>25);
		// $arr = json_encode($arr);
		// write($arr);
		// $arr2 = json_decode($arr);
		// echo $arr2->gender."<br>";
		// echo $arr;

	if ($_SERVER['REQUEST_METHOD'] === "POST")
	{
		// $firstName = $_POST['Firstname'];
		// write(basic_validation($firstName));

		$array = array( "Firstname"=>basic_validation($_POST['Firstname']),"Lastname"=>basic_validation($_POST['Lastname']),
			"sex"=>basic_validation($_POST['sex']),"birthday"=>basic_validation($_POST['birthday']),
			"religion"=>basic_validation($_POST['religion']),"presentaddress"=>basic_validation($_POST['presentaddress']),
			"Permanentaddress"=>basic_validation($_POST['Permanentaddress']),"phone"=>basic_validation($_POST['phone']),
			"email"=>basic_validation($_POST['email']),"Link"=>basic_validation($_POST['Link']),
			"username"=>basic_validation($_POST['username']),"pwd"=>basic_validation($_POST['pwd']),
		);

		

		$array = json_encode($array);
		write($array);
	}

	// validate input
	function basic_validation($data)
	{
		$data = trim($data);
		$data = htmlspecialchars($data);
		$data = stripcslashes($data);
		return $data;
	}

 	// write in data.txt
	function write($content)
	{
		$filePointer = fopen("data.txt", "w");	
		fwrite($filePointer, $content."\n");
		fclose($filePointer);
	}



	?>


	<form action="<?php echo htmlspecialchars(($_SERVER['PHP_SELF']))?>" method="POST">
<fieldset>
<legend>Basic Information</legend>
<input type="text" name="Firstname" placeholder="First name"/>


<input type="text" name="Lastname" placeholder="Last name"/>
<br>
</br>
<level>Gender:</level><br>
<input type="radio"name="sex"/>Male
<input type="radio"name="sex"/>Female
</br><br>
<label for="birthday">Birthday:</label>

<br>
</br>
<input type="date" id="birthday" name="birthday">
<br>
<br/>
<label for="cars">Choose a religion:</label>

<select name="religion" id="religion">
  <option value="Islam" name="religion">Islam</option>
  <option value="Hidusm" name="religion">Hindusm</option>
  <option value="mercedes" name="religion">Christian</option>
  <option value="audi" name="religion">Athiest</option>
</select>
</fieldset>
<br>
</br>
<fieldset>
<legend>Contact Information</legend>
<address>
<label for=" Present address">Present ddress:</label>

<textarea id="presentaddress" name="presentaddress" rows="2" cols="20"></textarea><br>

</textarea><br>
<address>
<label for=" Permanent address"> Permanent address:</label>

<textarea id="Permanentaddress" name="Permanentaddress" rows="2" cols="20"></textarea><br>

</textarea>
</address>
<br>
<label for="email">Enter your email:</label>
<input type="email" id="email" name="email">
<br>
<label for="phone">Enter your phone number:</label><br>
<input type="tel" id="phone" name="phone">
<br>
<a href="https://www.w3schools.com/html/html_links.asp">link text</a><br>

</fieldset>
<fieldset>
<legend> Account Information</legend>
<label for="pwd">Password:</label>
<input type="password" id="pwd" name="pwd"><br>
<br>
<label for=" username"> Username:</label>

<input type="text" id="username" name="username"/>
</fieldset>
</br>
<label for="Link">Personal Website Link : </label>
		 <input type="Link" name="Link" required><br>
<input type="submit" value="submit">
</br>
</form>
</body><br>

<html>