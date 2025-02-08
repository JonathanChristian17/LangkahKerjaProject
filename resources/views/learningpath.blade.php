<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Learning Path</title>
    <link rel="icon" href="{{ asset('images/logo.png') }}">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="{{asset('css/learningpath.css')}}" rel="stylesheet">
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

<!-- Learning Path Header -->
<div class="learning-path-header">
    <div class="path-tabs">
        <a href="#" class="path-tab">Data Scientist</a>
        <a href="#" class="path-tab active">Front-End Web</a>
        <a href="#" class="path-tab">Back-End JavaScript</a>
    </div>
    
    <div class="path-content">
        <h1>Front-End Web Developer</h1>
        <p>Kurikulum disusun oleh Dicoding dan pelaku industri di bidang Web Development. Siswa dipersiapkan untuk<br>
        menjadi Front-End Web Developer sesuai standar kebutuhan industri.</p>
    </div>
</div>

<!-- Learning Path Content -->
<div class="learning-path-content">
    <div class="path-grid">
        <!-- Left Column -->
        <div class="left-column">
            <div class="path-card">
                <div class="path-info">
                    <div class="path-details">
                        <h3>Langkah 1</h3>
                        <div class="path-stats">
                            <span>45</span>
                            <span>Jam</span>
                            <span>•</span>
                            <span>4,87</span>
                            <span>•</span>
                            <span>Dasar</span>
                        </div>
                        <div class="enrollment-stats">
                            <span>1.31 Modul</span>
                            <span>•</span>
                            <span>205.760 Siswa Terdaftar</span>
                        </div>
                    </div>
                    <div class="path-description">
                        <p>Belajar Dasar Pemrograman Web</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Right Column with Divider -->
        <div class="path-center">
            <div class="path-divider"></div>
            <div class="center-content">
                <h2>Buat Web Pertamamu di Sini</h2>
                <p>Belajar dasar adalah langkah yang tidak boleh dilewatkan untuk mahir di bidang apa pun. Di sini, Anda akan belajar dasar dari HTML dan CSS sebagai pilar pembentuk website.</p>
            </div>
        </div>
    </div>
</div>

<!-- Learning Path Content -->
<div class="learning-path-content">
    <div class="path-grid">
        <!-- Left Column -->
        <div class="left-column">
            <div class="path-card">
                <div class="path-info">
                    <div class="path-details">
                        <h3>Langkah 2</h3>
                        <div class="path-stats">
                            <span>40</span>
                            <span>Jam</span>
                            <span>•</span>
                            <span>4,89</span>
                            <span>•</span>
                            <span>Menengah</span>
                        </div>
                        <div class="enrollment-stats">
                            <span>1.25 Modul</span>
                            <span>•</span>
                            <span>180.450 Siswa Terdaftar</span>
                        </div>
                    </div>
                    <div class="path-description">
                        <p>Belajar Framework JavaScript</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Right Column with Divider -->
        <div class="path-center">
            <div class="path-divider"></div>
            <div class="center-content">
                <h2>Kuasai JavaScript Framework</h2>
                <p>Pelajari framework JavaScript populer seperti React dan Vue.js untuk membangun aplikasi web yang dinamis dan interaktif. Kelas ini mengajarkan konsep dasar hingga teknik pengembangan yang lebih kompleks.</p>
            </div>
        </div>
    </div>
</div>

<!-- Learning Path Content -->
<div class="learning-path-content">
    <div class="path-grid">
        <!-- Left Column -->
        <div class="left-column">
            <div class="path-card">
                <div class="path-info">
                    <div class="path-details">
                        <h3>Langkah 3</h3>
                        <div class="path-stats">
                            <span>45</span>
                            <span>Jam</span>
                            <span>•</span>
                            <span>4,87</span>
                            <span>•</span>
                            <span>Profesional</span>
                        </div>
                        <div class="enrollment-stats">
                            <span>1.31 Modul</span>
                            <span>•</span>
                            <span>205.760 Siswa Terdaftar</span>
                        </div>
                    </div>
                    <div class="path-description">
                        <p>Menjadi Front-End Web Developer Pemula</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Right Column with Divider -->
        <div class="path-center">
            <div class="path-divider"></div>
            <div class="center-content">
                <h2>Jadilah Expert di Bidang Front-End</h2>
                <p>Menjadi seorang expert adalah impian setiap developer. Untuk itu, kelas ini akan membekalimu dengan kemampuan untuk membuat aplikasi web yang memiliki performa dan user experience yang maksimal.</p>
            </div>
        </div>
    </div>
</div>

<!-- Learning Path Content -->
<div class="learning-path-content">
    <div class="path-grid">
        <!-- Left Column -->
        <div class="left-column">
            <div class="path-card">
                <div class="path-info">
                    <div class="path-details">
                        <h3>Langkah 4</h3>
                        <div class="path-stats">
                            <span>45</span>
                            <span>Jam</span>
                            <span>•</span>
                            <span>4,87</span>
                            <span>•</span>
                            <span>Profesional</span>
                        </div>
                        <div class="enrollment-stats">
                            <span>1.31 Modul</span>
                            <span>•</span>
                            <span>205.760 Siswa Terdaftar</span>
                        </div>
                    </div>
                    <div class="path-description">
                        <p>Menjadi Fundamental Front-End Web Developer</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Right Column with Divider -->
        <div class="path-center">
            <div class="path-divider"></div>
            <div class="center-content">
                <h2>Jadilah Fundamental Front-End Web Developer</h2>
                <p>Menjadi seorang expert adalah impian setiap developer. Untuk itu, kelas ini akan membekalimu dengan kemampuan untuk membuat aplikasi web yang memiliki performa dan user experience yang maksimal.</p>
            </div>
        </div>
    </div>
</div>

<div class="developer-showcase">
    <h3>Jadilah Front-End Web Developer seperti mereka</h3>
    <div class="developer-avatars">
        <img src="{{asset('images/ava1.png')}}" alt="Developer 1" class="avatar">
        <img src="{{asset('images/ava2.png')}}" alt="Developer 2" class="avatar">
        <img src="{{asset('images/ava3.png')}}" alt="Developer 3" class="avatar">
        <img src="{{asset('images/ava4.png')}}" alt="Developer 4" class="avatar">
        <img src="{{asset('images/ava1.png')}}" alt="Developer 5" class="avatar">
        <img src="{{asset('images/ava2.png')}}" alt="Developer 6" class="avatar">
    </div>
    <a href="{{ route('login') }}" class="cta-button">Mulai belajar</a>
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

</body>
</html>
