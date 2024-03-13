<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../controlador/controlUtileria/css/contrato.css">
    <link rel="stylesheet" href="../controlador/controlUtileria/css/fuente.css">
    <!-- <link rel="stylesheet" href="../controlador/controlUtileria/css/style2.css"> -->

    <link rel="shortcut icon" href="../controlador/controlUtileria/logo2.ico" type="image/x-icon">
    <style>
        .animacion {
        animation: transformar .3s ease-in-out; 
        }

        @keyframes transformar{
            0%{
                transform: scale(0.3);
                top: 10px;
            }
            20%{
                top: 50px;
            }
            40%{
                top: 40px;
            }
            60%{
                top: 60px;
            }
            70%{
                top: 50px;
            }
            
            100%{
                transform: scale(1);
                top: 90px;
            }
        }
    </style>
</head>
<body>
    <div class="producto"> 
        <br>
        <h2 style="margin-left: 30px;">¡Crea tu Propio Ejemplo de Contrato Informatico! </h2>
        
        <hr>
        <br>
        
        <form action="subir_datos_contratos.php" method="POST" enctype="multipart/form-data"> 
            <div class="form-floating mb-3">
                <input type="text" name="nombre" class="form-control" required>
                
            </div>
            <div class="form-floating mb-3">
                <input type="text" name="direcDomicilio" class="form-control" required>
                
            </div>
            <div class="form-floating mb-3">
                <input type="text" name="puesto" class="form-control" required>
                
            </div>
            <div class="form-floating mb-3">
                <input type="text" name="directrabajo" class="form-control" required >
                
            </div>
            <div class="form-floating mb-3">
                <input type="text" name="actividad" class="form-control" required>
                
            </div>
            
            
            
            
            

            
        </form>
        
        
    </div>

    
    <button onclick="miFuncionJS1()">alerta</button>
    <button onclick="miFuncionJS2()">mal alerta</button>
    

    

    <script src="../controlador/controlUtileria/css/alerta.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>