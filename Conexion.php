<?php
    $salida = shell_exec('git status Conexion/prueba/');//muestra una direccion del escritorio 
    $salida1 = shell_exec('git status');//muestra la direccion de la carpeta en la que esta el archivo actual
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
    echo "--------------------------------------<br />";
    echo exec('whoami');

    echo '<pre>';
    echo "--------------------------------------<br />";
    // Muestra el resultado completo del comando "ls", y devuelve la
    // ultima linea de la salida en $ultima_linea. Almacena el valor de
    // retorno del comando en $retval.
    $ultima_linea = system('ls', $retval);

    // Imprimir informacion adicional
    echo '
    </pre>
    <hr />Ultima linea de la salida: ' . $ultima_linea . '
    <hr />Valor de retorno: ' . $retval;

?>
