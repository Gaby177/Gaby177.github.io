<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'D:/XAMPP/htdocs/PizzaLuigi PHP/PHPMailer-master/src/Exception.php';
require 'D:/XAMPP/htdocs/PizzaLuigi PHP/PHPMailer-master/src/PHPMailer.php';
require 'D:/XAMPP/htdocs/PizzaLuigi PHP/PHPMailer-master/src/SMTP.php';

date_default_timezone_set('Europe/Bucharest');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["nume"];
  $phone = $_POST["telefon"];
  $address = $_POST["adresa"];
  $delivery = $_POST["livrare"];
  $notes = $_POST["observatii"];

  // produse cos cumparaturi
  $cart = json_decode($_POST["cart"], true);

 $uniqueID = uniqid();


  $to = "luigipizza.comanda@gmail.com";
  $subject = "Comanda #" . $uniqueID;
  $message = "Nume: " . $name . "\n";
  $message .= "Telefon: " . $phone . "\n";
  $message .= "Addresa: " . $address . "\n";
  $message .= "Metoda Livrare: " . $delivery . "\n";
  $message .= "Observatii: " . $notes . "\n";
  $message .= "Data Comanda: " . date('d-m-Y H:i:s') . "\n";

  
  if (!empty($cart)) {
    $message .= "Comanda:\n\n";

    $totalPrice = 0;

    foreach ($cart as $item) {
      $itemName = $item['name'];
      $quantity = $item['quantity'];
      $price = $item['price'];

      $message .= "Produs: $itemName\n";
      $message .= "Cantitate: $quantity\n";
      $message .= "Pret: $price\n\n";

      $totalPrice += $price * $quantity;
    }

    $message .= "Pret total: $totalPrice\n";
  } else {
    echo "NU s-a putut trimite comanda deoarece coșul de cumpăraturi este gol. Vă rugam adăugați produse în coș.";
    return;
  }


  $mail = new PHPMailer(true);

  try {
    //setari SMTP
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = 'tls';
    $mail->Username = 'luigipizza.comanda@gmail.com'; 
    $mail->Password = 'pizzaluigi10'; 
    $mail->Port = 587;
    $mail->Password = 'zfuk cebm rudq nxst'; // Two Factor...


    $mail->setFrom('client@gmail.com', 'Client');
    $mail->addAddress($to);

    $mail->Subject = $subject;
    $mail->Body = $message;


    $mail->send();

    header("Location: succes.html");
    exit();
  } catch (Exception $e) {
    echo "A aparut o eroare. Va rugam incercati din nou " . $mail->ErrorInfo;
  }
}
?>
