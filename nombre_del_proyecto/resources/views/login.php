<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" >
    <title>Iniciar Sesion | ENSA</title>

</head>
<body>
    <div class="login">
        <div class="imagen" style="background-image: url(imagenes/img-login.jpg);">
        </div>
        <div class="frm-login">
            <form>
                <h1>Iniciar Sesion</h1>
                <div class="form-group row" style="margin-bottom:30px;">
                    <label for="exampleInputEmail1" class="col-sm-4"><b>Ingresar usuario:</b></label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group row" style="margin-bottom:30px;">
                    <label for="exampleInputEmail1" class="col-sm-4"><b>Ingresar clave:</b></label>
                    <div class="col-sm-8">
                        <input type="password" class="form-control">
                    </div>
                </div>
                <div class="form-group" style="text-align:center;">
                    <a href="crear_acceso.php" class="btn btn-primary">Ingresar</a>
                </div>
               
            </form>
        </div>
    </div>
   

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>