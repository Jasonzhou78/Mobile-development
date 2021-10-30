<?php
 $firstName = $_POST['fname'];
 $lastName = $_POST['lname'];
 $phone = $_POST['phone'];
 $email = $_POST['email'];

if (!$firstName) {
    echo "<p>Please fill your first name in the form!</p>";
}
if (!$lastName) {
    echo "<p>Please fill your last name in the form!</p>";
}
if (!$phone) {
    echo "<p>Please fill your phone in the form!</p>";
}
if (!$email) {
    echo "<p>Please fill your phone in the form!</p>";
}
if($firstName&&$lastName&&$phone&&$email) {
    echo "Thank you! We received the following information from you:<br>$firstName<br>$lastName<br>$phone<br>$email<br><br>Have a great day!"; 
}
?>

<script>
	
	if (typeof(Storage) !== "undefined") {
		
		localStorage.setItem("fname", "<?php echo $_POST['fname']; ?>");
		localStorage.setItem("lname", "<?php echo $_POST['lname']; ?>");
		localStorage.setItem("phone", "<?php echo $_POST['phone']; ?>");
		localStorage.setItem("email", "<?php echo $_POST['email']; ?>");		
	} else {
		
		alert("No Storage for you!");
	}
    localStorage.setItem("message","Welcome back!");
</script>

<a href="simple-form-storage.php">Back to the home page</a>