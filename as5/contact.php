<?php
 $firstName = @$_POST['fname'];
 $lastName = @$_POST['lname'];
 $phone = @$_POST['phone'];
 $email = @$_POST['email'];

 echo "Thank you! We received the following information from you:<br>$firstname<br>$lastname<br>$phone<br>$email<br><br>Have a great day!"; 
?>

<script>
	
	if (typeof(Storage) !== "undefined") {
		
		localStorage.setItem("fname", "<?php echo @$_POST['fname']; ?>");
		localStorage.setItem("lname", "<?php echo @$_POST['lname']; ?>");
		localStorage.setItem("phone", "<?php echo @$_POST['phone']; ?>");
		localStorage.setItem("email", "<?php echo @$_POST['email']; ?>");		
	} else {
		
		alert("No Storage for you!");
	}
	
</script>

<a href="simple-form-storage.php">Back to the Form</a>