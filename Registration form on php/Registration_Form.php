 <?php 
	if ($_SERVER['REQUEST_METHOD'] === "POST") {
		
		$Religion=$_POST['Religion'];
		
		if (!empty($_POST["firstname"])) 
		{
			echo "<th>" .$_POST['firstname']. "</th>";
			echo "<br>";
        }
		else 
		{
			echo "First Name is not  declared";
			echo "<br>";
        }
		
		if (!empty($_POST["lastname"])) 
		{
			echo "<th>" .$_POST['lastname'] . "</th>";
			echo "<br>";
        }
		else 
		{
			echo "Last Name is not  declared";
			echo "<br>";
        }
		
		if (!empty($_POST["gender"])) 
		{
			echo "<th>" .$_POST['gender'] . "</th>";
			echo "<br>";
			
        }
		else 
		{
			echo "gender is not  declared";
			echo "<br>";
			
        }
		
		if (!empty($_POST['Dob'])) 
		{
			echo "<th>" .$_POST['Dob'] . "</th>";
			echo "<br>";
			
        }
		else 
		{
			echo "DOB is not  declared";
			echo "<br>";
			
        }
		
		
		if ($Religion=="none") 
		{
			echo "Religion is not  declared";
			echo "<br>";
			
        }
		elseif ($Religion=="Islam" or $Religion=="Hindu" or $Religion=="Christianity" or $Religion=="Others")
		{
			echo "<th>" .$_POST['Religion']. "</th>";
			echo "<br>";
			
        }
		
		
		if (!empty($_POST['Religion'])) 
		{
			echo "<th>" .$_POST['Religion']. "</th>";
			echo "<br>";
			
        }
		else 
		{
			echo "Religion is not  declared";
			echo "<br>";
			
        }
		
		if (!empty($_POST['Present Address'])) 
		{
			echo "<th>" .$_POST['Present Address']. "</th>";
			echo "<br>";
			
        }
		else 
		{
			echo "Present ADDRESS is not  declared";
			echo "<br>";
			
        }
		
		
		if (!empty($_POST['Permanent Address'])) 
		{
			echo "<th>" .$_POST['Permanent Address']. "</th>";
			echo "<br>";
			
        }
		else 
		{
			echo "Permanent Address is not  declared";
			echo "<br>";
			
        }
		
		if (!empty($_POST['phone'])) 
		{
			echo "<th>" .$_POST['phone']. "</th>";
			echo "<br>";
			
        }
		else 
		{
			echo "Phone number is not  declared";
			echo "<br>";
			
        }
		
		if (!empty($_POST['Email'])) 
		{
			echo "<th>" .$_POST['Email']. "</th>";
			echo "<br>";
			
        }
		else 
		{
			echo "Email is not  declared";
			echo "<br>";
			
        }
		
		if (!empty($_POST['Personal Website'])) 
		{
			echo "<th>" .$_POST['Personal Website']. "</th>";
			echo "<br>";
			
        }
		else 
		{
			echo "Website is not  declared";
			echo "<br>";
			
        }
		
		if (!empty($_POST['Username'])) 
		{
			echo "<th>" .$_POST['Username']. "</th>";
			echo "<br>";
			
        }
		else 
		{
			echo "Username is not  declared";
			echo "<br>";
			
        }
			if (!empty($_POST['password'])) 
		{
			echo "<th>" .$_POST['password']. "</th>";
			echo "<br>";
			
        }
		else 
		{
			echo "password is not  declared";
			echo "<br>";
			
        }

	}
    ?>
