<?
$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'serwer2097305.home.pl';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'no-reply@tacan-energy.pl';                 // SMTP username
$mail->Password = 'L85LHlFi';                           // SMTP password
$mail->SMTPSecure = 'ssl';    // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465;                                    // TCP port to connect to
$mail->CharSet = 'UTF-8';
$mail->setFrom('no-reply@tacan-energy.pl', 'Tacan-energy.pl');
$mail->isHTML(true);
?>