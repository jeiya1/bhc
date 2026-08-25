<?php
declare(strict_types=1);

const DB_HOST = 'sql207.infinityfree.com';
const DB_NAME = 'if0_42634008_enhanced_barangay_health_center';
const DB_USER = 'if0_42634008';
const DB_PASS = 'K5OQTrCgNYU1fo';

function database(): PDO
{
    static $connection = null;
    if ($connection instanceof PDO) {
        return $connection;
    }
    $connection = new PDO(
        'mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=utf8mb4',
        DB_USER,
        DB_PASS,
        [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false,
        ]
    );
    $connection->exec("SET time_zone = '+08:00'");
    return $connection;
}
