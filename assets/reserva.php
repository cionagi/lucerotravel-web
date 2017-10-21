<?php

if(!$_POST) exit;

// Email verification, do not edit.
function isEmail($email_contact ) {
	return(preg_match("/^[-_.[:alnum:]]+@((([[:alnum:]]|[[:alnum:]][[:alnum:]-]*[[:alnum:]])\.)+(ad|ae|aero|af|ag|ai|al|am|an|ao|aq|ar|arpa|as|at|au|aw|az|ba|bb|bd|be|bf|bg|bh|bi|biz|bj|bm|bn|bo|br|bs|bt|bv|bw|by|bz|ca|cc|cd|cf|cg|ch|ci|ck|cl|cm|cn|co|com|coop|cr|cs|cu|cv|cx|cy|cz|de|dj|dk|dm|do|dz|ec|edu|ee|eg|eh|er|es|et|eu|fi|fj|fk|fm|fo|fr|ga|gb|gd|ge|gf|gh|gi|gl|gm|gn|gov|gp|gq|gr|gs|gt|gu|gw|gy|hk|hm|hn|hr|ht|hu|id|ie|il|in|info|int|io|iq|ir|is|it|jm|jo|jp|ke|kg|kh|ki|km|kn|kp|kr|kw|ky|kz|la|lb|lc|li|lk|lr|ls|lt|lu|lv|ly|ma|mc|md|me|mg|mh|mil|mk|ml|mm|mn|mo|mp|mq|mr|ms|mt|mu|museum|mv|mw|mx|my|mz|na|name|nc|ne|net|nf|ng|ni|nl|no|np|nr|nt|nu|nz|om|org|pa|pe|pf|pg|ph|pk|pl|pm|pn|pr|pro|ps|pt|pw|py|qa|re|ro|ru|rw|sa|sb|sc|sd|se|sg|sh|si|sj|sk|sl|sm|sn|so|sr|st|su|sv|sy|sz|tc|td|tf|tg|th|tj|tk|tm|tn|to|tp|tr|tt|tv|tw|tz|ua|ug|uk|um|us|uy|uz|va|vc|ve|vg|vi|vn|vu|wf|ws|ye|yt|yu|za|zm|zw)$|(([0-9][0-9]?|[0-1][0-9][0-9]|[2][0-4][0-9]|[2][5][0-5])\.){3}([0-9][0-9]?|[0-1][0-9][0-9]|[2][0-4][0-9]|[2][5][0-5]))$/i",$email_contact ));
}

if (!defined("PHP_EOL")) define("PHP_EOL", "\r\n");

$name_contact     = $_POST['name_contact'];
$email_contact    = $_POST['email_contact'];
$verify_contact   = $_POST['verify_contact'];
$hotel_contact   = $_POST['hotel_contact'];
$room_contact   = $_POST['room_contact'];
$tour_contact   = $_POST['tour_contact'];
$date_contact   = $_POST['date_contact'];
$id_contact   = $_POST['id_contact'];
$message_contact   = $_POST['$message_contact'];
$pax_contact   = $_POST['pax_contact'];

if(trim($name_contact) == '') {
	echo '<div class="error_message">You must enter your Name.</div>';
	exit();
} else if(trim($email_contact) == '') {
	echo '<div class="error_message">Please enter a valid email address.</div>';
	exit();
}

if(get_magic_quotes_gpc()) {
	$message_contact = stripslashes($message_contact);
}

//$address = "HERE your email address";
$address = "reservas@lucerotravelchile.cl";
//$address = "cionagi.z@gmail.com";


// Below the subject of the email
$e_subject = 'Ha sido contactado por ' . $name_contact . '.';

// You can change this if you feel that you need to.
$e_body = "Se ha realizado una reserva por $name_contact para la siguiente excursion: " . PHP_EOL . PHP_EOL;
$e_content = "Nombre: $name_contact\n Email: $email_contact\n Hotel: $hotel_contact\n Habitación: $room_contact\n Tour: $tour_contact\n  Nº pasajeros: $pax_contact\n Fecha: $date_contact\n Mensaje: $message_contact\n" . PHP_EOL . PHP_EOL;
$e_reply = "Puedes contactar a $lastname_contact via email, $email_contact";

$msg = wordwrap( $e_body . $e_content . $e_reply, 70 );

$headers = "From: $email_contact" . PHP_EOL;
$headers .= "Reply-To: $email_contact" . PHP_EOL;
$headers .= "MIME-Version: 1.0" . PHP_EOL;
$headers .= "Content-type: text/plain; charset=utf-8" . PHP_EOL;
$headers .= "Content-Transfer-Encoding: quoted-printable" . PHP_EOL;

$user = "$email_contact";
$usersubject = "Gracias ";
$userheaders = "From: reservas@lucerotravelchile.cl\n";
$usermessage = "Gracias por contactar a Lucero Travel, nos pondremos en contacto a la brevedad.";
mail($user,$usersubject,$usermessage,$userheaders);

$newUR = "single_tour.html?id=".$id_contact;
if(mail($address, $e_subject, $msg, $headers)) {
	header('Location: ../'.$newUR);
	// Success message
	echo "<div id='success_page' style='padding:20px 0'>";
	echo "<strong >Mensaje enviado.</strong>";
	echo "Gracias <strong>$name_contact</strong>,<br> por su mensaje. Responderemos a la brevedad.";
	echo "</div>";


} else {
	echo 'ERROR!';

}
?>
