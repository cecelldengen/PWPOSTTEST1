<?php
if (isset($_GET['file'])) {
    $file = basename($_GET['file']);
    $filePath = 'uploads/' . $file;

    if (file_exists($filePath)) {
        unlink($filePath);
        echo "<script>alert('File berhasil dihapus!'); window.location = 'index.php';</script>";
    } else {
        echo "<script>alert('File tidak ditemukan!'); window.location = 'index.php';</script>";
    }
} else {
    header('Location: index.php');
}
?>