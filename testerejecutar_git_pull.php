<?php
// ejecutar_git_pull.php

// Ejecutar el comando git pull y capturar la salida
$output = [];
$return_var = null;
exec('git pull', $output, $return_var);

// Mostrar el resultado del comando en pestaña nueva
//echo "<pre>";
//echo "Estado de la version:\n";
//echo implode("\n", $output);
//echo "\n\nCódigo de retorno: $return_var"; (opcional)
//echo "</pre>";

// Preparar la salida para ser mostrada en un alert(opcional utilizando un script)
$resultado = "Estado de la versión:\n" . implode("\n", $output);

// Redirigir de vuelta al formulario con el mensaje
header('Location: index.html?message=' . urlencode($resultado));
exit();