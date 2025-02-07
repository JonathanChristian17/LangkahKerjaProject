<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Subscriptions</title>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="{{asset('css/langganan.css')}}" rel="stylesheet">
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

<!-- Your page content goes here -->
<div class="subscription-header">
    <h1>Biaya & Benefit</h1>
    <h2>Langganan</h2>
    <p>Pilih paket langganan sebagai investasi belajar yang sesuai dengan kebutuhan Anda.</p>
</div>

<div class="subscription-container">
    <div class="text-center">
        <p>Dapatkan promo khusus dan informasi menarik lainnya.</p>
        <a href="whatsapp://send" class="whatsapp-link">
            <img src="{{asset('images/wa.png')}}" alt="WhatsApp">
            Tanya kami via WhatsApp
        </a>
    </div>

    <div class="pricing-grid">
        <div class="pricing-card">
            <h3>Langganan 1 bulan (30 hari)</h3>
            <div class="price">Rp 500.00</div>
            <a href="{{ route('login') }}" class="pilih-paket">Pilih paket</a>
        </div>

        <div class="pricing-card">
            <h3>Langganan 3 bulan (90 hari)</h3>
            <div class="price">Rp 1.300.000</div>
            <a href="{{ route('login') }}" class="pilih-paket">Pilih paket</a>
        </div>

        <div class="pricing-card">
            <h3>Langganan 6 bulan (180 hari)</h3>
            <div class="price">Rp 2.400.000</div>
            <a href="{{ route('login') }}" class="pilih-paket">Pilih paket</a>
        </div>

        <div class="pricing-card">
            <h3>Langganan 1 tahun (365 hari)</h3>
            <div class="price">Rp 4.600.000</div>
            <a href="{{ route('login') }}" class="pilih-paket">Pilih paket</a>
        </div>
    </div>

    <div class="features-grid">
        <div class="feature-card">
            <div class="feature-icon">
                <i class="fas fa-graduation-cap"></i>
            </div>
            <div class="feature-content">
                <h4>Akses Semua Kelas</h4>
                <p>Akses semua isi seluruh materi di Dicoding Academy.</p>
            </div>
        </div>
        <div class="feature-card">
            <div class="feature-icon">
                <i class="fas fa-tasks"></i>
            </div>
            <div class="feature-content">
                <h4>Submission</h4>
                <p>Uji kemampuan teknis Anda dengan mengerjakan tugas submission.</p>
            </div>
        </div>
        <div class="feature-card">
            <div class="feature-icon">
                <i class="fas fa-comments"></i>
            </div>
            <div class="feature-content">
                <h4>Forum Diskusi</h4>
                <p>Diskusikan materi belajar dengan expert langsung.</p>
            </div>
        </div>
        <div class="feature-card">
            <div class="feature-icon">
                <i class="fas fa-code"></i>
            </div>
            <div class="feature-content">
                <h4>Code Review</h4>
                <p>Kode yang Anda kerjakan akan di-review secara komprehensif oleh Reviewer.</p>
            </div>
        </div>
        <div class="feature-card">
            <div class="feature-icon">
                <i class="fas fa-laptop-code"></i>
            </div>
            <div class="feature-content">
                <h4>Kode Interaktif</h4>
                <p>Tulis dan jalankan langsung kode latihan Anda pada modul.</p>
            </div>
        </div>
        <div class="feature-card">
            <div class="feature-icon">
                <i class="fas fa-certificate"></i>
            </div>
            <div class="feature-content">
                <h4>Sertifikat</h4>
                <p>Sertifikat kompetensi berlaku dan Anda berhak mencantumkan kelas sertifikat kompetensi Anda pada Google Data.</p>
            </div>
        </div>
    </div>

    <div class="trial-section">
        <p>Masih belum yakin untuk berlangganan? Silakan coba gratis selama 15 hari dan akses semua kelas di Dicoding Academy</p>
        <a href="{{ route('login') }}" class="coba-sekarang">Coba sekarang</a>
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

</body>
</html>
