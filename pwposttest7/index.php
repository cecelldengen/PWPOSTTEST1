<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Dashboard Musik</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <h2>Selamat datang, <?= $_SESSION['user']; ?></h2>
    <a href="logout.php">Logout</a>

    <h3>Upload File Musik</h3>
    <form action="upload.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="file" required><br>
        <button type="submit" name="upload">Upload</button>
    </form>

    <h3>Daftar File Musik</h3>
    <input type="text" id="search" placeholder="Cari file...">
    <table id="fileTable">
        <thead>
            <tr><th>No</th><th>Nama File</th><th>Aksi</th></tr>
        </thead>
        <tbody>
            <?php
            $files = array_diff(scandir('uploads'), ['.', '..']);
            $no = 1;
            foreach ($files as $file) {
                echo "<tr>
                        <td>{$no}</td>
                        <td>{$file}</td>
                        <td>
                            <a href='uploads/$file' download>Download</a> |
                            <a href='delete.php?file=$file' onclick='return confirm(\"Yakin ingin menghapus?\")'>Hapus</a>
                        </td>
                      </tr>";
                $no++;
            }
            ?>
        </tbody>
    </table>

    <script>
        $(document).ready(function() {
            $("#search").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $("#fileTable tbody tr").filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
                });
            });
        });
    </script>
</body>
</html>