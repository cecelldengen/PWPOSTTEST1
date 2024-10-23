<?php
if (isset($_POST['upload'])) {
    $file = $_FILES['file'];
    $allowedTypes = ['audio/mp3', 'audio/wav', 'application/pdf'];

    if (in_array($file['type'], $allowedTypes)) {
        move_uploaded_file($file['tmp_name'], 'uploads/' . $file['name']);
        echo "File berhasil diupload!";
    } else {
        echo "Tipe file tidak didukung!";
    }
}
?>