<?php
    include("../modelos/conexionPDO.php");

    $sql = "SELECT * FROM table_div";
    $stmt = $conn->query($sql);
    $datos = $stmt->fetchAll(PDO::FETCH_OBJ);

?>
<!DOCTYPE html>
<html lang="es-MX">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Principal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    
    <style>
        .div{
            width: 200px;
            height: 100px;
            background-color: red;
            margin: 20px;
        }
    </style>
    
</head>
<body>
    <?php foreach($datos as $filas) :?>
    
        <div class="div" id="div<?php echo $filas->id_div; ?>" onclick="animacionDIV('<?php echo $filas->id_div; ?>')">
            <h5><?php echo $filas->id_div; ?></h5>
        </div>
    
    <?php endforeach; ?>


    <script src="../controlador/controlUtileria/css/alertas.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>