<?php
	session_start();
	$_SESSION['basesdatos']=$_POST['databases'];
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
                                <h2 class="text-center">Selecciona una tabla</h2>
                                <p>Selecciona la opcion adecuada</p>
                                <form action="selecciondescarga.php" name="tables" id="register-form" role="form" autocomplete="off" class="form" method="post">
                                  <div class="form-group">
									<div class="input-group">
                                            <select name="tables" id="tables" class="form-control">
												<?php
													$enlace = mysqli_connect($_SESSION['Ip'],$_SESSION['Usuario'],$_SESSION['password'],$_SESSION['basesdatos']);
													$set = mysqli_query($enlace, "SHOW TABLES");
													while($tb = mysqli_fetch_row($set)){
														echo "<option>".$tb[0]."</option>";
													}
												?>
											</select>
                                        </div>
									 </div>
                                    <div class="form-group">
                                        <input name="btnForget" class="btn btn-lg btn-primary btn-block btnForget" value="Seleccionar" type="submit">
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
	</body>
</html>