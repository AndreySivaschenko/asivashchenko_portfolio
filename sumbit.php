<?php
	if(!empty($_POST['Name']) AND !empty($_POST['Email']) AND !empty($_POST['Message']){

		$email = "sivaschenkoar@gmail.com";
		$theme = 'Новое сообщение';

		$letter = "Данные сообщения:\r\n";
		$letter .= 'Name:'.$_POST['Name'].'\r\n';
		$letter .= 'Email:'.$_POST['Email'].'\r\n';
		$letter .= 'Messages:'.$_POST['Messages'].'\r\n'
		mail($email,$theme, $letter);
	}
	else{

	}


?>