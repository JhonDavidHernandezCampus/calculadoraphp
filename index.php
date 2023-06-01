<?php
session_start();

/* $operacion = '(2+2)';

$resultado = eval("return $operacion;");
 */


$_SESSION['valor'][] = $_POST['numero'];
$num = $_POST['numero'];
$cadena = implode('', $_SESSION['valor']);

if($num != "=" || $num != "<" || $num !="c"){
    if(is_numeric($num) || $num == "(" || $num == ")" ){

    }
}elseif($num == "<"){
    $igual = "dentro";
    array_pop($_SESSION["valor"]);
}elseif($num == "c"){
    $igual = "borro todo";

    $_SESSION['valor'] = null;
}

    $cadena = implode('', $_SESSION['valor']);
var_dump( $_SESSION['valor']);
/*
//var_dump($_SERVER)."<br>";
 */
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css"> 
    <link rel="stylesheet" type="text/css" href="./styles.css">
    <title>Calculadora</title>
</head>
<body>
    <section class="container">
        <div class="resultado"><?php echo $cadena ."=". $igual;?></div>
        <form action="" method="POST">
            <input type="text" class="pintar" value="<?php echo $resultado ?>"><br>
            <input type="submit" class="numero" name="numero" value="<">
            <input type="submit" class="numero"name="numero" value="(">
            <input type="submit" class="numero"name="numero" value=")">
            <input type="submit" class="numero"name="numero" value="mod">
            <input type="submit" class="numero"name="numero" value="c"><br>
            <input type="submit" class="numero"name="numero" value="7">
            <input type="submit" class="numero"name="numero" value="8">
            <input type="submit" class="numero"name="numero" value="9">
            <input type="submit" class="numero"name="numero" value="/">
            <input type="submit" class="numero"name="numero" value="√"><br>
            <input type="submit" class="numero"name="numero" value="4">
            <input type="submit" class="numero"name="numero" value="5">
            <input type="submit" class="numero"name="numero" value="6">
            <input type="submit" class="numero"name="numero" value="*">
            <input type="submit" class="numero"name="numero" value="x²"><br>
            <input type="submit" class="numero"name="numero" value="1">
            <input type="submit" class="numero"name="numero" value="2">
            <input type="submit" class="numero"name="numero" value="3">
            <input type="submit" class="numero"name="numero" value="-">
            <input type="submit" class="igual" name="igual"value="="><br>
            <input type="submit" class="numero"name="numero" value="0">
            <input type="submit" class="numero"name="numero" value=",">
            <input type="submit" class="numero"name="numero" value="+">
            <input type="submit" class="numero"name="numero" value="%"><br>
        </form>
    </section>
    
</body>
</html>