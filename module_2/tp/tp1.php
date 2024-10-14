<?php

//EX1
$users = [
    'michel' => ['Michel', 'Rennes', 30],
    'sarah' => ['Sarah', 'Quimper', 30],
];

var_dump($users);

//EX2
$users = [
    'michel' => [
        'firstname' => 'Michel',
        'city' => 'Rennes',
        'age' => 30
    ],
    'sarah' => [
        'firstname' => 'Sarah',
        'city' => 'Quimper',
        'age' => 30
    ],
];

//EX3
foreach ($users as $key => $user) { ?>
    <ul>Elément <?= $key ?> </ul>
    <?php
    $i = 0;
    foreach ($user as $value) {
        echo "<li> Element $i : $value</li>";
        $i++;
    }
    echo '</ul>';
}

//EX4

const A_MAIL = ["sly@mail.com", "truc@mail.com", "michel@michel.fr"];

foreach (A_MAIL as $mail) {
    $part = explode("@", $mail);
    if (isset($accessProvider[$part[1]])) {
        $accessProvider[$part[1]]++;
    } else {
        $accessProvider[$part[1]] = 1;
    }
}
var_dump($accessProvider);






