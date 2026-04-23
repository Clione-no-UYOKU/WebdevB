<?php
$people[] = ['name' => '佐藤', 'blood' => 'A'];
$people[] = ['name' => '田中', 'blood' => 'B'];
$people[] = ['name' => '加藤', 'blood' => 'O'];

var_dump($people);

echo '<br>' . $people[0]['blood']; //A
echo '<br>' . $people[2]['name'];

foreach($people as $key => $value){
    echo '順番は' . $people_key . '<br>';
    foreach($person as $person_key => $value){
        echo 'キーは' . $person_key . '値は'. $value . '<br>';
    }
}