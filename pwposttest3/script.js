// Initialize AOS for animations
AOS.init();

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

// Dark mode toggle
const body = document.getElementById('body');
const themeToggle = document.getElementById('theme-toggle');

themeToggle.addEventListener('change', function () {
    body.classList.toggle('dark-mode');
    const isDark = body.classList.contains('dark-mode');
    themeToggle.nextElementSibling.textContent = isDark ? '🌞' : '🌙'; // Change icon
});

// Detecting user preference for dark mode
const prefersDarkScheme = window.matchMedia("(prefers-color-scheme: dark)");

if (prefersDarkScheme.matches) {
    body.classList.add('dark-mode');
    themeToggle.checked = true; // Check toggle if dark mode is preferred
    themeToggle.nextElementSibling.textContent = '🌞'; // Change icon to sun
}

// Automatic theme toggle based on system preference
prefersDarkScheme.addEventListener("change", event => {
    if (event.matches) {
        body.classList.add('dark-mode');
        themeToggle.checked = true;
        themeToggle.nextElementSibling.textContent = '🌞';
    } else {
        body.classList.remove('dark-mode');
        themeToggle.checked = false;
        themeToggle.nextElementSibling.textContent = '🌙';
    }
});