<?php
// Ce script gère la connexion à ma bdd Mysql
// Variables de connexion à ma bdd (normalement stocké dans un .env afin d'être plus sécurisé)
const MYSQL_HOST = 'localhost';
const MYSQL_PORT = 8888;
const MYSQL_NAME = 'we_love_food';
const MYSQL_USER = 'root';
const MYSQL_PASSWORD = 'root';

try {
    $mysqlClient = new PDO(
        sprintf('mysql:host=%s;dbname=%s;port=%s', MYSQL_HOST, MYSQL_NAME, MYSQL_PORT),
        MYSQL_USER,
        MYSQL_PASSWORD
    );
    $mysqlClient->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(Exception $exception) {
    die('Erreur : '.$e->getMessage());
}
