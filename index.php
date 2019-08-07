<?php include 'conexion.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="guardar.php" method="post">
    <input type="text" name="nombre" placeholder="Nombre del alumno"><br>
    <input type="text" name="paterno" placeholder="Apellido paterno"><br>
    <input type="text" name="materno" placeholder="Apellido materno"><br>
    <input type="submit" value="Guardar">
</form>

<table>
    <th>id</th>
    <th>nombre</th>
    <th>apellido paterno</th>
    <th>apellido materno</th>
    <th></th>
    <th></th>
    <?php
    $sel = $con->query("SELECT * FROM alumnos");
    while($fila = $sel->fetch_assoc()){
    ?>
    <tr>
        <td><?php echo $fila['id']?></td>
        <td><?php echo $fila['nombre']?></td>
        <td><?php echo $fila['paterno']?></td>
        <td><?php echo $fila['materno']?></td>
        <td><a href="actualizar.php?id=<?php echo $fila['id']?>">Editar</a></td>
        <td><a href="borrar.php?id=<?php echo $fila['id']?>">Eliminar</a></td>
    </tr> 
    <?php }?>   
    
    
</table>
    

</body>
</html>