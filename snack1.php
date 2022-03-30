<?php 

    $partite = [
        [
            'teamCasa' => 'Milano',
            'teamOspiti' => 'Cantù',
            'puntiCasa' => 55,
            'puntiOspiti' => 60
        ],
        [
            'teamCasa' => 'Roma',
            'teamOspiti' => 'Bergamo',
            'puntiCasa' => 60,
            'puntiOspiti' => 70
        ],  
        [
            'teamCasa' => 'Firenze',
            'teamOspiti' => 'Lucca',
            'puntiCasa' => 70,
            'puntiOspiti' => 40
        ],
    ];

    for ($i = 0; $i < count($partite); $i++) {
        echo $partite[$i]['teamCasa'] .  ' - ' .  $partite[$i]['teamOspiti'] . ' | ' . $partite[$i]['puntiCasa'] . '-' . $partite[$i]['puntiOspiti'] . '<br/>' ;
    };
    
?>