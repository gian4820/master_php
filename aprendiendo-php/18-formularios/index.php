<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Php</title>
</head>
<body>
    
    <h1>Formulario</h1>
    <form action="" method="POST" enctype="multipart/form-data">

        <input type="text" name= "nombre" placeholder="Nombre"> <br>
        <input type="text" name="apellido" placeholder="Apellido"><br>

        <textarea name="desc" id="" cols="30" rows="10" placeholder="Descripcion"></textarea> <br>

        <select name="deportes" id="">
            <option value="futbol">Futbol</option>
            <option value="mma">MMA</option>
            <option value="golf">Golf</option>
        </select>

        <input type="submit" value="Enviar">

    </form>




</body>
</html>