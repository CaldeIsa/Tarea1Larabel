<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Contacto</title>
</head>
<body>
    <h1>Formulario de Contacto</h1>
    <form action="/contact" method="POST">
        @csrf
        <label>Nombre: <input type="text" name="name" required></label><br>
        <label>Teléfono: <input type="text" name="phone" required></label><br>
        <label>Dirección: <input type="text" name="address" required></label><br>
        <label>Email: <input type="email" name="email" required></label><br>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>
