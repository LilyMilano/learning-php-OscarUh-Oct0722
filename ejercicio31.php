<?php
$txtNombre="";
$radioLenguaje="";
$chkhtml="";
$chkcss="";
$chkphp="";
$lsAnime="";
$txtComentario="";


if($_POST){
    $txtNombre=(isset($_POST['txtNombre']))?$_POST['txtNombre']:"";
    $radioLenguaje=(isset($_POST['lenguaje']))?$_POST['lenguaje']:"";
    $chkhtml=(isset($_POST['chkhtml'])=="si")?"checked":"";
    $chkcss=(isset($_POST['chkcss'])=="si")?"checked":"";
    $chkphp=(isset($_POST['chkphp'])=="si")?"checked":"";
    $lsAnime=(isset($_POST['lsAnime']))?$_POST['lsAnime']:"";
    $txtComentario=(isset($_POST['txtComentario']))?$_POST['txtComentario']:"";
    //Instrucción de Insertar
    //Rutina para algún cálculo
    //Puedes dar valores para mostrar iteraciones
    
    print_r($_POST);  //Para efectos de Validación
}

?>
<!-- _______________Documento HTML con código PHP Embebido__________________ -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>

<body>

    <?php if($_POST){ ?>
    <br><br><strong>Hola:</strong> <?php echo $txtNombre; ?>
    <br><strong>Tu lenguaje preferido es: </strong> <?php echo $radioLenguaje; ?>
    <br><strong>Estás aprendiendo:</strong>
    - <?php echo ($chkhtml=="checked")?"HTML":""; ?>
    - <?php echo ($chkcss=="checked")?"CSS":""; ?>
    - <?php echo ($chkphp=="checked")?"PHP":""; ?>
    <br><strong>Estás viendo el ánime: </strong><?php echo $lsAnime; ?>
    <br><strong>Tu comentario es: </strong><?php echo $txtComentario; ?>
    <?php } ?>

    <br><br>

    <form action="ejercicio31.php" method="post">

        <!-- input text -->
        <label for="txtNombre">Nombre:</label>
        <input value=" <?php echo $txtNombre ?> " type="text" name="txtNombre" id="txtNombre"><br><br>

        <!-- input radio -->
        <label for="lenguaje">Lenguaje Preferido:</label>
        <label> <input type="radio" <?php echo ($radioLenguaje=="HTML")?"checked":""; ?> name="lenguaje"
                value="HTML">HTML</label>
        <label> <input type="radio" <?php echo ($radioLenguaje=="CSS")?"checked":""; ?> name="lenguaje"
                value="CSS">CSS</label>
        <label> <input type="radio" <?php echo ($radioLenguaje=="PHP")?"checked":""; ?> name="lenguaje"
                value="PHP">PHP</label><br><br>

        <!-- input checkbox -->
        <p>Estás aprendiendo:</p>
        HTML<input type="checkbox" <?php echo $chkhtml;?> name="chkhtml" value="si" id=""><br>
        CSS<input type="checkbox" <?php echo $chkcss;?> name="chkcss" value="si" id=""><br>
        PHP<input type="checkbox" <?php echo $chkphp;?> name="chkphp" value="si" id=""><br>
        <br>

        <!-- input Dropdown List -->
        <p>¿Cuál ánime estás viendo?</p>
        <select name="lsAnime" id="">
            <option value="">[Ninguna serie]</option>
            <option value="Naruto" <?php echo ($lsAnime=="Naruto")?"selected":"";?>>Naruto</option>
            <option value="Bleach" <?php echo ($lsAnime=="Bleach")?"selected":"";?>>Bleach</option>
            <option value="Dragon Ball" <?php echo ($lsAnime=="Dragon Ball")?"selected":"";?>>Dragon Ball</option>
        </select>
        <br><br>

        <!-- Texarea -->
        <p>¿Tienes alguna duda?</p>
        <textarea name="txtComentario" id="" cols="30" rows="10">
            <?php echo $txtComentario; ?>
        </textarea><br><br>

        <!-- input submit -->
        <input type="submit" value="Enviar Información">
    </form>

</body>

</html>