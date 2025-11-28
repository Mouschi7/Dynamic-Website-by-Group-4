<?php
require_once __DIR__ . '/db.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: login.html');
    exit;
}

$name = trim($_POST['name'] ?? '');
$email = trim($_POST['email'] ?? '');
$password = $_POST['password'] ?? '';
$password_repeat = $_POST['password_repeat'] ?? '';
$agree = isset($_POST['agree']) && $_POST['agree'] === '1';

$errors = [];
if ($name === '') $errors[] = 'Name is required.';
if ($email === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) $errors[] = 'A valid email is required.';
if (strlen($password) < 6) $errors[] = 'Password must be at least 6 characters.';
if ($password !== $password_repeat) $errors[] = 'Passwords do not match.';
if (!$agree) $errors[] = 'You must agree to the terms.';

if (!empty($errors)) {
    echo '<h3>Registration errors:</h3><ul>';
    foreach ($errors as $e) {
        echo '<li>' . htmlspecialchars($e) . '</li>';
    }
    echo '</ul>';
    echo '<p><a href="login.html">Go back</a></p>';
    exit;
}

// Check if email already exists
$check = $mysqli->prepare('SELECT id FROM users WHERE email = ? LIMIT 1');
if (!$check) {
    echo 'DB error: ' . htmlspecialchars($mysqli->error);
    exit;
}
$check->bind_param('s', $email);
$check->execute();
$check->store_result();
if ($check->num_rows > 0) {
    echo 'Email already registered. <a href="login.html">Go back</a>';
    exit;
}
$check->close();

$hash = password_hash($password, PASSWORD_DEFAULT);
$insert = $mysqli->prepare('INSERT INTO users (name, email, password, created_at) VALUES (?, ?, ?, NOW())');
if (!$insert) {
    echo 'DB error: ' . htmlspecialchars($mysqli->error);
    exit;
}
$insert->bind_param('sss', $name, $email, $hash);
if ($insert->execute()) {
    header('Location: login.html?registered=1');
    exit;
} else {
    echo 'Insert failed: ' . htmlspecialchars($insert->error);
    exit;
}

?>
