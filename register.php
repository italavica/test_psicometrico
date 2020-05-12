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

              <div class="uk-margin">
                <label class="uk-form-label" for="form-stacked-text">Apellido Paterno</label>
                <div class="uk-form-controls">
                    <input class="uk-input" id="ap" type="text" required="required" placeholder="">
                </div>
            </div>

           <div class="uk-margin" >
                <label class="uk-form-label" for="form-stacked-text">Apellido Materno</label>
                <div class="uk-form-controls">
                    <input class="uk-input" id="am" type="text" required="required" placeholder="">
                </div>
            </div>

             <div class="uk-margin" >
                <label class="uk-form-label" for="form-stacked-text">Nombres</label>
                <div class="uk-form-controls">
                    <input class="uk-input" id="nombres" type="text" required="required" placeholder="">
                </div>
            </div>
 
              <div class="uk-margin" >
                <label class="uk-form-label" for="form-stacked-text">Fecha de Nacimiento</label>
                <div class="uk-form-row">
                    <input type="date" class="birth-date">
                </div>
            </div>

                <div class="uk-margin" >
                <label class="uk-form-label" for="form-stacked-select">Sexo</label>
                <div class="uk-form-controls">
                     <select class="uk-select" id="sexo">
                        <option>Masculino</option>
                        <option>Femenino</option>

                    </select>
                </div>
            </div>

            <div class="uk-margin" >
                <label class="uk-form-label" for="form-stacked-select">Estado Civil</label>
                <div class="uk-form-controls">
                     <select class="uk-select" id="edo-civil">
                        <option>Soltero</option>
                        <option>Casado</option>
                        <option>Unión Libre</option>
                        <option>Viudo</option>

                    </select>
                </div>
            </div>

            <div class="uk-margin" style="position: relative;  top:25px; ">
                <label class="uk-form-label" for="form-stacked-text" style="font-size: 20px">Domicilio</label>
            </div>


              <div class="uk-margin" style="position: relative;  top:25px; ">
           

                    <label class="uk-form-label" for="form-stacked-text">Calle</label>
                    <div class="uk-form-controls">
                        <input class="uk-input" id="domicilio_calle" type="text" required="required" placeholder="">
                    </div>

                    <label class="uk-form-label" for="form-stacked-text">Número</label>
                    <div class="uk-form-controls">
                        <input class="uk-input" id="domicilio_numero" type="number" required="required" placeholder="">
                    </div>

                     <label class="uk-form-label" for="form-stacked-text">Colonia</label>
                    <div class="uk-form-controls">
                        <input class="uk-input" id="domicilio_colonia" type="text" required="required" placeholder="">
                    </div>

                     <label class="uk-form-label" for="form-stacked-text">Código Postal</label>
                    <div class="uk-form-controls">
                        <input class="uk-input" id="domicilio_cp" type="number" required="required" placeholder="">
                    </div>

            </div>

            <div class="uk-margin" style="position: relative;  top:50px; ">
                <label class="uk-form-label" for="form-stacked-text">Grado de Estudios</label>
                <div class="uk-form-controls">
                    <input class="uk-input" id="grado_estudios" type="text" required="required" placeholder="">
                </div>
            </div>

            <div class="uk-margin" style="position: relative;  top:50px; ">
                <label class="uk-form-label" for="form-stacked-text">Ocupación</label>
                <div class="uk-form-controls">
                    <input class="uk-input" id="ocupacion" type="text" required="required" placeholder="">
                </div>
            </div>

              <div class="uk-margin" style="position: relative;  top:50px; ">
                <label class="uk-form-label" for="form-stacked-text">Celular o Telefono de contacto</label>
                <div class="uk-form-controls">
                    <input class="uk-input" id="celular" type="number" required="required" placeholder="">
                </div>
            </div>

            <div class="uk-margin" style="position: relative;  top:50px; ">
                <label class="uk-form-label" for="form-stacked-text">Email</label>
                <div class="uk-form-controls">
                    <input class="uk-input" id="form-stacked-text-email" type="email" required="required" placeholder="email@email.com">
                </div>
            </div>
            
     <!--      <div class="uk-margin">
                <label class="uk-form-label" for="form-stacked-text">Password</label>
                <div class="uk-form-controls">
                    <input class="uk-input" id="form-stacked-text-pass" type="password" required="required" placeholder="Your Password">
                </div>
            </div> -->
            <div class="uk-margin uk-alert uk-alert-danger js-error" style="display: none">
                test
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