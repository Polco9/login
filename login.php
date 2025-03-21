<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Alineado</title>
    <style>
        .form-container {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            gap: 10px; /* Espacio entre los elementos */
        }

        .form-container label {
            width: 100px; /* Ancho fijo para las etiquetas */
            text-align: right;
            margin-right: 10px;
        }

        .form-container input {
            width: 200px; /* Ancho de los campos de entrada */
            padding: 5px;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <div>
            <label for="username">Username:</label>
            <input type="text" id="username" placeholder="Username">
        </div>
        <div>
            <label for="gmail">Gmail:</label>
            <input type="email" id="gmail" placeholder="example@gmail.com">
        </div>
        <div>
            <label for="password">Password:</label>
            <input type="password" id="password" placeholder="Password">
        </div>
    </div>
</body>
</html>