<?php
include('dbase.php');

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query = "DELETE FROM tareas WHERE id = $id";
    $result = mysqli_query($conn, $query);

    if(!$result){
        die("No se puedo eliminar");
    }

    $_SESSION['message'] = "Tarea Eliminada";
    $_SESSION['message_type'] = "success";

    header("Location: index.php");
}
?>