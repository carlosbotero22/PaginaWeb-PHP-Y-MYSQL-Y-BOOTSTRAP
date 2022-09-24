<?php include("dbase.php"); ?>

<?php include("includes/header.php") ?>

<div class="container p-4">
    <div class="row">
        
        <div class="col-md-4">
            <?php if(isset($_SESSION['message'])){?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
            <?= $_SESSION['message'] ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php session_unset(); }?>
            <div class="card card-body">
                <h2 style="text-align: center;">Mis Tareas</h2>
                <br>
                <form action="guardar.php" method="POST">
                    <div class="form-group">
                        <input type="text" name="titulo" placeholder="Ingresa un titulo" class="form-control" autofocus required>
                    </div>
                    <br>
                    <div class="form-group">
                        <textarea name="descripcion" rows="2" placeholder="Ingresa una descripcion" class="form-control" required></textarea>
                    </div>
                    <br>
                    <input type="submit" class="btn btn-success btn-block" name="save_task" value="Enviar">
                </form>
            </div>
        </div>
        <div class="col-md-8">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Titulo</th>
                            <th>Descripcion</th>
                            <th>Fecha de Creación</th>
                            <th>Accion</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        $query = "SELECT * FROM tareas";
                        $result_tareas = mysqli_query($conn, $query);

                        while($row = mysqli_fetch_array($result_tareas)){?>
                            <tr>
                                <td><?php echo($row['titulo'])?></td>
                                <td><?php echo($row['descripcion'])?></td>
                                <td><?php echo($row['creado'])?></td>
                                <td>
                                    <a href="editar.php?id=<?php echo($row['id'])?>" class="btn btn-success">
                                        <i class="fas fa-marker"></i>
                                    </a>
                                    <a href="eliminar.php?id=<?php echo($row['id'])?>" class="btn btn-danger">
                                        <i class="far fa-trash-alt"></i>
                                    </a>
                                </td>
                            </tr>
                        <?php }?>
                    </tbody>
                </table>
        </div>
    </div>
</div>


<?php include("includes/footer.php") ?>