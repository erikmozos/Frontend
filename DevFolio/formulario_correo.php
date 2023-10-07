<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $subject = $_POST["subject"];
  $message = $_POST["message"];

  // Configura el correo
  $destinatario = "mozoskp@gmail.com"; // Cambia esto por tu dirección de correo electrónico
  $asunto = "Mensaje de contacto: $subject";
  $cuerpo = "Nombre: $name\nCorreo electrónico: $email\nAsunto: $subject\nMensaje:\n$message";

  // Envía el correo
  $enviado = mail($destinatario, $asunto, $cuerpo);

  if ($enviado) {
    // El correo se envió con éxito
    echo "<div id='sendmessage'>Tu mensaje ha sido enviado.</div>";
  } else {
    // Error al enviar el correo
    echo "<div id='errormessage'>Hubo un error al enviar el mensaje. Por favor, inténtalo de nuevo más tarde.</div>";
  }
}
?>