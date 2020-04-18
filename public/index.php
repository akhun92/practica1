<!DOCTYPE html>
<html lang="es">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Empleats</title>
        <link rel="stylesheet" type="text/css" href="EmployeesTable.css">
        <link rel="stylesheet" type="text/css" href="Navbar.css">
        <link rel="stylesheet" type="text/css" href="index.css">
        <?php setlocale(LC_ALL, "es_ES");?>
    </head>

    <body>
        <h1 class="titleIndex">Agenda de Empleados</h1>
        <div class="container">
            <table>
                <?php
                include "EmployeesTable.php";?>
                <?php EmployeesTable::getEmployeesTable($_GET["sortedBy"])?>
            </table>
            <nav><?php include "Navbar.php";?></nav>   
        </div>
    </body>
</html>