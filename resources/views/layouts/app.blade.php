<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sitogab Antonio • Portfolio</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/portfolio.css?v=' . time()) }}">
    <style>body { cursor: none; }</style>
</head>
<body>

    <!-- CUSTOM CURSOR -->
    <div class="cursor"></div>

    <!-- HEADER / NAVBAR -->
    <header id="header">
        <div class="nav-container">
            <div class="logo">Antonio</div>
            <nav>
                <ul>
                    <li><a href="#home" class="nav-link">Home</a></li>
                    <li><a href="#about" class="nav-link">Tentang</a></li>
                    <li><a href="#projects" class="nav-link">Proyek</a></li>
                    <li><a href="#certificates" class="nav-link">Sertifikat</a></li>
                    <li><a href="#documentation" class="nav-link">Dokumentasi</a></li>
                    <li><a href="#contact" class="nav-link">Hubungi</a></li>
                </ul>
            </nav>
            <button class="menu-toggle">Menu</button>
        </div>
    </header>

    @yield('content')

<!-- CV MODAL -->
<div id="cvModal" class="cv-modal">
    <span class="close-cv" id="closeCV">×</span>
    <iframe src="{{ asset('portofolio.pdf') }}"></iframe>
</div>




    <footer style="text-align:center;padding:5rem 0;color:#999;border-top:1px solid #444;">
        © 2025 <strong>Sitogab Antonio</strong> • Built with Laravel
    </footer>

    <!-- JS: Cursor + Smooth Scroll + Header Scroll Effect -->
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const cursor = document.querySelector('.cursor');
            const header = document.getElementById('header');
            const links = document.querySelectorAll('.nav-link');

            // Cursor
            document.addEventListener('mousemove', (e) => {
                cursor.style.transform = `translate(${e.clientX - 10}px, ${e.clientY - 10}px)`;
                cursor.classList.add('active');
            });
            document.querySelectorAll('a, button, .magnetic').forEach(el => {
                el.addEventListener('mouseenter', () => cursor.classList.add('hover'));
                el.addEventListener('mouseleave', () => cursor.classList.remove('hover'));
            });

            // Smooth scroll
            links.forEach(link => {
                link.addEventListener('click', function(e) {
                    e.preventDefault();
                    const target = document.querySelector(this.getAttribute('href'));
                    window.scrollTo({
                        top: target.offsetTop - 100,
                        behavior: 'smooth'
                    });
                });
            });

            // Header effect saat scroll
            window.addEventListener('scroll', () => {
                if (window.scrollY > 100) {
                    header.classList.add('scrolled');
                } else {
                    header.classList.remove('scrolled');
                }
            });
            });

            // Ripple klik
            document.addEventListener('click', (e) => {
                const ripple = document.createElement('div');
                ripple.classList.add('ripple');
                ripple.style.left = (e.clientX - 20) + 'px';
                ripple.style.top  = (e.clientY - 20) + 'px';
                document.body.appendChild(ripple);
                setTimeout(() => ripple.remove(), 1000);
            });
    </script>

<script>
    document.getElementById('openCV').onclick = () => document.getElementById('cvModal').classList.add('active');
    document.getElementById('closeCV').onclick = () => document.getElementById('cvModal').classList.remove('active');
    document.getElementById('cvModal').onclick = (e) => { if(e.target === document.getElementById('cvModal')) document.getElementById('cvModal').classList.remove('active'); }
</script>

</body>
</html>