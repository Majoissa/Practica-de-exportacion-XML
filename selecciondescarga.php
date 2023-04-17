<?php
	session_start();
	$_SESSION['tablas']=$_POST['tables'];
?>
<!DOCTYPE html>
<html>
	<head>
		<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<title>Exportacion XML</title>
<style>

body{
    background:#f3c538;
}
.forget-pwd > a{
    color: #dc3545;
    font-weight: 500;
}
.forget-password .panel-default{
    padding: 31%;
    margin-top: -27%;
}
.forget-password .panel-body{
    padding: 15%;
    margin-bottom: -50%;
    background: #fff;
    border-radius: 5px;
    -webkit-box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
img{
    width:40%;
    margin-bottom:10%;
}
.btnForget{
    background: #c0392b;
    border:none;
}
.forget-password .dropdown{
    width: 100%;
    border: 1px solid #ced4da;
    border-radius: .25rem;
}
.forget-password .dropdown button{
    width: 100%;
}
.forget-password .dropdown ul{
    width: 100%;
}


</style>
	</head>
	<div class="container forget-password">
            <div class="row">
                <div class="col-md-12 col-md-offset-4">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="text-center">
                                <img src="imagenes/bd.png" alt="logotipo base de datos" border="0">
                                <h2 class="text-center">Seleccion de descarga</h2>
                                <p>Elije la accion que deseas realizar</p>
                               
                                    
										<?php
											echo "<form action='estructura.php' id='register-form' role='form' autocomplete='off' class='form' method='POST'>
												  <input type='submit' value='Descargar estructura xml' class='btn btn-lg btn-primary btn-block btnForget'>
												  </form><br>";
										?>
                                    
										<?php
											echo "<form action='estructuradatos.php' id='register-form' role='form' autocomplete='off' class='form' method='POST'>
												  <input type='submit' value='Descargar estructura y datos' class='btn btn-lg btn-primary btn-block btnForget'>
												  </form><br>";
										?>
                                   
									<div class="form-group">
									<form action="seleccionbd.php" method="post" id="register-form" role="form" autocomplete="off" class="form">
                                        <input name="btnForget" class="btn btn-lg btn-primary btn-block btnForget" value="Seleccionar base de datos" type="submit">
									</form>
									</div>
									<div class="form-group">
									<form action="inicio.html" method="post" id="register-form" role="form" autocomplete="off" class="form">
                                        <input name="btnForget" class="btn btn-lg btn-primary btn-block btnForget" value="Desconectar" type="submit">
									</form>
									</div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
	</body>
</html>