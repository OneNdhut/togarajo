<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirmPassword = $_POST["confirm"];
    $number = $_POST["number"];
    $gender = $_POST["gender"];
    $birthday = $_POST["birthday"];
    $bahasa = $_POST["bahasa"];
    $about = $_POST["about"];

    echo "Nama: $nama <br>";
    echo "Email: $email <br>";
    echo "Number: $number <br>";
    echo "Gender: $gender <br>";
    echo "Birthday: $birthday <br>";
    echo "Bahasa: $bahasa <br>";
    echo "About: $about <br>";
}
?>
