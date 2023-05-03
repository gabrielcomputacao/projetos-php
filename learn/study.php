
<?php

    include "test.php";
    /* require "test.php"; o require da erro fatal na tela e para a aplicação */

    /* variaveis por referência */
    $x = 'testando';

    $nome =& $x;

    echo $x . '  ' . $nome;

    /* variaveis com static dentro de funções */

    function testando(){

        static $somando =0;
        echo $somando;
        $somando++;

        echo $somando;

    }

    $pessoas = [
        'gabriel' => 'top',
        'estela' => 'amiga',
    ];

/* entao fazendo assim, o primeiro pega a chave no caso $pessoa e depois pega o valor no caso caracteristica */

    foreach ($pessoas as $pessoa => $caracteristica) {
        echo '<br>';
        echo $pessoa;
        echo '<br>';
        echo $caracteristica;
    }

    /* usando o global $variavel, podemmos usar a variavel dentro de funcoes */
    

    /* padrões default na função */
    
    function funcaoDefaultPadrao($a = "padrão"){
        echo " <br> $a <br>";
    }

    funcaoDefaultPadrao();

    $gab = 'gabriel22';

    function somando($a , $b){

        global $gab;

        /* devolve os argumentos em formato de lista */
        print_r(func_get_args());
        /* mostra quantos argumentos tem na função */
        echo func_num_args();
        echo " <br> $gab <br>";

    return $a + $b; 

    }

    somando(1,2);


    /* depuração de valores
    
        print_r
        var_dump
    */

    $arrayDaddos = ['gabriel', 34, true, 3.456];
    $gb = 'gabr';

    function imprimirDump($dado){
        echo "vardump <br>";
        var_dump($dado);
        echo "<br> print_r <br>";
        print_r($dado);
    }

    imprimirDump($arrayDaddos);


    ?>

<?php  foreach($nomes as $nome): ?>
    <ul>
        <li> <?php  echo $nome; ?> </li>
    </ul>

<?php endforeach; ?>

