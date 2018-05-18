<pre>
<?php
// READ
// $content = file_get_contents("./data/test.json");
//
//   $array = json_decode($content,true);
//   var_dump($array);

//WRITE
$person =[
  "name" => "Jean Cualde",
  "age"  => 1000,
  "alive" => true
];
$json = json_encode($person);
var_dump($json);

file_put_contents("./data/person.json",$json)
 ?>
