<?php

/*$colors = array("Red","Green","Blue");

//add modifications below this line
array_push($colors, "Black");
array_unshift($colors, "Yellow");



array_splice($colors, 1 , 1 , array('Magenta'));
array_splice($colors, 3 , 1 , array('Cyan'));

unset($colors[2]);

var_dump($colors);

echo "<br>";    echo "<br>";    echo "<br>";

echo implode("<br>", $colors);

echo "<br>";    echo "<br>";    echo "<br>";

$cars = array(
    'Mon' => 'Honda', 
    'Boom' => 'Lexus'
            );
var_dump($cars);

echo $cars['Mon'];

$task1 = array(
   'title' => 'Laundry',
   'priority' => 2,
   'due' => '',
   'complete' => true,
);

$task2 = array(
   'title' => 'Laundry2',
   'priority' => 2,
   'due' => '',
   'complete' => false,
);


var_dump($task1);
echo "<br>"; 
var_dump($task2);


//edit this array
$contacts = array('Alena Holligan' => 'alena.holligan@teamtreehouse.com', 'Dave McFarland' => 'dave.mcfarland@teamtreehouse.com' 
                  , 'Treasure Porth' => 'treasure.porth@teamtreehouse.com', 'Andrew Chalkley' => 'andrew.chalkley@teamtreehouse.com');

echo "<ul>\n";
//$contacts[0] will return 'Alena Holligan' in our simple array of names.
echo "<li>Alena Holligan : alena.holligan@teamtreehouse.com</li>\n";
echo "<li>Dave McFarland : dave.mcfarland@teamtreehouse.com</li>\n";
echo "<li>Treasure Porth : treasure.porth@teamtreehouse.com</li>\n";
echo "<li>Andrew Chalkley : andrew.chalkley@teamtreehouse.com</li>\n";
echo "</ul>\n";


$contacts[] = array(
    'name' => 'Alena Holligan',
    'email' => 'alena.holligan@teamtreehouse.com',
);

$contacts[] = array(
    'name' => 'Dave McFarland',
    'email' => 'dave.mcfarland@teamtreehouse.com',
);

$contacts[] = array(
    'name' => 'Treasure Porth',
    'email' => 'treasure.porth@teamtreehouse.com',
);

$contacts[] = array(
    'name' => 'Andrew Chalkley',
    'email' => 'andrew.chalkley@teamtreehouse.com',
);
echo "<ul>\n";
//$contacts[0] will return 'Alena Holligan' in our simple array of names.
echo "<li>" . $contacts[0]['name'] . ' : ' . $contacts[0]['email'] . "</li>\n";
echo "<li>" . $contacts[1]['name'] . ' : ' . $contacts[1]['email'] . "</li>\n";
echo "<li>" . $contacts[2]['name'] . ' : ' . $contacts[2]['email'] . "</li>\n";
echo "<li>" . $contacts[3]['name'] . ' : ' . $contacts[3]['email'] . "</li>\n";

echo "</ul>\n";

$learn = array('Conditionals','Arrays','Loops');
$learn[] = 'Build something awesome!';
array_push($learn,'Functions','Forms','Objects');
array_unshift($learn,'HTML','CSS');

while (list($key, $val) = each($learn)) { 
echo "$val" . "<br>"; 
}
for($i = 1;$i < 100; $i++){
    echo $i . "<br>";

}   


$facts = array(
    57 => ' on Heinz ketchup bottles represents the number of varieties of pickles the company once had.',
    2 => ' is the approximate hours a day Giraffes sleeps',
    18 => ' is the average hours a Python sleeps per day',
    10 => ' per cent of the world is left-handed.',
    11 => ' Empire State Buildings, stacked one on top of the other, would be required to measure the Gulf of Mexico at its deepest point.',
    98 => '% of the atoms in your body are replaced every year',
    69 => ' is the largest number of recorded children born to one woman',
);

for($i = 1; $i <= 100; $i++){
    
    if(isset($facts[$i])){
       
       echo $i . $facts[$i] . "<br/>";
       
   }else {
        
        echo $i . "<br/>";
    }
   
    }

foreach($facts as $item){
    
    echo $item[];
}



$x = 1;
$y = 1;
while (x<25){
    $z = $x;
    $x = $x + $y;
    $y = $z;
    echo $x . "<br/>";
}*/
?>