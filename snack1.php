<!-- Snack 1
Passare come parametri GET name, mail e age e verificare 
(cercando i metodi che non conosciamo nella documentazione) 
che name sia più lungo di 3 caratteri, 
che mail contenga un punto e una chiocciola e che age sia un numero. 
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->

<?php

$age = $_GET['age'] ?? '';
$name = $_GET['name'] ?? '';
$mail = $_GET['mail'] ?? '';

$is_age_valid = is_numeric($age);
$is_name_valid = mb_strlen($name) > 3;
$is_mail_valid = strpos($mail, '@') !== false && strpos($mail, '.') !== false;

if ($is_age_valid && $is_mail_valid && $is_name_valid) {
  echo 'Accesso riuscito';
} else {
  echo 'Accesso negato';
}
