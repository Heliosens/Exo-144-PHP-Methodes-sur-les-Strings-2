<?php
// exo 1
$text = "Ajourd'hui il fait -1000 degrés";

echo addslashes($text);

echo "<br>";

// exo 2
$text = "le texte de mon choix";

echo strtoupper($text);
echo "<br>";

echo ucfirst($text);
echo "<br>";

echo ucwords($text);
echo "<br>";

$text = "LE NOUVEAU TEXTE DE MON CHOIX";

echo strtolower($text);
echo "<br>";

echo lcfirst($text);
echo "<br>";

// exo 3

$text = "Proin cursus lorem mauris, id vestibulum urna vulputate sed. Nunc tristique eu augue in scelerisque. 
Nunc arcu ligula, tristique sed sodales vel, hendrerit quis augue.";

echo str_word_count($text);

echo "<br>";
// ex 4
$text = "Nunc arcu ligula, tristique sed sodales vel, hendrerit quis augue.";
$text = explode(" ", $text);

function displayWord ($t){
    foreach ($t as $word){
        echo $word. "<br>";;
    }
}

displayWord($text);

echo "<br>";
// exo 5
$arrWord = [
    'liste',
    'cerise',
    'fruits',
    'gateau',
    'boisson',
];

echo implode(" ", $arrWord);
echo "<br>";

// exo 6
$text = "Nunc tristique eu augue in scelerisque";
echo strrev($text);
echo "<br>";

echo str_shuffle($text);
echo "<br>";

// ex 7
$text = "<p><b>Hello,</b> nous apprenons PHP</p>";
echo $text.'<br>';
echo strip_tags($text);
echo "<br>";

// exo 8
$text = "Proin cursus lorem mauris";

if(strlen($text) < 500){
    echo '|' . $text;
}

echo "<br>";

// exo 9
//$text = str_split($text);
//foreach ($text as $char){
//    echo $char . "<br>";
//}

echo "<br>";

// exo 10
$text = "Sed venenatis bibendum feugiat";

echo str_replace("venenatis", "world", $text);
echo "<br>";

// exo 11
$text = "ceci est un test";

if(strpos($text, 'test') === false){
    echo 'test ne se trouve pas dans la chaine de caractere';
}
else {
    echo 'test se trouve bien dans la chaine de caractere';
}
echo "<br>";

// exo 12
if(strpos($text, "ceci") === 0){
    echo 'ceci est au début de la chaine';
}
elseif (strpos($text, "ceci") === false) {
    echo 'ceci n\'est pas dans la chaine';
}
else{
    echo 'ceci n\'est pas au début de la chaine';
}

echo "<br>";

// exo 13
echo $text."<br>";

$need = "test";

if (strpos($text, $need) === strlen($text) - strlen($need)){
    echo $need . ' se trouve à la fin de la chaine';
}
elseif (strpos($text, $need) === false){
    echo $need.' n\'est pas dans la chaine';
}
else {
    echo $need . ' n\'est pas à la fin de la chaine';
}

