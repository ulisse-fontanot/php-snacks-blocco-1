<?php 
$matches = [
   [
     'casa' => 'Trieste',
     'ospiti' => 'Brindisi',
     'risultato' => '100-80'
   ],
   [
     'casa' => 'Milano',
     'ospiti' => 'Varese',
     'risultato' => '85-80'
   ],
   [
     'casa' => 'Venezia',
     'ospiti' => 'Bologna',
     'risultato' => '90-70'
   ]
];

for ($i=0; $i < count($matches); $i++) { 
    echo ($matches[$i]['casa'] .' - ' .$matches[$i]['ospiti'] .' | ' .$matches[$i]['risultato'] .'<br>');
}

?>