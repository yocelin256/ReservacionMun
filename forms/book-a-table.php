<?php
require '../sql/conexion.php';  // Ajusta ruta según dónde esté tu config.php
require '../PHPMailer/PHPMailer.php';
require '../PHPMailer/SMTP.php';
require '../PHPMailer/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Conexión a BD
// Asumo que en config.php tienes algo como:
// $conn = new mysqli($host, $user, $pass, $db);

$name    = isset($_POST['name']) ? $conn->real_escape_string($_POST['name']) : '';
$email   = isset($_POST['email']) ? $conn->real_escape_string($_POST['email']) : '';
$phone   = isset($_POST['phone']) ? $conn->real_escape_string($_POST['phone']) : '';
$people  = isset($_POST['people']) ? $conn->real_escape_string($_POST['people']) : '';
$date    = isset($_POST['date']) ? $conn->real_escape_string($_POST['date']) : '';
$time    = isset($_POST['time']) ? $conn->real_escape_string($_POST['time']) : '';
$message = isset($_POST['message']) ? $conn->real_escape_string($_POST['message']) : '';

// Validar campos obligatorios
if(empty($name) || empty($email) || empty($phone) || empty($people) || empty($date) || empty($time)){
    die("Por favor completa todos los campos obligatorios.");
}

// Insertar en la tabla reservacion (adaptar si los nombres de columna son distintos)
$sql = "INSERT INTO reservacion (nombre, email, telefono, invitados, fecha, hora, comentarios)
        VALUES ('$name', '$email', '$phone', '$people', '$date', '$time', '$message')";

if($conn->query($sql) === TRUE){
    // Preparar y enviar correo
    $mail = new PHPMailer(true);
    try {
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'yocelingarcia2110@gmail.com';      // Cambia aquí tu correo
    $mail->Password   = 'qfqe apsa rcbr hktq';              // Cambia aquí la contraseña o app password
    $mail->SMTPSecure = 'tls';
    $mail->Port       = 587;

    $mail->setFrom('yocelingarcia2110@gmail.com', 'MunClub');
    $mail->addAddress($email, $name);
    $mail->Subject = 'Confirmacion de tu reservacion';

    // Indicar que el correo será HTML
    $mail->isHTML(true);

    // Cuerpo del correo con HTML
    $mail->Body = '
    <!DOCTYPE html>
    <html lang="es">
    <head>
      <meta charset="UTF-8" />
      <title>Confirmación de reservación</title>
    </head>
    <body style="font-family: Arial, sans-serif; background-color: #f8f9fa; margin: 0; padding: 0;">
      <table align="center" width="600" cellpadding="0" cellspacing="0" style="background-color: #ffffff; border-radius: 8px; box-shadow: 0 0 10px rgba(0,0,0,0.1);">
        <tr>
          <td style="background-color: #13357B; padding: 20px; color: white; text-align: center; font-size: 24px; font-weight: bold;">
            MunClub - Confirmación de Reservación
          </td>
        </tr>
        <tr>
          <td style="padding: 30px; color: #333;">
            <p>Hola <strong>'.htmlspecialchars($name).'</strong>,</p>
            <p>Tu reservación fue registrada correctamente. Aquí tienes los detalles:</p>
            <table cellpadding="5" cellspacing="0" width="100%" style="border-collapse: collapse;">
              <tr>
                <td style="background-color: #e9ecef; font-weight: bold; width: 150px;">Fecha:</td>
                <td>'.htmlspecialchars($date).'</td>
              </tr>
              <tr>
                <td style="background-color: #e9ecef; font-weight: bold;">Hora:</td>
                <td>'.htmlspecialchars($time).'</td>
              </tr>
              <tr>
                <td style="background-color: #e9ecef; font-weight: bold;">Personas:</td>
                <td>'.htmlspecialchars($people).'</td>
              </tr>
              <tr>
                <td style="background-color: #e9ecef; font-weight: bold;">Comentario:</td>
                <td>'.nl2br(htmlspecialchars($message)).'</td>
              </tr>
            </table>
            <p style="margin-top: 20px;">¡Gracias por reservar con nosotros!<br>Te esperamos en <strong>MunClub</strong>.</p>
          </td>
        </tr>
        <tr>
          <td style="background-color: #13357B; color: white; text-align: center; padding: 10px; font-size: 12px;">
            © '.date('Y').' MunClub. Todos los derechos reservados.
          </td>
        </tr>
      </table>
    </body>
    </html>
    ';

    $mail->send();
} catch (Exception $e) {
    echo "Error al enviar correo: {$mail->ErrorInfo}";
}

    // Preparar mensaje para WhatsApp
    $mensaje = "NUEVA RESERVACIÓN\nNombre: $name\nCorreo: $email\nTeléfono: $phone\nPersonas: $people\nFecha: $date\nHora: $time\nComentario: $message";
    $numero = "522211258721"; // Número del dueño
    $mensaje_url = urlencode($mensaje);
    $link_wa = "https://wa.me/$numero?text=$mensaje_url";

  echo '
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
  document.addEventListener("DOMContentLoaded", function() {
    Swal.fire({
      icon: "success",
      title: "¡Reservación guardada con éxito!",
      html: `
        <p style="font-size:16px; color:#333; margin-bottom:20px;">
          Se ha enviado un correo de confirmación.
        </p>
        <a href="'.$link_wa.'" target="_blank"
           style="display:inline-block;padding:10px 20px;background-color:#25D366;color:#fff;
                  text-decoration:none;border-radius:6px;font-weight:bold;">
          Enviar mensaje WhatsApp al dueño
        </a>
      `,
      showConfirmButton: false,
      allowOutsideClick: true,
      background: "#fff",
      customClass: {
        title: "swal-title-custom",
        popup: "swal-popup-custom"
      }
    }).then(() => {
      window.location.href = "/";
    });
  });
</script>

<style>
  .swal-title-custom {
    font-family: "Segoe UI", sans-serif;
    font-size: 22px;
    font-weight: bold;
    color: #333;
  }

  .swal-popup-custom {
    border-radius: 12px;
    padding: 30px 20px;
    box-shadow: 0 8px 24px rgba(0,0,0,0.2);
  }
</style>
';


} else {
    echo '
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
      Swal.fire({
        icon: "error",
        title: "Error",
        text: "Error al guardar la reservación: '.$conn->error.'"
      }).then(() => {
        window.history.back();
      });
    </script>';
}

$conn->close();
?>
