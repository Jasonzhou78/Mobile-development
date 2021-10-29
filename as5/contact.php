
		<?php
			$lastName = $_POST['lname'];
			$firstName = $_POST['fname'];
			$email = $_POST['email'];
			$phoneNumber = $_POST['phone'];
			$submit = $_POST['submit'];
			if(isset($submit)) {
				echo "<div> You have successfully submitted your contact information!</div>";
				echo "<div><a href='contact_us.php'></a>Back</div>";
			}
		?>
