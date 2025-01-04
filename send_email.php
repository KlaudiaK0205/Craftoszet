<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['username'];
    $surname = $_POST['usersurname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
    
    $to = "klaudia_krol@o2.pl"; // Tutaj wprowadź adres właściciela
    $subject = "Wiadomość ze strony kontaktowej";
    $body = "Imię: $name\nNazwisko: $surname\nEmail: $email\nTelefon: $phone\n\nWiadomość:\n$message";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "Wiadomość wysłana!";
    } else {
        echo "Wystąpił błąd. Spróbuj ponownie później.";
    }
}
?>