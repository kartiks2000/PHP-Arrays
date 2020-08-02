<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Arrays in PHP</h1>
    <?php 
        // Arrays
        
        // $num1 = array();  OR
        // $num1 = [];


        // Initializing an array

        // $num1 = array(1,54,'kartik','<h1>hello</h1>'); OR
        $num1 = [1,54,'kartik','<h1>hello</h1>'];


        // Excessing Array element using index(starts from 0 in PHP)
        
        echo $num1[3];
        echo $num1[1];

        // Printinf full array using "print_r()" function

        print_r ($num1);
    ?>
</body>
</html>
