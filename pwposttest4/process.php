<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $course = htmlspecialchars($_POST['course']);
    $age = intval($_POST['age']);
    $password = htmlspecialchars($_POST['password']);

    echo '<div class="result">';
    echo "<h3>Hasil Pendaftaran:</h3>";
    echo "<p><b>Nama Lengkap:</b> $name</p>";
    echo "<p><b>Kursus:</b> $course</p>";
    echo "<p><b>Umur:</b> $age</p>";
    echo "<p><b>Password:</b> ****** (disembunyikan)</p>";
    echo '</div>';
}
?>