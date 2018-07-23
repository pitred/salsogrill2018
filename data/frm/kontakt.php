<?php

// Tworzymy zmienną dla imienia i nazwiska
$name = filter_input(INPUT_POST, 'name');

// Tworzymy zmienną dla adresu email
$email = filter_input(INPUT_POST, 'email');

// Tworzymy zmienną dla wiadomości
$message = filter_input(INPUT_POST, 'message');

// Podajesz adres email z którego ma być wysłana wiadomość
$odkogo = "recepcja@salsa.lublin.pl";

// Podajesz adres email na który chcesz otrzymać wiadomość
$dokogo = "recepcja@salsa.lublin.pl";

// Podajesz tytuł jaki ma mieć ta wiadomość email
$tytul = "Formularz kontaktowy Salso Grill 2018";

// Przygotowujesz treść wiadomości
$wiadomosc = "";
$wiadomosc .= "Imie i nazwisko: " . $name . "\n";
$wiadomosc .= "Email: " . $email . "\n";
$wiadomosc .= "Wiadomość: " . $message . "\n";

// Dodajemy UTF-8 do naglowka naszej wiadomości
$naglowek = "";
$naglowek .= "Od:" . $odkogo . " \n";
$naglowek .= "Content-Type:text/plain;charset=utf-8";

// Wysyłamy wiadomość
$sukces = mail($dokogo, $tytul, $wiadomosc, $naglowek);

// Przekierowywujemy na potwierdzenie
if ($sukces){
  print "<meta http-equiv=\"refresh\" content=\"0;URL=potwierdzenie.html\">";
}
else{
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.html\">";
}
?>
