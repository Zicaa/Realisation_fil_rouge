<?php
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=les_cailloux_de_zicaa;charset=utf8', 'root', '');
}catch(Exception $e)
{
    die('Ereeur'.$e->getMessage());
}