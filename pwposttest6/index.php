<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload File Musik</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Upload dan Kelola File Musik</h1>
        <form action="upload.php" method="POST" enctype="multipart/form-data">
            <label for="file">Pilih File (mp3, wav, pdf):</label>
            <input type="file" name="file" id="file" required>
            <button type="submit" name="upload">Upload</button>
        </form>
        <h2>Daftar File yang Diupload</h2>
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama File</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $files = scandir('uploads');
                $no = 1;

                foreach ($files as $file) {
                    if ($file === '.' || $file === '..') continue;
                    echo "<tr>
                            <td>{$no}</td>
                            <td>{$file}</td>
                            <td>
                                <a href='uploads/$file' download>Download</a> | 
                                <a href='delete.php?file=$file' onclick='return confirm(\"Yakin ingin menghapus file ini?\")'>Hapus</a>
                            </td>
                          </tr>";
                    $no++;
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>