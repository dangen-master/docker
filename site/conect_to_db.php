<?php
try {
    $conn = new PDO('pgsql:host=postgres-db;dbname=hd932mtu', 'hd932mtu', 'hd932mtu');
} catch (PDOException $e) {
    echo "ошибка подключения к базе данных " . $e->getMessage();
}
