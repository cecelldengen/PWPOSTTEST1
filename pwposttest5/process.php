<?php
$conn = new mysqli("localhost", "root", "", "musik");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $course = $_POST['course'];

    $sql = "INSERT INTO students (name, email, course) VALUES ('$name', '$email', '$course')";
    
    if ($conn->query($sql) === TRUE) {
        echo "Pendaftaran berhasil!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$sql = "SELECT * FROM students";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<h2>Daftar Peserta Kursus</h2><ul>";
    while ($row = $result->fetch_assoc()) {
        echo "<li>" . $row["name"] . " - " . $row["email"] . " - " . $row["course"] . "</li>";
    }
    echo "</ul>";
} else {
    echo "Belum ada peserta terdaftar.";
}
$conn->close();
?>