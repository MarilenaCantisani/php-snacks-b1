<!-- */ --------------------------------- SNACK 1 -------------------------------- */ -->
<!-- Creare una funzione che restituisce un array con 15 numeri casuali, 
tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta. 
Stampare i numeri in pagina. -->

<?php
//// Function that returns a random number
function get_random_number() {
    $random_number = rand(0, 100);
    echo $random_number ."<br/>"; 
    return $random_number;   
}
//* Starting array
$random_array= [];
//* For cycle to get 15 random numbers
for($i = 0; $i < 15; $i++) {
    //* Verify the presence of the random number in the number array
    if(!in_array(get_random_number(), $random_array)) {
        $random_array[] = get_random_number();
    };   
}
var_dump($random_array);




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SNACK 1</title>
</head>
<body>

</body>
</html>
