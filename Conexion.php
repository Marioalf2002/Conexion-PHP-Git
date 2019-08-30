<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Ejecutar Comandos CMD</title>
</head>
<body>
    <?php
        $salida = shell_exec('git status Conexion/prueba/');//muestra una direccion del escritorio 
        $salida1 = shell_exec('git remote show git@github.com:Marioalf2002/HolaMundo.git');//muestra la direccion de la carpeta en la que esta el archivo actual
        echo "-------------git status carpeta/archivo/-------------------";
        echo "<pre>$salida</pre>";
        echo "-------------git status-------------------";
        echo "<pre>$salida1</pre>";

        //Conexion a GitHub
        echo "-------------git status example@example.com/proyec.git-------------------";
        $salida3 = shell_exec('git status git@github.com:Marioalf2002/prueba.git');
        echo "<pre>$salida3</pre>";
        
        // imprime el nombre de usuario que tiene control del proceso php/httpd activo
        // (en un sistema con el ejecutable "whoami" disponible en la ruta)
        echo "<hr><br />";
        echo exec('whoami');
        echo "<hr><br />";
        echo '<pre>';
        // Muestra el resultado completo del comando "ls", y devuelve la
        // ultima linea de la salida en $ultima_linea. Almacena el valor de
        // retorno del comando en $retval.
        $ultima_linea = system('ls', $retval);

        // Imprimir informacion adicional
        echo '
        </pre>
        <hr />Ultima linea de la salida: ' . $ultima_linea . '
        <hr />Valor de retorno: ' . $retval;
        echo '<pre>';
        echo "<hr><br />";

        //Ejecutar PING
        //Opcion #1
        echo "------------------#1 Mostrar ping--------------------<br />";
        exec("ping 192.168.42.95", $output);
        foreach ($output as $x) {
            print_r($x . "<br>");
        }
        echo "<br>";
        //Opcion #2
        echo "------------------#2 probar conexion ping--------------------<br />";
        echo "<br>";
        $res = shell_exec("ping 140.82.113.3");
        
        if (strpos($res, "recibidos = 0")) {
            echo 'No se pudo hacer ping';
        }else{
            echo "Ping exitoso";
        }
    ?>
</body>
</html>