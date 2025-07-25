<?php
require '../sql/conexion.php'; 

$mensaje = strtolower(trim($_POST['mensaje']));

// Palabras clave por categoría
$respuestas = [
    "saludo" => [
        "palabras" => ["hola", "buenas", "hey", "holi"],
        "respuesta" => "¡Hola! ¿En qué puedo ayudarte?"
    ],
    "horario" => [
        "palabras" => ["horario", "hora", "abren", "cierran"],
        "respuesta" => "Nuestro horario es de lunes a domingo de 11:00 AM a 6:00 PM."
    ],
    "ubicacion" => [
        "palabras" => ["ubicacion", "donde", "direccion", "local"],
        "respuesta" => "Estamos ubicados en Boulevard Barra Vieja KM 31, San Andrés Playa Encantada, Gro."
    ],
    "reservacion" => [
        "palabras" => ["reservar", "reserva", "reservación", "apartado"],
        "respuesta" => "Puedes hacer tu reserva directamente en la sección de 'Reservación'."
    ],
    "agradecimiento" => [
        "palabras" => ["gracias", "muchas gracias", "mil gracias"],
        "respuesta" => "¡De nada! 😊"
    ]
];

$respuesta = "Lo siento, no entendí tu mensaje. ¿Podrías reformularlo?";

foreach ($respuestas as $categoria) {
    foreach ($categoria["palabras"] as $palabra) {
        if (strpos($mensaje, $palabra) !== false) {
            $respuesta = $categoria["respuesta"];
            break 2; // Rompe ambos bucles
        }
    }
}

// Guardar en la base de datos
$stmt = $conn->prepare("INSERT INTO mensajes (mensaje_usuario, respuesta_bot) VALUES (?, ?)");
$stmt->bind_param("ss", $mensaje, $respuesta);
$stmt->execute();

echo $respuesta;
?>
