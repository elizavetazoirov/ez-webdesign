<!-- send_message.php -->
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
    
    if (empty($name) || empty($email) || empty($message)) {
        echo "Te rog completează toate câmpurile.";
        exit;
    }

    // Setează adresa de email la care vor fi trimise mesajele
    $to = "adresa_ta@domeniu.com";  // Înlocuiește cu adresa ta de email
    $subject = "Mesaj de la " . $name;
    $body = "Ai primit un mesaj de la $name ($email):\n\n$message";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "Mesajul a fost trimis cu succes!";
    } else {
        echo "A apărut o eroare la trimiterea mesajului.";
    }
} else {
    echo "Formularul nu a fost completat corect.";
}
?>
