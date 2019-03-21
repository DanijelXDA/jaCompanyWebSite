<?php 
	$name = $_POST['imePrezime'];
	$brLK = $_POST['brLk'];
	$email = $_POST['email'];
	$jmbg = $_POST['JMBG'];
	$mesto = $_POST['mesto'];
	$adresa = $_POST['adresa'];
	$pak = $_POST['pak'];
	$kolicina = $_POST['kolicina'];
	$narudzbina = intval( "0" . rand(1,9) . rand(0,9) . rand(0,9) . rand(0,9) . rand(0,9) ); // random(ish) 5 digit int

	
	$message = '<html><body>';
			$message .= "<h2><b>Broj narudžbine: " . $narudzbina . "</b></h2>\n\n";
			$message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
			$message .= "<tr style='background: #eee;'><td><strong>Ime i prezime:</strong> </td><td>" . strip_tags($_POST['imePrezime']) . "</td></tr>";
			$message .= "<tr><td><strong>Broj lične karte:</strong> </td><td>" . strip_tags($_POST['brLk']) . "</td></tr>";
			$message .= "<tr><td><strong>Email:</strong> </td><td>" . strip_tags($_POST['email']) . "</td></tr>";
			$message .= "<tr><td><strong>JMBG:</strong> </td><td>" . strip_tags($_POST['JMBG']) . "</td></tr>";
			$message .= "<tr><td><strong>Mesto stanovanja:</strong> </td><td>" . strip_tags($_POST['mesto']) . "</td></tr>";
			$message .= "<tr><td><strong>Adresa:</strong> </td><td>" . strip_tags($_POST['adresa']) . "</td></tr>";
			$message .= "<tr><td><strong>Poštanski broj:</strong> </td><td>" . strip_tags($_POST['pak']) . "</td></tr>";
			$message .= "<tr><td><strong>Broj komada proizvoda:</strong> </td><td>" . $_POST['kolicina'] . "</td></tr>";        
			$message .= "</table>";
			$message .= "</body></html>";
			
			          
			$to = 'danijelji10a2016@gmail.com';
			
			$subject = 'Narudžbina | Sixth Sense Serbia';
			
			$headers = "From: $email\r\n";
			$headers .= "Reply-To: ". strip_tags($_POST['email']) . "\r\n";
			$headers .= "MIME-Version: 1.0\r\n";
			$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
			$headers .= "CC: podrska@tehnickaskola.edu.rs\r\n";
			$headers .= "BCC: podrska@tehnickaskola.edu.rs\r\n";

            if (mail($to, $subject, $message, $headers)) {
			  header( 'Location: index.html' );
            } else {
              echo 'There was a problem sending the email.';
            }
            
            // DON'T BOTHER CONTINUING TO THE HTML...
            die();
			
		'X-Mailer: PHP/' . phpversion();
	
?>