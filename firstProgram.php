<?php
$str = 'This summer I was in Greece.This country is beautiful.I swam in sea with my family.The sea was very big-I love it.One day I saw a boy,who couldn\'t swim!But he was eighteen years old.I thought it was very strange.We lived in the coolest hotel in the Greece-"Independence".It was five star hotel.I liked sunbathing and swimming-it\'s my favorite hobby.';
function countWord($word){
    $count = 0;
    $countWord = [];
    $masWord = explode(' ',preg_replace("/[^a-z\']+/",' ', strtolower($word)));
    $filtMasword = array_filter($masWord, fn($elem) => $elem!='');

    foreach ($filtMasword as $value){
        $countWord[$value]++;
        $count++;
    }
    echo "Количество слов :", $count .PHP_EOL;
    print_r($countWord);

}
countWord($str);