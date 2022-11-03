<?php

$contacorrentes = [
   '123.456.78-9' =>['Titular' => 'Matheus',
                'Saldo' => '1000' 
], 
    '123.589.434-43' =>['Titular' => 'João',
                'Saldo' => '1200'

],
    '482.934.243.-92' => [ 'Titular' => 'Pedro',
                 'Saldo' => '1230' 

]


];

$contacorrentes['432.423.211-33'] =['Titular' => 'Lucas',
                    'Saldo' => '11230' 

];


    foreach($contacorrentes as $cpf => $conta){
        echo $cpf ." ". $conta['Titular']. PHP_EOL;

    }


    