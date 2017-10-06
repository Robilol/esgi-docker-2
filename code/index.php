<?php
try
{
    $pdo = new PDO('mysql:host=esgi-db-2;dbname=esgi;port=3306', 'root', 'root');
}
catch (Exception $e)
{
	echo "bla";
    die('Erreur : ' . $e->getMessage());
}