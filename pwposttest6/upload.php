<?php
if (isset($_POST['upload'])) {
    $file = $_FILES['file'];
    $fileName = $file['name'];
    $fileTmp = $file['tmp_name'];
    $fileSize = $file['size'];
    $fileError = $file['error'];

    $allowedExt = ['mp3', 'wav', 'pdf'];
    $fileExt = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
    $maxSize = 2 * 1024 * 1024;

    if (!in_array($fileExt, $allowedExt)) {
        echo "<script>alert('Ekstensi file tidak diizinkan!'); window.location = 'index.php';</script>";
        exit;
    }

    if ($fileError === 0) {
        if ($fileSize <= $maxSize) {
            $newFileName = date('Y-m-d H.i.s') . '.' . $fileExt;
            if (move_uploaded_file($fileTmp, 'uploads/' . $newFileName)) {
                echo "<script>alert('File berhasil diupload!'); window.location = 'index.php';</script>";
            } else {
                echo "<script>alert('Gagal mengupload file!'); window.location = 'index.php';</script>";
            }
        } else {
            echo "<script>alert('Ukuran file terlalu besar! Maksimal 2 MB'); window.location = 'index.php';</script>";
        }
    } else {
        echo "<script>alert('Terjadi kesalahan saat mengupload file!'); window.location = 'index.php';</script>";
    }
}
?>