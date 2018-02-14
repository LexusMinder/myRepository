<!DOCTYPE html>
<html lang="es">
    <head>
        <?php
        
        if (isset($title)) {
            echo "<title>$title</title>";
        }else{
            echo "<title>Undefine Title</title>";
        }
        
        ?>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" >
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="<?php echo PATH_CSS ?>bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo PATH_CSS ?>signin.css" rel="stylesheet">
        <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    </head>
    <body>
