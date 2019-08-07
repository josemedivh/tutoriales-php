<?php  include 'conexion.php';
$id = $_REQUEST['id'];

$sel = $con-> query("SELECT * FROM alumnos WHERE id='$id' ");
if ($fila = $sel -> fetch_assoc()){

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="update.php" method="post">
    <input type="hidden" name="id" value="<?php echo $id ?>">
    <input type="text" name="nombre" placeholder="Nombre del alumno" value="<?php echo $fila['nombre']?>"><br>
    <input type="text" name="paterno" placeholder="Apellido paterno" value="<?php echo $fila['paterno']?>"><br>
    <input type="text" name="materno" placeholder="Apellido materno" value="<?php echo $fila['materno']?>"><br>
    <input type="submit" value="Guardar">
</form>
    
</body>
</html>
