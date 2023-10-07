<?php 
$myemail = 'aleksa00arsic@gmail.com';
// lični podaci

if (isset($_POST['Submit1'])) {

if(isset($_POST['ime'])){ $ime = $_POST['ime']; }
if(isset($_POST['adresa'])){ $adresa = $_POST['adresa']; }
if(isset($_POST['drzava'])){ $drzava = $_POST['drzava']; }
if(isset($_POST['mail'])){ $mail = $_POST['mail']; }
if(isset($_POST['tel'])){ $tel = $_POST['tel']; }
// preuzimanje vozila 
if(isset($_POST['lokacija-p'])){ $lokacija_p = $_POST['lokacija-p']; }
if(isset($_POST['datum-p'])){ $datum_p = $_POST['datum-p']; }
if(isset($_POST['vreme-p'])){ $vreme_p = $_POST['vreme-p']; } 
// vraćanje vozila
if(isset($_POST['lokacija-v'])){ $lokacija_v = $_POST['lokacija-v']; } 
if(isset($_POST['datum-v'])){ $datum_v = $_POST['datum-v']; } 
if(isset($_POST['vreme-v'])){ $vreme_v = $_POST['vreme-v']; }
// automobil
if(isset($_POST['auto'])){ $auto = $_POST['auto']; }
if(isset($_POST['poruka'])){ $poruka = $_POST['poruka']; }

if(isset($_POST['dodatno'])){ $dodatno = $_POST['dodatno']; }
$dodatno1 = implode(', ', $dodatno);

    $to = 'aleksa00arsic@gmail.com';
    $email_subject = "Rezervacija automobila: $auto";
    $email_body = "Nova rezervacija automobila:\n\n ".
	    "LIČNI PODACI: \n ".
        "Ime i prezime: $ime \n ".
        "Adresa: $adresa\n".
		"Država i grad: $adresa \n".
		"E-mail: $mail\n".
		"Telefon: $tel\n\n ".
		"PREUZIMANJE VOZILA: \n ".
		"Lokacija: $lokacija_p \n ".
		"Datum: $datum_p \n ".
		"Vreme: $vreme_p \n ".
		"VRAĆANJE VOZILA: \n ".
		"Lokacija: $lokacija_v \n ".
		"Datum: $datum_v \n ".
		"Vreme: $vreme_v \n\n ".
		"IZABRANI AUTOMOBIL: $auto\n".
		"Dodatna oprema: $dodatno1\n".
		"Poruka: $poruka\n";
    $headers = "From: $myemail\n";
    $headers .= "Reply-To: $mail";
    mail($to,$email_subject,$email_body,$headers);
    //redirect to the 'thank you' page
    header('Location: thank_you.html');
}
?>