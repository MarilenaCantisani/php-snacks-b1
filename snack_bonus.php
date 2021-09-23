<!-- /* ------------------------------- BONUS SNACK ------------------------------ */ -->
<!-- Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione)
-che name sia più lungo di 3 caratteri,
-che mail contenga un punto e una chiocciola
- che age sia un numero.
-Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->

<?php 

$user_data = [ $_GET["name"],  $_GET["email"], $_GET["age"] ];

if (empty($user_data)) {
    echo "Attenzione! non hai inserito alcun dato";
} 
//// Verify that all the entered fields are valid 
else {
    if(strlen($_GET["name"]) < 3 || !is_numeric($_GET["age"]) || !strpos($_GET["email"] , ".") || !strpos( $_GET["email"] , "@")) {
        echo "<h1>Accesso negato</h1>";
        //** If the entered name is not valid */
        if(strlen($user_data[0]) < 3) {
            echo "<p>Il nome inserito non è valido!</p>";
        };
        //** If the entered mail is not valid */
        if( !strpos($_GET["email"] , ".") || !strpos( $_GET["email"] , "@") ) {
            echo "<p>La mail non è valida!</p>";
        }; 
        //** If the entered age is not valid */
        if(!is_numeric($user_data[2])) {
            echo "<p>L'età inserita non è valida!</p>";       
        };
    } else {
        echo "<h1>Accesso riuscito</h1>" ;       
    }
}
?>

