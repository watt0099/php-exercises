<?php 

/*
+---+
| 1 |
+---+
Declare and assign the indexed array with your favourite food 
(at least 4 array elements). Name the array food.
*/

/*
Print every array element in a new line.
*/

$food = [
	"Eggs",
	"Bacon",
	"Breakfast Potatos",
	"Sourdough Bread Toast",
];

echo '<pre>'; print_r($food); echo '</pre>';

// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 2 |
+---+
Print the array elements from the previous exercise in unordered list.
<ul>
  <li>...</li>
  <li>...</li>
  <li>...</li>
  <li>...</li>
</ul>
*/


echo "<ul><li>".implode("</li><li>", $food)."</li></ul>";


// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 3 |
+---+
Turn the indexed array food from task 1 into associative array named food_assoc. 
Every array element of food becomes the key of food_assoc.
Every key of food_assoc has the value that describes the type of food (salad, main course or dessert).
*/

/*
Print every food and type in the separate lines so it renders like this:
pizza | main counrse 
cheesesake | desert 
*/

$food_assoc = [
  "Eggs"=>"Main",
  "Bacon"=>"Delicious",
  "Breakfast Potatos"=>"Side",
  "Sourdough Bread Toast"=>"Side",
];

  echo $food[0]." | ".$food_assoc["Eggs"]."<br>".
      $food[1]." | ".$food_assoc["Bacon"]."<br>".
      $food[2]." | ".$food_assoc["Breakfast Potatos"]."<br>".
      $food[3]." | ".$food_assoc["Sourdough Bread Toast"]."<br>";



// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 4 |
+---+
Break down the food_assoc from the task 3 to type (salad, main course, dessert, ...) 
and country of origin (Italy, Spain, India, ...)
food_assoc:
  pizza:
    type: main course
    origin: Italy
  cheesesake: 
    type:desert
    origin: Greece
  
So, food_assoc is still going to be an associative array. 
Every key of food_assoc (pizza, cheesecake) will now have the value that is associative array itself 
and carries the information about the type and origin
*/

/*
Print every food, type and origin in the separate lines so it renders like this:
pizza | main counrse | Italy
cheesesake | desert | Greece
*/

$food_assoc_expanded = [
  "Eggs"=>[
    "Type"=>"Main",
    "Origin"=>"Chickens"
    ],
  "Bacon"=>[
      "Type"=>"Side",
      "Origin"=>"Pigs"
    ],
  "Breakfast Potatos"=>[
      "Type"=>"Main",
      "Origin"=>"Idaho"
    ],
    "Sourdough Bread Toast"=>[
      "Type"=>"Side",
      "Origin"=>"The local baker"
    ],
  ];
//   "Bacon"=>["Delicious"=>"Pigs",
//   "Breakfast Potatos"=>"Side"=>"Idaho",
//   "Sourdough Bread Toast"=>"Side"=>"The Baker",
// ];

echo $food[0].": ".
      $food_assoc_expanded ["Eggs"]["Type"]
      ." | ".
      $food_assoc_expanded ["Eggs"]["Origin"]
      ." <br> ".

      $food[1].": ".$food_assoc_expanded ["Bacon"]["Type"]
      ." | ".
      $food_assoc_expanded ["Bacon"]["Origin"]
      ." <br> ".

      $food[2].": ".$food_assoc_expanded ["Breakfast Potatos"]["Type"]
      ." | ".
      $food_assoc_expanded ["Breakfast Potatos"]["Origin"]
      ." <br> ".

      $food[3].": ".$food_assoc_expanded ["Sourdough Bread Toast"]["Type"]
      ." | ".
      $food_assoc_expanded ["Sourdough Bread Toast"]["Origin"]
      ." <br> "
      ;

// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 5 |
+---+
Print the array from task 4 in html table:
<table>
  <tr>
    <th>food</th>
    <th>type</th>
    <th>origin</th>
  </tr>
  <tr>
    <td>pizza</td>
    <td>main course</td>
    <td>Italy</td>
  </tr>
  <tr>
    <td>cheesecake</td>
    <td>desert</td>
    <td>Greece</td>
  </tr>
</table>
*/

echo 

"<table  border=\"1px; solid; #f7f7f7;\" cellpadding=\"10\" cellspacing=\"0\">
<tr><th>Food</th> <th>Type</th> <th>Origin</th></tr>
<tr> <td >".$food[0]."</td> <td>".$food_assoc_expanded ["Eggs"]["Type"]."</td><td>".$food_assoc_expanded ["Eggs"]["Origin"]."</td></tr>
<tr> <td>".$food[1]."</td> <td>".$food_assoc_expanded ["Bacon"]["Type"]."</td><td>".$food_assoc_expanded ["Bacon"]["Origin"]."</td></tr>
<tr> <td>".$food[2]."</td> <td>".$food_assoc_expanded ["Breakfast Potatos"]["Type"]."</td><td>".$food_assoc_expanded ["Breakfast Potatos"]["Origin"]."</td></tr>
<tr> <td>".$food[3]."</td> <td>".$food_assoc_expanded ["Sourdough Bread Toast"]["Type"]."</td><td>".$food_assoc_expanded ["Sourdough Bread Toast"]["Origin"]."</td></tr> 
</table>";

 ?>