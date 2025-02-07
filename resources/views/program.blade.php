<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&display=swap" rel="stylesheet">
   
    <title>Program</title>
    <link href="{{asset('css/program.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body>

   <!-- navbar -->
   <nav class="navbar">
    <img src="{{ asset('images/logo.png') }}" alt="Logo" class="logo">
    <div class="nav-links">
        <input type="search" placeholder="What do you want to learn?" class="search-bar">
        <a href="/">Home</a>
        <a href="/learningpath">Learning Path</a>
        <a href="/langganan">Langganan</a>
        <a href="/program">Program</a>
    </div>
    @if (Route::has('login'))
            <div class="auth-buttons">
                @auth
                    <a href="{{ route('dashboard') }}" class="register-btn">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="login-btn">Login</a>
                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="register-btn">Register</a>
                @endif
                @endauth
            </div>
            @endif
</nav>

<div class="program-content">
    <h1 class="program-title">PROGRAM</h1>
    
    <div class="program-grid">
        <!-- Software Development -->
        <div class="program-card">
            <img src="{{asset('images/Frame 49.png')}}" alt="Software Development">
            <h2>Software Development</h2>
            <p>Web and application development community of IIIT Ranchi has been primarily responsible for providing innovative technical solutions to most...</p>
            <a href="{{ route('login') }}" class="start-track">Start this track <span>→</span></a>
        </div>

        <!-- Robotics -->
        <div class="program-card">
            <img src="{{asset('images/Frame 49 (1).png')}}" alt="Robotics">
            <h2>Robotics</h2>
            <p>Does that image of R2D2 inspire you to create a personal one for yourself? If you have ever even secretly aspired to build your own robot, then the...</p>
            <a href="{{ route('login') }}" class="start-track">Start this track <span>→</span></a>
        </div>

        <!-- Electronics & IOT -->
        <div class="program-card">
            <img src="{{asset('images/Frame 49 (2).png')}}" alt="Electronics & IOT">
            <h2>Electronics & IOT</h2>
            <p>Electronics and IoT community has the sole objective of inculcating a spirit of developing innovative technology solutions to real life...</p>
            <a href="{{ route('login') }}" class="start-track">Start this track <span>→</span></a>
        </div>

        <!-- Product Design -->
        <div class="program-card">
            <img src="{{asset('images/Frame 49 (3).png')}}" alt="Product Design & Management">
            <h2>Product Design & Management</h2>
            <p>Learn the fundamentals of product design and management to create successful digital products...</p>
            <a href="{{ route('login') }}" class="start-track">Start this track <span>→</span></a>
        </div>

        <!-- Competitive Programming -->
        <div class="program-card">
            <img src="{{asset('images/Frame 49 (4).png')}}" alt="Competitive Programming">
            <h2>Competitive Programming</h2>
            <p>Master algorithms and data structures to excel in competitive programming competitions...</p>
            <a href="{{ route('login') }}" class="start-track">Start this track <span>→</span></a>
        </div>

        <!-- Machine Learning -->
        <div class="program-card">
            <img src="{{asset('images/Frame 49 (5).png')}}" alt="Machine Learning">
            <h2>Machine Learning</h2>
            <p>Dive into the world of AI and machine learning to build intelligent systems...</p>
            <a href="{{ route('login') }}" class="start-track">Start this track <span>→</span></a>
        </div>
    </div>
</div>

<footer class="footer">
        <div class="footer-container">
            <div class="footer-content">
                <!-- Logo and Company Info -->
                <div class="footer-left">
                    <div class="logo-container">
                        <img src="{{asset('images/logo.png')}}" alt="Langkah Kerja" class="footer-logo">
                    </div>
                    <p class="company-address">
                        Langkah Kerja Space<br>
                        Jalan Dr. T. Mansur No.9, Padang Bulan, Kec.<br>
                        Medan Baru, Kota Medan, Sumatera Utara 20222
                    </p>
                    <div class="social-links">
                        <a href="instagram.com" class="social-link"><i class="fab fa-instagram"></i></a>
                        <a href="youtube.com" class="social-link"><i class="fab fa-youtube"></i></a>
                        <a href="x.com" class="social-link"><i class="fab fa-twitter"></i></a>
                        <a href="facebook.com" class="social-link"><i class="fab fa-facebook"></i></a>
                    </div>
                </div>
    
                <!-- Center Links -->
                <div class="footer-center">
                    <div class="footer-brand">
                        <h3>Langkah Kerja</h3>
                        <p>Pasti Ada Langkah Untuk Kerja</p>
                    </div>
                    <ul class="footer-links">
                        <li><a href="/">About Us</a></li>
                    </ul>
                </div>
    
                <!-- Right Links -->
                <div class="footer-right">
                    <ul class="footer-links">
                        <li><a href="whatsapp://send">Contact Us</a></li>
                        <li><a href="whatsapp://send">FAQ</a></li>
                    </ul>
                </div>
    
                <!-- Awards Section -->
                <div class="footer-awards">
                    <h3>Penghargaan</h3>
                    <div class="award-image">
                        <img src="{{asset('images/aba-2019-2.png.png')}}" alt="ASEAN Award">
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Copyright -->
        <div class="copyright">
            <p>© 2025 Langkah Kerja.</p>
        </div>
    </footer>

<style>
body {
    font-family: 'Space Grotesk', sans-serif;
}
</style>

</body>
</html>
