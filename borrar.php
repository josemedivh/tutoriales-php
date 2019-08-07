<?php include 'conexion.php';

$id =$_REQUEST['id'];

$del = $con->query(" DELETE FROM alumnos WHERE id='$id' ");
if($del){
    echo "<script>
    location.href='index.php';
    </script>";
}else{
    echo "<script>
    alert('El registro no pudo ser eliminado');
    location.href='index.php';
    </script>";
}


?>