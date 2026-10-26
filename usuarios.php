<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Práctica 2 - Usuarios</title>
</head>
<body>

<h1>Práctica 2 de Pablo Lechuga Sánchez</h1>

<?php
// 1. Datos de conexión
$servidor  = "localhost";
$usuario   = "root";
$clave     = "";          // por defecto está vacía en XAMPP
$basedatos = "pruebaphppablo";

// 2. Conectar con el servidor MySQL
$conexion = mysqli_connect($servidor, $usuario, $clave, $basedatos);
mysqli_set_charset($conexion, "utf8mb4");   // para que salgan bien las tildes y la ñ

// 3. Consulta SQL
$consulta = "SELECT id, dni, nombre, apellidos, email, ciudad FROM usuario";
$resultado = mysqli_query($conexion, $consulta);

// 4. Mostrar los resultados en una tabla HTML
echo "<h2>Listado de usuarios</h2>";
echo "<table border=1 cellpadding=5>";
echo "<tr><th>ID</th><th>DNI</th><th>Nombre</th><th>Apellidos</th><th>Email</th><th>Ciudad</th></tr>";
while ($fila = mysqli_fetch_assoc($resultado)) {
    echo "<tr>";
    echo "<td>" . $fila['id'] . "</td>";
    echo "<td>" . $fila['dni'] . "</td>";
    echo "<td>" . $fila['nombre'] . "</td>";
    echo "<td>" . $fila['apellidos'] . "</td>";
    echo "<td>" . $fila['email'] . "</td>";
    echo "<td>" . $fila['ciudad'] . "</td>";
    echo "</tr>";
}
echo "</table>";

// 5. Liberar el resultado y cerrar la conexión
mysqli_free_result($resultado);
mysqli_close($conexion);
?>

</body>
</html>
