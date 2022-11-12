<?php
include("cabecera.php");
?>
<?php
include("conexion.php");
?>
<?php
$objConexion=new conexion(); // nueva instancia
$sql="INSERT INTO `proyectos` (`id`, `nombre`, `imagen`, `descripcion`) VALUES (NULL, 'Proyecto 1', 'imagen.jpg', 'Es un proyecto de 1995.');";
$objConexion->ejecutar($sql);
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
                    <form action="portafolio.php" method="post">

                        Nombre del Proyecto: <input class="form-control" type="text" name="nombre" id="">
                        <br>
                        Imagen del Proyecto: <input class="form-control" type="file" name="archivo" id="">
                        <br>
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
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>3</td>
                        <td>Aplicación Web</td>
                        <td>imagen.jpg</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- _____________________________________________________ -->


<?php
include("pie.php");
?>