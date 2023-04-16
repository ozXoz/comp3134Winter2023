<?php
$weak_passwords = [
    '123456',
    '123456789',
    'qwerty',
    'password',
    '111111',
    '12345678',
    'abc123',
    '1234567',
    'password1',
    '12345',
];

$show_form = true;
$username = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $password = $_POST['password'];
    $username = $_POST['username'];

    if (in_array($password, $weak_passwords)) {
        $show_form = false;
        echo "<h2>Welcome " . htmlspecialchars($username) . " to Your Portal</h2>";
    }
}
?>

<?php if ($show_form): ?>
    <h1>Weak Password</h1>
    <form method="post">
        <input type="hidden" name="username" value="CreativeUser">
        <label>Password</label>
        <input type="password" name="password">
        <br/>
        <input type="submit">
    </form>
<?php endif; ?>