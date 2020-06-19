<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

echo "<pre><code>";

$booleano1 = true; var_dump($booleano1);
$booleano2 = false; var_dump($booleano2);

$string1 = 'Tiago'; var_dump($string1);
$string2 = "Albert e $string1 'estudando' PHP"; var_dump($string2);
$string2 = "Albert e $string1 \"estudando\" PHP"; var_dump($string2);

$inteiro = 2000 ; var_dump($inteiro);

$flutuante = 1.78 ; var_dump($flutuante);

$nulo = null; var_dump($nulo);

//Associativo
$array1 = [
    'casado' => false,
    'nome' => 'tiago', 
    'idade' => 26,
]; var_dump($array1);


//Não associativo
$array2 = [
     true, 26, 'tiago'
]; var_dump($array2);

echo "<hr>";

echo $array1['idade'];
echo "<hr>";
echo $array2[1];

echo "</pre></code>";

echo "<hr>";

/*
 Exemplo de uso de arra não associativo
*/
$csv        = file_get_contents('Book1.csv');
$pessoas    = explode("\n", $csv);

echo "<ul>";
    foreach ($pessoas as $pe)
    {
        $p = explode(";", $pe);        
        if(count($p) > 1)
        {
            $nome = isset($p[0])?$p[0]:'';
            $idade = isset($p[1])?$p[1]:'';
            $email = isset($p[2])?$p[2]:'';
            echo "<li> $nome | $idade |  $email </li>";
        }
    }
echo "</ul>";

echo "<hr>";

$teste = ''; //texto
$teste = ''; #textod
$teste = ''; /*textod*/ $teste = ''; #textod

/*
textoogflkioflgkdfg
dfgdfgdfgdfg
dfgdfgdfgdgfgffgdfgfdg
dfgdfgdfgdfg
*/
