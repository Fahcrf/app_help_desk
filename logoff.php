<?php 

session_start();

echo '<pre>';
print_r($_SESSION);
echo '</pre>';

session_destroy();
header('location: index.php');


//Remover indices do array da seção
//unset()


//destruir a váriavel da seção
//session_destroy()

?>