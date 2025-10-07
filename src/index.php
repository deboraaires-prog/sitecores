<?php
$pdo = new PDO('mysql:host=db;dbname=app', 'user', 'password');
$statement = $pdo->query("SHOW TABLES");
$tables = $statement->fetchAll(PDO::FETCH_COLUMN);

echo "<h1>Tabelas no banco de dados:</h1>";
echo "<ul>";
foreach ($tables as $table) {
    echo "<li>$table</li>";
}
echo "</ul>";
