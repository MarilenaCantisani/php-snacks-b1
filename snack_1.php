<!-- */ --------------------------------- SNACK 1 -------------------------------- */ -->
<!-- Creare una funzione che restituisce un array con 15 numeri casuali, 
tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta. 
Stampare i numeri in pagina. -->

<?php
//// Function that returns a random number
function get_random_number() {
    return  rand(0, 100);   
}
//* Starting array

$random_numbers= [];
//* While cycle to get 15 random numbers
while(count($random_numbers) < 15) {
    $number = get_random_number();
    //* Verify the presence of the random number in the number array and add it
    if(!in_array($number, $random_numbers)) $random_numbers[] = $number;
}
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
    <div>
        <ul>
            <?php foreach($random_numbers as $random_number) : ?>
                <li><?= $random_number ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
</body>
</html>
