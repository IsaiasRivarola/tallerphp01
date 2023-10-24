<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JQUERY</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <div class="formFactorial">
        <input class="form-control" type="number" name = "numero" id="numero" id="numero" placeholder="numero entero <10">
        <button class="btn btn-primary" id= "calcular"> Calcular factorial</button>
    </div>
    <div id="resultado"></div>

<div class ="gifCarga">
    <img src="images/load.gif" alt="animacion" id="cargando">

</div>

</body>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/jquerry.min.js"></script>
<script src="js/funciones.js"></script>
<script>
        jQuery = ("#resultado").hide();
        jQuery = ("#cargando").hide();
</script>
</html>