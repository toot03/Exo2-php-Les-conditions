<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exo PHP</title>
</head>
<body>

<?php
//exercice 1
$age=23;
if($age<18) {
    echo "Vous êtes mineur.";
}
else{
    echo "Vous êtes majeur.";
}
//exercice 2
$age=23;
$genre="homme";
if($genre=="homme" and $age<18){
    echo"<br>Vous êtes un homme et vous êtes mineur";
}
elseif($genre=="homme" and $age>=18){
    echo"<br>Vous êtes un homme et vous êtes majeur";
}
elseif($genre=="femme" and $age<18) {
    echo "<br>Vous êtes une femme et vous êtes mineur";
}
else {
    echo "<br>Vous êtes une femme et vous êtes majeur";
}
//exercice 3
if($genre=="homme"){
    echo"<br>C'est un développeur !!!";
}
else{
    echo"<br>C'est une développeuse !!!";
}
//exercice 4
if($age<18){
    echo"<br>Tu n'es pas majeur";
}
else{
    echo"<br>Tu n'es pas majeur";
}
//exercice 5
$maVariable=true;
if($maVariable == false){
    echo"<br>C'est pas bon !!!";
}
else{
    echo"<br>C'est ok !!";
}
//exercice 6
if($maVariable){
    echo"<br>C'est pas bon !!!";
}
else{
    echo"<br>C'est ok !!";
}
?>

</body>