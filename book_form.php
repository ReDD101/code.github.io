
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

ini_set('max_execution_time', 100); // Set the maximum execution time to 100 seconds (1 minute)

$connection = mysqli_connect('localhost', 'root', '', 'book_db');

if (!$connection) {
    die('MySQL Connection Error: ' . mysqli_connect_error());
}

if (isset($_POST['submit'])) {
    $name = mysqli_real_escape_string($connection, $_POST['name']);
$email = mysqli_real_escape_string($connection, $_POST['email']);
$phone = mysqli_real_escape_string($connection, $_POST['phone']);
$message = mysqli_real_escape_string($connection, $_POST['message']);


    $request = "INSERT INTO book_form (name, email, phone, message) VALUES ('$name', '$email', '$phone', '$message')";
    $result = mysqli_query($connection, $request);
    if (!$result) {

        echo 'MySQL Error: ' . mysqli_error($connection);
    } else {
        echo 'Data inserted successfully.';
        // Redirect to suggestion.php after displaying the success message
        header('Location: suggestion.php');
        exit();
    }
}
?>




