$user = $_POST['username'];
$password = $_POST['password'];
if ($user == "admin" && $password == "password123") {
    echo "Login successful!";
} else {
    echo "Invalid username or password.";
}