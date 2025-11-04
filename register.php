$user = $_POST['username'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];

if ($password == $confirm_password) {
    echo "Registration successful!";
} else {
    echo "Passwords do not match.";
}