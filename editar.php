<?php
include('dbase.php');

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query = "SELECT * FROM tareas WHERE id = $id";
    $result = mysqli_query($conn, $query);
    if(mysqli_num_rows($result) == 1){
        $row = mysqli_fetch_array($result);
        $titulo = $row['titulo'];
        $descripcion = $row['descripcion'];
    }
}

if(isset($_POST['editar'])){
    $id = $_GET['id'];
    $titulo= $_POST['titulo'];
    $descripcion = $_POST['descripcion'];

    $query = "UPDATE tareas set titulo = '$titulo', descripcion = '$descripcion' WHERE id = $id";
    mysqli_query($conn, $query);

    $_SESSION['message'] = 'Tarea Actualizada!';
    $_SESSION['message_type'] = "success";
    header("Location: index.php");
}
?>

<?php include('includes/header.php')?>

<div class="container p-4">
    <div class="row">
        <div class="col-md-4 mx-auto">
            <div class="card card-body">
                <form action="editar.php?id=<?php echo $_GET['id']?>" method="POST">
                    <h2 style="text-align: center;">Actualizar Tarea</h2>
                    <br>
                    <div class="form-group">
                        <input type="text" name="titulo" value="<?php echo $titulo; ?>" class="form-control" placeholder="Ingresa un titulo">
                    </div>
                    <div class="form-group">
                        <textarea name="descripcion" rows="2" class="form-control" placeholder="Ingresa una descripcion"><?php echo $descripcion; ?></textarea>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-success" name="editar">Actualizar</button>
                </form>

            </div>
        </div>
    </div>
</div>

<?php include('includes/footer.php')?>