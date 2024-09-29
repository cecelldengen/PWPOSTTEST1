<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar Seni Musik</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
</head>
<body id="body">
    <!-- Header -->
    <header class="header">
        <div class="container">
            <div class="logo">🎵 <span>The Music Nest</span></div>
            <nav class="navbar">
                <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="#About">Tentang Saya</a></li>
                </ul>
                <div class="toggle">
                    <input type="checkbox" id="theme-toggle">
                    <label for="theme-toggle">🌙</label>
                </div>
            </nav>
            <div class="hamburger" onclick="toggleMenu()">☰</div>
        </div>
    </header>

    <!-- Main Content -->
    <main>
        <!-- Home Section -->
        <section id="home" class="hero">
            <div class="container">
                <h1 data-aos="fade-down">Belajar Musik Menjadi Mudah dan Menyenangkan!</h1>
                <p data-aos="fade-right">Dapatkan pengalaman belajar musik dengan alat dan panduan dari musisi profesional.</p>
                <button class="cta" onclick="showPopup()" data-aos="zoom-in">Jelajahi Kursus</button>
            </div>
        </section>

        <!-- Pop-up Box -->
        <div id="popup" class="popup">
            <div class="popup-content">
                <span class="close" onclick="closePopup()">&times;</span>
                <h2>Daftar Kursus Musik</h2>
                <ul>
                    <li><a href="#gitar" onclick="closePopup()">🎸 Gitar Akustik</a></li>
                    <li><a href="#piano" onclick="closePopup()">🎹 Piano</a></li>
                    <li><a href="#drum" onclick="closePopup()">🥁 Drum</a></li>
                    <li><a href="#vokal" onclick="closePopup()">🎤 Teknik Vokal</a></li>
                </ul>
                <button onclick="closePopup()">Tutup</button>
            </div>
        </div>

        <!-- Form Section (Include Form) -->
        <section id="form-section">
            <div class="container">
                <h2>Pendaftaran Kursus Musik</h2>
                <?php include_once 'form.php'; ?>
                <?php include_once 'process.php'; ?>
            </div>
        </section>

        <!-- About Section -->
        <section id="About" class="About">
            <div class="container">
                <h2 data-aos="fade-up">Tentang Saya</h2>
                <div class="bio" data-aos="fade-left">
                    <img src="profil.jpg" alt="Profile Picture">
                    <div>
                        <p><strong>Nama:</strong> Chaelse Dengen</p>
                        <p><strong>Jurusan:</strong> Seni Musik</p>
                        <p><strong>Minat:</strong> Gitar dan Bass</p>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer>
        <div class="container">
            <p>&copy; 2024 Musikku. All Rights Reserved.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init(); // Initialize AOS for animations

        // Popup functions
        function showPopup() {
            document.getElementById("popup").style.display = "flex";
            document.body.style.overflow = 'hidden'; // Disable scrolling
        }

        function closePopup() {
            document.getElementById("popup").style.display = "none";
            document.body.style.overflow = 'auto'; // Enable scrolling
        }

        // Hamburger menu toggle
        function toggleMenu() {
            const navbar = document.querySelector('.navbar ul');
            navbar.classList.toggle('show');
        }

        // Animated scrolling to sections
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                target.scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
    </script>
</body>
</html>