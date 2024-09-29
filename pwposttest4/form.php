<form action="" method="post">
    <label for="name">Nama Lengkap:</label>
    <input type="text" id="name" name="name" placeholder="Masukkan nama lengkap" required>

    <label for="course">Pilih Kursus:</label>
    <select id="course" name="course" required>
        <option value="gitar">Gitar Akustik</option>
        <option value="piano">Piano</option>
        <option value="drum">Drum</option>
        <option value="vokal">Teknik Vokal</option>
    </select>

    <label for="age">Umur:</label>
    <input type="number" id="age" name="age" min="1" placeholder="Masukkan umur" required>

    <label for="password">Password:</label>
    <input type="password" id="password" name="password" maxlength="20" placeholder="Masukkan password" required>

    <input type="submit" value="Daftar">
</form>