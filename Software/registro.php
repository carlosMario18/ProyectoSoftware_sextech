<?php
$servername = "localhost";
$username = "root";
$password = "admin";
$dbname = "web";

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
} else {
    echo "Conexión exitosa";
}

// Obtener los datos del formulario
$nombre = $_POST['nombre'] ?? '';
$correo = $_POST['correo'] ?? '';
$contrasena = $_POST['contrasena'] ?? '';

// Validar que los campos no estén vacíos
if (!$nombre || !$correo || !$contrasena) {
  echo json_encode(array('success' => false, 'message' => 'Por favor completa todos los campos'));
  exit;
}

// Validar que el correo tenga un formato válido
if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
  echo json_encode(array('success' => false, 'message' => 'El correo ingresado no es válido'));
  exit;
}

// Encriptar la contraseña
$contrasena_encriptada = password_hash($contrasena, PASSWORD_DEFAULT);

// Insertar el registro en la base de datos
$sql = "INSERT INTO usuarios (nombre, correo, contrasena) VALUES ('$nombre', '$correo', '$contrasena')";

if ($conn->query($sql) !== TRUE) {
  echo json_encode(array('success' => false, 'message' => 'Error en el registro: ' . $conn->error));
  exit;
}

echo json_encode(array('success' => true, 'message' => 'Registro exitoso'));

// Cerrar la conexión a la base de datos
$conn->close();

?>
