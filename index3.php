<?php

//loops

//for($x = 0; $x <= 10; $x++) {
 //   echo 'Number' . $x . '<br>';
//}

//$x = 1;
 //while($x <= 15) {
  //  echo 'Number' . $x . '<br>';
  //  $x = $x + 1;
 //}



 //$x = 1;
 //do {
 //   echo 'Number' .$x . '<br>';
  //  $x++;
 //} while($x <= 5);



 $posts = ['First Post', 'Second Post', 'Third Post'];
//1.

 //for($x = 0; $x < count($posts); $x++) {
 //   echo $posts[$x];
 //}

//2.

 //foreach($posts as $post) {
 //   echo $post;
 //}

 //3.

 //foreach($posts as $index => $post) {
  //  echo $index +1 . ' - ' .$post . '<br>';
// }


$person = [
    'first_name' => 'Brad',
    'last_name' => 'Traversy',
    'email' => 'brad@gmail.com'
];

foreach($person as $key => $value) {
    echo "$key - $value<br>";
}

