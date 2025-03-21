<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos del Contacto</title>
</head>
<body>
    <h1>Datos Recibidos</h1>
    <p><strong>Nombre:</strong> {{ $data['name'] }}</p>
    <p><strong>Teléfono:</strong> {{ $data['phone'] }}</p>
    <p><strong>Dirección:</strong> {{ $data['address'] }}</p>
    <p><strong>Email:</strong> {{ $data['email'] }}</p>
</body>
</html>
