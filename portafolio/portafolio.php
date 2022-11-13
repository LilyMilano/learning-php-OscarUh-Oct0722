<?php
include("cabecera.php");
?>
<?php
include("conexion.php");
?>
<!-- ____________________________________________________________________________ -->

<?php

if($_POST){

    $nombre=$_POST['nombre'];
    $descripcion=$_POST['descripcion'];

    $fecha=new DateTime();
    $imagen=$fecha->getTimestamp()."_".$_FILES['archivo']['name'];
    
    $imagen_temporal=$_FILES['archivo']['tmp_name'];
    move_uploaded_file($imagen_temporal,"imagenes/".$imagen);
    
    $objConexion=new conexion(); // nueva instancia
    $sql="INSERT INTO `proyectos` (`id`, `nombre`, `imagen`, `descripcion`) VALUES (NULL, '$nombre', '$imagen', '$descripcion');";
    
    $objConexion->ejecutar($sql);
}

if($_GET){
    
    $id=$_GET['borrar'];
    $objConexion=new conexion();
    
    $imagen=$objConexion->consultar("SELECT imagen FROM `proyectos` WHERE id=".$id);
    unlink("imagenes/".$imagen[0]['imagen']);

    
    $sql="DELETE FROM `proyectos` WHERE `proyectos`.`id` =".$id;
    $objConexion->ejecutar($sql); 
}

$objConexion=new conexion();
$proyectos=$objConexion->consultar("SELECT * FROM `proyectos`");

//print_r($proyectos);

?>
<br>

<!-- _________________bs5-grid-default____________________ -->

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <!-- _________________Formulario______________ -->
            <div class="card">
                <div class="card-header">
                    Datos del Proyecto
                </div>
                <div class="card-body">
                    <form action="portafolio.php" method="post" enctype="multipart/form-data">
                        <!-- enctype="multipart/form-data: para recibir archivos de tipo file -->

                        Nombre del Proyecto: <input class="form-control" type="text" name="nombre" id="">
                        <br>
                        Imagen del Proyecto: <input class="form-control" type="file" name="archivo" id="">
                        <br>
                        Descripción:
                        <textarea class="form-control" name="descripcion" id="" rows="3">
                            </textarea><br>
                        <input class="btn btn-success" type="submit" value="Enviar Proyecto">

                    </form>
                </div>
            </div>
        </div>
        <!-- ___________________Tabla_____________________ -->
        <div class="col-md-6">
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Imagen</th>
                        <th>Descripción</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>

                    <?php foreach($proyectos as $proyecto) { ?>
                    <tr>
                        <td><?php echo $proyecto['id']; ?></td>
                        <td><?php echo $proyecto['nombre']; ?></td>
                        <td>
                            <img width="100" src="imagenes/<?php echo $proyecto['imagen']; ?>" alt="" srcset="">
                        </td>
                        <td><?php echo $proyecto['descripcion']; ?></td>
                        <td> <a class=" btn btn-danger" href="?borrar=<?php echo $proyecto['id']; ?>">Eliminar</a>
                        </td>
                    </tr>
                    <?php } ?>

                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- _____________________________________________________ -->


<?php
include("pie.php");
?>