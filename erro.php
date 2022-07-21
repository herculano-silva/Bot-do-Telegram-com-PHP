<?php

require __DIR__."/vendor/autoload.php";

use \App\Comunication\Alert;



try {
    // Contém o número de argumentos passados ​​para o script atual ao executar a partir da linha de comando.
   $codigo = $argc[1] ?? 0;
   
   if($codigo != 1){
    throw new \Exception("Código inválido - valor esperado 1", 400);
   }
   echo "Sucesso\n";

} catch (\Exception $e) {
    echo $e->getMessage()."\n";
    Alert::sendMessage($e->getCode().': '.$e->getMessage());
}