<!DOCTYPE html>
<html>
<head>
    <title style="font-family: Arial, sans-serif; color: #0099cc;">Tienda en Línea</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            color: #333333;
            line-height: 1.6;
            margin: 30px;
        }
        h1 {
            font-family: 'Helvetica Neue', sans-serif;
            color: #ff6600;
            font-size: 28px;
            margin-bottom: 20px;
        }
        h2 {
            font-family: 'Arial Black', sans-serif;
            color: #ff6600;
            font-size: 24px;
            margin-bottom: 10px;
        }
        label {
            font-family: 'Trebuchet MS', sans-serif;
            color: #333333;
            display: block;
            margin-bottom: 5px;
        }
        input[type="text"],
        input[type="password"],
        input[type="submit"] {
            font-family: 'Verdana', sans-serif;
            font-size: 16px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-bottom: 10px;
        }
        input[type="submit"] {
            background-color: #0099cc;
            color: white;
            cursor: pointer;
        }
        ul {
            font-family: 'Georgia', serif;
            color: #333333;
            list-style-type: none;
            margin: 0;
            padding: 0;
        }
        li {
            font-size: 18px;
            margin-bottom: 5px;
        }
        p {
            font-family: 'Verdana', sans-serif;
            color: #333333;
            font-size: 18px;
            margin-top: 5px;
        }
    </style>
</head>
<body>
    <h1>Bienvenido a nuestra tienda en línea</h1>
    <div>
        <h2>Iniciar Sesión</h2>
        <form action="http://microservicio-gestion-usuarios.com/login" method="post">
            <label for="username">Usuario:</label>
            <input type="text" id="username" name="username">
            <br>
            <label for="password">Contraseña:</label>
            <input type="password" id="password" name="password">
            <br>
            <input type="submit" value="Iniciar Sesión">
        </form>
    </div>

    <div>
        <h2>Catálogo de Productos</h2>
        <ul>
            <li>Producto 1</li>
            <li>Producto 2</li>
            <li>Producto 3</li>
            <!-- y así sucesivamente -->
        </ul>
    </div>

    <div>
        <h2>Carrito de Compras</h2>
        <ul>
            <li>Producto 1 - $10</li>
            <li>Producto 3 - $15</li>
            <!-- y así sucesivamente -->
        </ul>
        <p>Total: $25</p>
        <form action="http://microservicio-pagos.com/procesar-pago" method="post">
            <input type="hidden" name="total" value="25">
            <input type="submit" value="Pagar">
        </form>
    </div>
</body>
</html>

