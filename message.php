<?php 


















if(isset($_POST['message_request'])){
					$name = $_POST['name'];
					$email = $_POST['email'];
					$subject = $_POST['subject'];
					$message = $_POST['message'];
						

	if($name && $email && $subject && $message){
		
		
		$to = "imtiaz.hasan121@gmail.com";
		$subject = "My subject";
		$txt = "Hello world!";
		

		mail($to,$name,$email,$subjec,$message);
		header('index.php?result=success');
	}else{
		
		header('index.php?result=Please Try Again');
		
	}
						

		

}



























?>