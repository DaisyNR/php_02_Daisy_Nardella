<?php

// Sesto Selfwork

for ($i= 1; $i <= 100; $i++) { 
    if ($i % 3 == 0 && $i % 5 == 0 ){
        echo "HACKADEMY \n";
    }elseif($i % 3 == 0) {
        echo "PHP \n";
    }elseif($i % 5 == 0){
        echo "JAVASCRIPT \n";
    }else{
        echo "$i\n";
    };
};


// Quinto Selfwork

$numeri = [4,7,8,3,2,6,11,30];
$counter =  0;
$sum = 0;

foreach ($numeri as $numero) {
    if($numero % 2 == 0){
        $sum += $numero;
        $counter++;
    }
}
$media = $sum / $counter;
echo "La media è ".$media."\n";


// Quarto Selfwork
$users = [
  ['name' => 'Davide', 'surname' => 'Cariola', 'gender' => 'NB'],
];

foreach($users as $user){
    if ($user['gender'] == 'NB'){
        echo "Buongiorno ".$user['name']." ".$user['surname']."\n";
    }
}



// Terzo Selfwork
$words1 = [
  'vostro',
  67,
  'essere',
  'colle',
  'mi',
  'sempre',
[
  'oscura',
  'era',
  89,
  [
  'mezzo',
   'E'
  ],
'ritrovai',
'per'
],
'diritta'
];

$words2 = [
  'elemento1' => 25.89,
  'elemento2' => 'possa',
  'elemento3' => [
    'Virgilio',
    'Favore',
    'favore',
    ['fortuna']
  ],
 'fine' => '!'
];

$results = "Nel " .$words1[6][3][0]. " di cammin di nostra vita ".$words1[4]." ".$words1[6][4]." ".$words1[6][5]." una selva ".$words1[6][0].", che' la ".$words1[7]." via era smarrita." ."\n";
echo $results;



// Secondo Selfwork:

$text1 = "Marco";
$text2 = "hai";
$text_3 = "sete";
$text4 = "?";
$text5 = "Perchè";
$text6 = '$text2';
$text7 = 'bevuto';
$text8 = "tutto";

echo $text1." ".$text2." ".$text_3.$text4." ".$text5." ".$text2." ".$text7." ".$text8.".\n";


// Primo Selfwork

$age = 33;
$height = 1.60;
$name = "Daisy";
$is_student = true;

var_dump($age);
var_dump($height);
var_dump($name);
var_dump($is_student);

const AGE = 33;
const HEIGHT = 1.60;
const NAME = "Daisy";
const IS_STUDENT = true;

var_dump(AGE);
var_dump(HEIGHT);
var_dump(NAME);
var_dump(IS_STUDENT);



?>