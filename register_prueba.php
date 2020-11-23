<?php 
define('__CONFIG__',true);
//DEFINE THE CONFIG
require_once 'inc/config.php';
//ALLOW THE CONFIG ?>



<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="robots" content="follow">

    <!--Uikit JS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.4.2/dist/css/uikit.min.css" />
    <title>Page title</title>
</head>

<body>

<div class="uk-section uk-container">
    <div class="uk-grid uk-child-width-1-3@s uk-child-width-1-1" uk-grid>
        <form class="uk-form-stacked js-register">

            <h1>Examen Psicométrico</h1>
            <h3>Registro de Candidato</h3>

          
            </div>

                 <div class="uk-margin" >
                <label class="uk-form-label" for="form-stacked-text">Entidad de Nacimiento</label>
                <div class="uk-form-row">
                    <select name="estado" class="uk-select" id="estado">
                        <option value="" id="estado"> seleccionar estado</option>
                        <?php  
                        $con = mysqli_connect('localhost','itzelavila','iaac23','test_psicometrico');
                        $query = mysqli_query($con, "SELECT * FROM estados");
                        while ($row=mysqli_fetch_array($query)){
                         ?> 
                         <option value="<?php echo $row['id']; ?>"><?php echo $row['nombre']?></option>
                         <?php   
                        }
                        ?>
                    </select>
                </div>

                <div class="uk-form-row">
                    <select name="municipio" class="uk-select" id="municipio">
                        <option value="" id="municipio">seleccionar municipio</option>
                    </select>
                </div>
            </div>

                <div class="uk-margin" style="position: relative;  top:50px; ">
                <button class="uk-button uk-button-default" type="submit">REGISTRAR</button>
            </div>

        </form>
    </div>  
 

</div>
<?php require_once 'inc/footer.php'; ?>
</body>
</html>