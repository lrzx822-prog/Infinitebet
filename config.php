<?php

// Database setup
$dsn = 'sqlite:database.db';
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,
];

try {
    $pdo = new PDO($dsn, null, null, $options);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}

// Create users table
$pdo->exec(
    'CREATE TABLE IF NOT EXISTS users (
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        username TEXT NOT NULL UNIQUE,
        password TEXT NOT NULL,
        created_at DATETIME DEFAULT CURRENT_TIMESTAMP
    );'
);

// Create bets table
$pdo->exec(
    'CREATE TABLE IF NOT EXISTS bets (
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        user_id INTEGER,
        amount REAL NOT NULL,
        created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
        FOREIGN KEY (user_id) REFERENCES users(id)
    );'
);

// Helper functions
function createUser($username, $password) {
    global $pdo;
    $stmt = $pdo->prepare('INSERT INTO users (username, password) VALUES (?, ?)');
    return $stmt->execute([$username, password_hash($password, PASSWORD_DEFAULT)]);
}

function placeBet($user_id, $amount) {
    global $pdo;
    $stmt = $pdo->prepare('INSERT INTO bets (user_id, amount) VALUES (?, ?)');
    return $stmt->execute([$user_id, $amount]);
}

?>