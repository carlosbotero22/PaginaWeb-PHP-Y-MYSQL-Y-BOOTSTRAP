<?php
include("dbase.php");

if (isset($_POST)){
    $titulo = $_POST['titulo'];
    $descripcion = $_POST['descripcion'];
    
    $query = "INSERT INTO tareas(titulo, descripcion) values ('$titulo', '$descripcion')";
    $result = mysqli_query($conn, $query);
    if(!$result){
        die("Query Failed");
    }

    $_SESSION['message'] = "Tarea Guardada";
    $_SESSION['message_type'] = "success";

    header("Location: index.php");
}

?>