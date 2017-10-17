<?php
	if(!empty($_POST['Name']) AND !empty($_POST['Email']) AND !empty($_POST['Message']){


		$headers = 'From: Andrey Sivashchenko \r\n'.
					'Reply-To:sivaschenkoar@gmail.com \r\n'.
					'X-Mailer: PHP/'. phpversion();
		$to = 'sivaschenkoar@gmail.com';
		$theme = 'Новое сообщение';

		$letter = "Данные сообщения:\r\n";
		$letter .= 'Name:'.$_POST['Name'].'\r\n';
		$letter .= 'Email:'.$_POST['Email'].'\r\n';
		$letter .= 'Messages:'.$_POST['Messages'].'\r\n';
		if(mail($email,$theme, $letter, $headers)){
			header('Location:/thankyou.php');
		}
		else{
			header('Location:/');
		}
	}
	else{
		header('Location:/');
	}


?>