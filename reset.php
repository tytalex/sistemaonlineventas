<?php
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;

	include 'includes/session.php';

	if(isset($_POST['reset'])){
		$email = $_POST['email'];

		$conn = $pdo->open();

		$stmt = $conn->prepare("SELECT *, COUNT(*) AS numrows FROM users WHERE email=:email");
		$stmt->execute(['email'=>$email]);
		$row = $stmt->fetch();

		if($row['numrows'] > 0){
			//generate code
			$set='123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
			$code=substr(str_shuffle($set), 0, 15);
			try{
				$stmt = $conn->prepare("UPDATE users SET reset_code=:code WHERE id=:id");
				$stmt->execute(['code'=>$code, 'id'=>$row['id']]);
				
				$message = "
					<h2>Restablecimiento de contraseña</h2>
					<p>Su cuenta:</p>
					<p>Correo electrónico: ".$email."</p>
					<p>Haga clic en el enlace a continuación para restablecer su contraseña.</p>
					<a href='http://localhost/ecommerce/password_reset.php?code=".$code."&user=".$row['id']."'>Restablecer la contraseña</a>
				";

				//Load phpmailer
	    		require 'vendor/autoload.php';

	    		$mail = new PHPMailer(true);                             
			    try {
			        //Configuración del servidor
			        $mail->isSMTP();                                     
			        $mail->Host = 'smtp.gmail.com';                      
			        $mail->SMTPAuth = true;                               
			        $mail->Username = 'testsourcecodester@gmail.com';     
			        $mail->Password = 'mysourcepass';                    
			        $mail->SMTPOptions = array(
			            'ssl' => array(
			            'verify_peer' => false,
			            'verify_peer_name' => false,
			            'allow_self_signed' => true
			            )
			        );                         
			        $mail->SMTPSecure = 'ssl';                           
			        $mail->Port = 465;                                   

			        $mail->setFrom('testsourcecodester@gmail.com');
			        
			        //Recipients
			        $mail->addAddress($email);              
			        $mail->addReplyTo('testsourcecodester@gmail.com');
			       
			        //Content
			        $mail->isHTML(true);                                  
			        $mail->Subject = 'Restablecimiento de contraseña del sitio de comercio electrónico';
			        $mail->Body    = $message;

			        $mail->send();

			        $_SESSION['success'] = 'Enlace de restablecimiento de contraseña enviado';
			     
			    } 
			    catch (Exception $e) {
			        $_SESSION['error'] = 'El mensaje no pudo ser enviado. Error de correo: '.$mail->ErrorInfo;
			    }
			}
			catch(PDOException $e){
				$_SESSION['error'] = $e->getMessage();
			}
		}
		else{
			$_SESSION['error'] = 'El correo electrónico no encontrado';
		}

		$pdo->close();

	}
	else{
		$_SESSION['error'] = 'Ingrese el correo electrónico asociado con la cuenta';
	}

	header('location: password_forgot.php');

?>