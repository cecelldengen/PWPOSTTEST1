<form action="process.php" method="post">
    <label for="name">Nama Lengkap:</label>
    <input type="text" id="name" name="name" required>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>

    <label for="course">Pilih Kursus:</label>
    <select id="course" name="course" required>
        <option value="Gitar">Gitar</option>
        <option value="Piano">Piano</option>
        <option value="Drum">Drum</option>
        <option value="Vokal">Vokal</option>
    </select>

    <button type="submit">Daftar</button>
</form>