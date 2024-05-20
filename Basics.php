<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    // output :
    
    // echo "Hello World!!! <br>";
    // print ("i can only print one argument <br/>");
    // print_r([1, 2, 3]);
    // echo "<br>";
    // var_dump(True);
    // echo "<br>";
    // var_dump([1, 2.9, 3], "abc");
    // echo "<br>";
    // var_export('true');
    
    // variables:
    
    // $name = "Ahmed";
    // $age = "19";
    
    // echo "My Name is " . $name . ". I am " . $age . " years old";
    

    // simple arrays
    
    // $fruits = ["Banana", "Orange", "Pear"];
    
    // echo "$fruits[2]";
    

    // Associative Array
    

    // $colors = [
    //     1 => 'red',
    //     5 => 'blue',
    //     9 => 'green',
    // ];
    
    // echo $colors[5];
    

    // $user = [
    //     "first_name" => "John",
    //     "last_name" => "Doe",
    //     "email" => "john@mail.com",
    // ];
    

    // $users = [
    //     [
    //         'first_name' => 'Leo',
    //         'last-name' => 'Ames',
    //         'email' => 'ames@gmail.com',
    //     ],
    //     [
    //         'first_name' => 'Ames',
    //         'last-name' => 'Leo',
    //         'email' => 'ames@gmail.com',
    //     ],
    // ];
    
    // var_dump(($users));
    


    // if - else conditions
    
    // $time = date("H");
    // if ($t < 12) {
    //     echo "Good Morning";
    // } elseif ($t < 17) {
    //     echo "Good AfterNoon";
    // } else {
    //     echo "Good Night";
    // }
    // ;
    // echo $time;
    
    // $posts = [100];
    
    // if (!empty($posts)) {
    //     echo $posts[0];
    // } else {
    //     echo "No Posts";
    // }
    
    // echo !empty($posts[0]) ? $posts[0] : "null";
    


    // $favcolor = '';
    
    // switch ($favcolor) {
    //     case 'red':
    //         echo 'Your Favourite Color is Red';
    //         break;
    //     case 'yellow':
    //         echo 'Your Favourite Color is Yellow';
    //         break;
    //     case 'green':
    //         echo 'Your Favourite Color is Green';
    //         break;
    //     default:
    //         echo 'Your Fav Color is not red,green,blue.';
    // }
    
    // loops
//for loop
    // for ($i = 1; $i <= 10; $i++) {
    //     echo 'Number' . $i . '<br>';
    // }
    


    // while loop
    // $x = 0;
    // while ($x <= 10) {
    //     echo $x;
    //     $x++;
    // }
    

    // // do while loop
    // $x = 2;
    // do {
    //     echo $x;
    //     $x++;
    // }
    // while ($x <= 5);
    

    //Foreach
    // $posts = ['First Post <br>', 'Second Post <br>', 'Third Post'];
    
    // foreach ($posts as $post) {
    //     echo $post;
    // }
    

    // $user = [
    //     "first_name" => "John",
    //     "last_name" => "Doe",
    //     "email" => "john@mail.com",
    // ];
    
    // foreach ($user as $key => $value) {
    //     echo "$key - $value<br>";
    // }
    

    // functions
    // $x = 5;
    // function registerUser()
    // {
    //     global $x;
    //     $y = 5;
    //     echo $x + $y;
    // }
    
    // registerUser();
    


    // array functions
    // $fruits = ['apple', 'orange', 'pear', 'banana', 'peach', 'tomato'];
    
    // Get Length
    // echo count($fruits);
    
    // search array
    // var_dump(in_array('apple', $fruits));
    

    // add to array
    // $fruits[] = 'Strawberry';
    // array_push($fruits, 'peach', 'grape', 'strawberry');
    // array_unshift($fruits, 'mango');
    
    // remove from array
    // array_pop($fruits);
    // array_shift($fruits);
    // unset($fruits[2]);
    
    //splitting into chunks
    // $chunked_array = array_chunk($fruits, 3);
    // print_r($chunked_array);
    


    // merge arrays
//     $arr1 = [1, 2, 3];
//     $arr2 = [4, 5, 6];
    // $arr3 = array_merge($arr1, $arr2);
    // print_r($arr3)
    
    // $arr3 = [...$arr1,...$arr2];
// print_r($arr3)
    


    // arrray map
    // $numbers = range(1, 20);
    // $newNumbers = array_map(function ($number) {
    //     return "Number {$number}";
    // }, $numbers);
    
    // print_r($newNumbers);
    

    //array filter
    // $lessthan10 = array_filter($numbers, fn($number) => $number <= 10);
    // print_r($lessthan10);
    

    ?>
</body>

</html>