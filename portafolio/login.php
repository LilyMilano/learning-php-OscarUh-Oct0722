<?php
session_start();

if($_POST){

    if(($_POST['usuario']=="Liliana1") && ($_POST['contrasenia']=="1234")){

        $_SESSION['usuario']="Liliana1";  //Lo hacemos así para recuperar datos ingresados. Forma típica: $_SESSION['login']=true;
        
        header("location:index.php");
        
    }else {
        
        echo "<script> alert('Usuario o Contraseña incorrecta');  </script>"; //código javascript
    }
    
}

?>

<!--////////////////////////////////////////////////////////////////////
                                HTML FILE 
//////////////////////////////////////////////////////////////////////-> 
<!doctype html>
<html lang="en">

<head>
    <title>Login</title>
    <!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS v5.2.1 -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
</head>

<body>

    <div class="container">
        .<div class="row">

            <div class=" col-md-4"></div>

            <div class=" col-md-4"><br>
                <div class="card">
                    <div class="card-header">
                        Iniciar Sesión
                    </div>
                    <div class="card-body">
                        <form action="login.php" method="post">
                            Usuario: <input class="form-control" type=" text" name="usuario" id="">
                            <br>
                            Contraseña: <input class="form-control" type="password" name="contrasenia" id="">
                            <br>
                            <button class="btn btn-success" type="submit">Entrar al portafolio</button>
                        </form>
                    </div>
                    <div class="card-footer text-muted"></div>
                </div>
            </div>

            <div class=" col-md-4"></div>

        </div>
    </div>

</body>

</html>