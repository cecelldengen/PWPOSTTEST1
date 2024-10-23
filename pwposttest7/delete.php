<?php
if (isset($_GET['file'])) {
    $file = 'uploads/' . $_GET['file'];
    if (file_exists($file)) {
        unlink($file);
        echo "File berhasil dihapus!";
    } else {
        echo "File tidak ditemukan!";
    }
}
?>