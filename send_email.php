<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "thepolortiz.shop@gmail.com";  // Tu dirección de correo
    $subject = "Nuevo mensaje desde la web";
    
    $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
    $message = htmlspecialchars($_POST["msg"]);

    $headers = "From: " . $email . "\r\n" .
               "Reply-To: " . $email . "\r\n" .
               "X-Mailer: PHP/" . phpversion();

    if (mail($to, $subject, $message, $headers)) {
        echo "Mensaje enviado con éxito";
    } else {
        echo "Error al enviar el mensaje";
    }
}
?>