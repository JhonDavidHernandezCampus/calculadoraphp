<?php
session_start();

/* session_unset();
session_destroy();
session_start(); */

/* $operacion = '(2+2)';

$resultado = eval("return $operacion;");
*/


if($_POST['numero'] != "="){
    ($_POST['numero'] == "ce")?:$_SESSION['valor'][] = $_POST['numero'];
    $cadena = implode('', $_SESSION['valor']);

}

$num = $_POST['numero'];

$resultado =0;
if($num == "=" || $num == "ce" || $num =="c"){
    switch($num){
        case "=":
            $cadena = implode('', $_SESSION['valor']);
            try{
                $resultado = eval("return $cadena;");
            }catch(Throwable $e){
                $resultado = "Error de sintaxis";
            }
            break;
        case "ce":
            array_pop($_SESSION["valor"]);
            $cadena = implode('', $_SESSION['valor']);
            break;
        case "c";
            $_SESSION['valor'] = array();
            $cadena = implode('', $_SESSION['valor']);
            break;
    }
}else{
    //echo "dentra qui?";
}
//var_dump($_SESSION['valor']);


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
        <div class="resultado"><p class="p"><?php echo $resultado; ?></p></div>
        <form action="" method="POST">
            <input type="text" class="pintar" value="<?php echo $cadena; ?>"><br>
            <input type="submit" class="numero" name="numero" value="ce">
            <input type="submit" class="numero"name="numero" value="(">
            <input type="submit" class="numero"name="numero" value=")">
            <input type="submit" class="numero"name="numero" value="%">
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
            <input type="submit" class="numero"name="numero" value="**" placeholder="x"><br>
            <input type="submit" class="numero"name="numero" value="1">
            <input type="submit" class="numero"name="numero" value="2">
            <input type="submit" class="numero"name="numero" value="3">
            <input type="submit" class="numero"name="numero" value="-">
            <input type="submit" class="igual" name="numero" value="="><br>
            <input type="submit" class="numero"name="numero" value="0">
            <input type="submit" class="numero"name="numero" value=".">
            <input type="submit" class="numero"name="numero" value="+">
            <input type="submit" class="numero"name="numero" value="%"><br>
        </form>
    </section>
</body>
</html>