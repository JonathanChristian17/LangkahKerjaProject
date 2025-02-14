<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>LangkahKerja</title>

        <!-- Fonts -->
        <link rel="icon" href="{{ asset('images/logo.png') }}">
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
        <link href="{{asset('css/dashboard.css')}}" rel="stylesheet">
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
    
        <!-- header -->
        <div class="header">
            <div class="header-left">
                <h1>Improve Your Skills and Build Your Career With <span>Langkah Kerja</span></h1>
                <p>Enhance your skills and take your career to the next level with Job Step. Find tailored resources, practical guidance, and expert insights to help you thrive as a professional in an ever-evolving digital world.</p>
                <a href="{{ route('login') }}" class="join-button">Join for free</a>
            </div>
            <div class="header-right">
                <img src="{{asset('images/header-bg.png')}}" alt="Student">
            </div>
        </div>
    
        <!-- trusted companies section -->
        <div class="trusted-section">
            <p>Trusted by 5,000+ Companies Worldwide</p>
            <div class="company-logos">
                <img src="{{asset('images/google-2015 1.png')}}" alt="Google">
                <img src="{{asset('images/netflix-3 1.png')}}" alt="Netflix">
                <img src="{{asset('images/airbnb 1.png')}}" alt="Airbnb">
                <img src="{{asset('images/amazon-2 (1) 1.png')}}" alt="Amazon">
                <img src="{{asset('images/facebook.png')}}" alt="Facebook">
                <img src="{{asset('images/grab-logo.png')}}" alt="Grab">
            </div>
        </div>
    
        <!-- what is section -->
        <div class="what-is-section">
            <h2>What is <span>Langkah Kerja</span>?</h2>
            <p>Langkah Kerja is an innovative platform that bridges education and industry in the IT field, offering self-paced learning, progress tracking, and career dashboards to prepare users for the global job market. Start your journey today as an instructor or student!</p>
            
            <div class="role-cards">
                <div class="role-card instructor">
                    <h3>FOR INSTRUCTOR</h3>
                    <a href="{{ route('login') }}" class="role-btn">Start a Class Today</a>
                </div>
                <div class="role-card student">
                    <h3>FOR STUDENTS</h3>
                    <a href="{{ route('login') }}" class="role-btn">Enter access code</a>
                </div>
            </div>
        </div>
    
        <!-- classroom comparison section -->
        <div class="classroom-section">
            <div class="classroom-content">
                <h2>Everything you can do in a physical classroom, <span>you can do with Langkah Kerja</span></h2>
                <p>With <strong>Langkah Kerja</strong>, the boundaries of the traditional classroom are gone. From interactive learning and skill development to real-time progress tracking and career development, everything you can achieve in a physical classroom is now accessible anytime, anywhere. Experience the perfect blend of education and technology designed to empower your journey in the IT world!</p>
                <a href="{{ route('login') }}" class="learn-more">Learn more</a>
            </div>
            <div class="classroom-image">
                <img src="{{asset('images/Group-17.png')}}" alt="Classroom Experience">
            </div>
        </div>
    
        <!-- learning path section -->
        <div class="learning-path-section">
            <h2>Learning Path</h2>
            <p>Learning path will help you in learning at the Academy with a curriculum developed together with leading industry players.</p>
            
        
    
            <!-- partner badges -->
            <div class="partner-badges">
                <img src="{{asset('images/academy-googleatp-3.png.png')}}" alt="Google Developers Authorized Training Partner">
                <img src="{{asset('images/google-cloud-partner.png.png')}}" alt="Google Cloud Partner">
                <img src="{{asset('images/google-for-education-partner.jpg.png')}}" alt="Google for Education Partner">
                <img src="{{asset('images/aws-partner.png.png')}}" alt="AWS Partner">
            </div>
    
            <!-- company logos -->
            <div class="company-path-logos">
                <div class="logo-card"><img src="{{asset('images/homepage-partner-google.png.png')}}" alt="Google"></div>
                <div class="logo-card"><img src="{{asset('images/homepage-partner-microsoft.png.png')}}" alt="Microsoft"></div>
                <div class="logo-card"><img src="{{asset('images/homepage-partner-aws.png.png')}}" alt="AWS"></div>
                <div class="logo-card"><img src="{{asset('images/homepage-partner-ibm.png.png')}}" alt="IBM"></div>
                <div class="logo-card"><img src="{{asset('images/homepage-partner-line.png.png')}}" alt="LINE"></div>
            </div>
        </div>
    
        
        <!-- learning paths -->
        <div class="learning-paths">
            <div class="path-card">
                <img src="{{asset('images/homepage-lp-android-developer-3.jpg.png')}}" alt="Android Developer">
                <img src="{{asset('images/dos-android_developer_logo_300124171945.png.png')}}" alt="" class="badge">
                <h3>Android Developer</h3>
            </div>
            <div class="path-card">
                <img src="{{asset('images/homepage-lp-back-end-developer-2.jpg.png')}}" alt="Back-End Developer">
                <img src="{{asset('images/dos-back_end_developer_logo_300124172220.png.png')}}" alt="" class="badge">
                <h3>Back-End Developer</h3>
            </div>
            <div class="path-card">
                <img src="{{asset('images/homepage-lp-front-end-web-developer-2.jpg.png')}}" alt="Front-End Web Developer">
                <img src="{{asset('images/dos-front_end_web_developer_logo_300124172039.png.png')}}" alt="" class="badge">
                <h3>Front-End Web Developer</h3>
            </div>
            <div class="path-card">
                <img src="{{asset('images/homepage-lp-ios-developer-2.jpg.png')}}" alt="iOS Developer">
                <img src="{{asset('images/dos-android_developer_logo_300124171945.png.png')}}" alt="" class="badge">
                <h3>iOS Developer</h3>
            </div>
        </div>
    
        <!-- fullstack developer section -->
        <div class="fullstack-section">
            <div class="fullstack-left">
                <div class="fullstack-details">
                    <h2>Full Stack Developer</h2>
                    <div class="class-info">
                        <div class="info-item">
                            <i class="far fa-book"></i>
                            <span>6 kelas</span>
                        </div>
                        <div class="info-item">
                            <i class="far fa-users"></i>
                            <span>296k siswa belajar di learning path ini</span>
                        </div>
                    </div>
                    <p>Kurikulum didesain dengan persetujuan dari Tim Google untuk mempersiapkan full stack developer standar Global. Langkah Kerja adalah Google Developer Authorized Training Partner.</p>
                </div>
            </div>
    
            <div class="fullstack-right">
                <div class="learning-cards">
                    <div class="learning-card">
                        <div class="card-header">
                            <img src="{{asset('images/memulai_pemrograman_dengan_kotlin_logo_230421132137.jpg.png')}}" alt="Dasar Pemrogramman">
                        </div>
                        <div class="card-content">
                            <div class="step-label">Langkah 1</div>
                            <h4>Dasar Pemrogramman</h4>
                            <div class="card-info">
                                <div class="rating">
                                    <span class="rating-score">4.56</span>
                                    <div class="level-badge">Level Pemula</div>
                                </div>
                            </div>
                        </div>
                    </div>
    
                    <div class="learning-card">
                        <div class="card-header">
                            <img src="{{asset('images/belajar_fundamental_aplikasi_android_logo_230421132359.jpg.png')}}" alt="Pemrograman Web">
                        </div>
                        <div class="card-content">
                            <div class="step-label">Langkah 2</div>
                            <h4>Pemrograman Web</h4>
                            <div class="card-info">
                                <div class="rating">
                                    <span class="rating-score">4.87</span>
                                    <div class="level-badge">Level Pemula</div>
                                </div>
                            </div>
                        </div>
                    </div>
    
                    <div class="learning-card">
                        <div class="card-header">
                            <img src="{{asset('images/belajar_membuat_aplikasi_android_untuk_pemula_logo_230421132330.jpg.png')}}" alt="Object Oriented">
                        </div>
                        <div class="card-content">
                            <div class="step-label">Langkah 3</div>
                            <h4>Object Oriented</h4>
                            <div class="card-info">
                                <div class="rating">
                                    <span class="rating-score">4.84</span>
                                    <div class="level-badge">Level Pemula</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
    <section class="features">
        <div class="container">
            <div class="features-header">
                <h2>Our <span>Features</span></h2>
                <p>This very extraordinary feature, can make learning activities more efficient</p>
            </div>
            
            <div class="features-content">
                <div class="features-image">
                    <div class="decorative-circle"></div>
                    <div class="decorative-dot"></div>
                    <div class="video-window">
                        <div class="window-header">
                            <div class="window-controls">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </div>
                        <div class="video-grid">
                            <div class="instructor-wrapper">
                                <div class="instructor-card">
                                    <img src="{{asset('images/portrait-teacher-giving-online-class 1.png')}}" alt="Profile 1">
                                    <div class="user-tag instructor-tag">
                                        <span class="icon">⚡</span>
                                        <span class="text">Instructor</span>
                                        <span class="name">Eveny Howard</span>
                                    </div>
                                </div>
                                <div class="action-buttons">
                                    <button class="btn-present">Present</button>
                                    <button class="btn-call">
                                        <span class="call-icon">📞</span>
                                        Call
                                    </button>
                                </div>
                            </div>
                            <div class="students-container">
                                <div class="student-card top-left">
                                    <img src="{{asset('images/image 7.png')}}" alt="Tamara Chen">
                                    <div class="signal-icon">⚡</div>
                                    <div class="student-name">Tamara Chen</div>
                                </div>
                                <div class="student-card top-right">
                                    <img src="{{asset('images/image 8.png')}}" alt="Adam Levin">
                                    <div class="signal-icon">⚡</div>
                                    <div class="student-name">Adam Levin</div>
                                </div>
                                <div class="student-card bottom-left">
                                    <img src="{{asset('images/image 10.png')}}" alt="Humbert Low">
                                    <div class="signal-icon">⚡</div>
                                    <div class="student-name">Humbert Low</div>
                                </div>
                                <div class="student-card bottom-right">
                                    <img src="{{asset('images/image 11.png')}}" alt="Patricia Mendoza">
                                    <div class="signal-icon">⚡</div>
                                    <div class="student-name">Patricia Mendoza</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    
                <div class="features-text">
                    <h3>Self-paced Learning</h3>
                    <h4 class="modules">Modules</h4>
                    <p>Designed for flexibility, these modules enable users to learn at their own pace, tailored to industry needs and current development, and facilitate effective skill development.</p>
                </div>
            </div>
        </div>
    </section>
    
    <section class="progress-tracking">
        <div class="container">
            <div class="features-content">
                <div class="features-text">
                    <h3>Progress Tracking <span class="orange-text">System</span></h3>
                    <p>This feature provides insight into the user's learning progress, helping to identify areas that need improvement. With real-time feedback, users can focus on aspects that require more attention, ensuring more effective and sustainable learning.</p>
                </div>
                <div class="features-image">
                    <img src="{{asset('images/Group 122.png')}}" alt="Progress Tracking">
                    
                </div>
            </div>
        </div>
    </section>
    
    
    <section class="career-branding">
        <div class="container">
            <div class="features-content">
                <div class="features-image">
                    <img src="{{asset('images/Performance.png')}}" alt="Career Dashboard">
                    <div class="floating-icon icon1">📊</div>
                    <div class="floating-icon icon2">📈</div>
                    <div class="floating-icon icon3">🎯</div>
                </div>
                <div class="features-text">
                    <h3>Career and Branding <span class="orange-text">Dashboard</span></h3>
                    <p>This feature facilitates the transition from education to work with a branding system that includes ratings and certifications, strengthening the user's credibility in the job market.</p>
                </div>
            </div>
        </div>
    </section>
    
    <section class="community-forum">
        <div class="container">
            <div class="features-content">
                <div class="features-text">
                    <h3>Community <span class="orange-text">Forum</span></h3>
                    <p>This feature builds a professional network that supports career and personal growth through discussions, collaborations, and shared challenges, opening up opportunities for joint projects and innovation.</p>
                </div>
                <div class="features-image">
                    <img src="{{asset('images/Group 92.png')}}" alt="Community Forum">
                    <div class="floating-icon icon1">💬</div>
                    <div class="floating-icon icon2">🤝</div>
                    <div class="floating-icon icon3">🌟</div>
                </div>
            </div>
        </div>
    </section>
    
    
    <section class="steps-points">
        <div class="container">
            <div class="features-content">
                <div class="features-image">
                    <img src="{{asset('images/Group 106.png')}}" alt="STEPS Points Interface">
                </div>
                <div class="features-text">
                    <h3>STEPS Points and Project <span class="orange-text">Certification</span></h3>
                    <p>Users can collect STEPS Points from learning activities and exchange them for premium modules, certifications, or attractive prizes. Project certifications provide official recognition, strengthen portfolios, and motivate consistent learning.</p>
                </div>
            </div>
            <div style="text-align: center; margin-top: 2rem;">
                <a href="{{ route('login') }}" class="get-points-btn">See more features</a>
            </div>
        </div>
    </section>
    
    <section class="testimonials">
        <div class="container">
            <div class="testimonial-content">
                <div class="testimonial-text">
                    <h3>What They Say?</h3>
                    <p>Langkah Kerja has got more than 100k positive ratings from our users around the world.</p>
                    <p>Some of the students and teachers were greatly helped by the Langkah Kerja.</p>
                    <p>Are you too? Please give your assessment</p>
                    <a href="{{ route('login') }}" class="write-review-btn">Write your assessment <span>→</span></a>
                </div>
                <div class="testimonial-cards">
                    <div class="testimonial-card active">
                        <div class="testimonial-card-content">
                            <div class="testimonial-image">
                                <img src="{{asset('images/smiling-woman-with-afro-posing-pink-sweater 1.png')}}" alt="Testimonial">
                            </div>
                            <div class="testimonial-text-content">
                                <p class="testimonial-text">"Thank you so much for your help. It's exactly what I've been looking for. You won't regret it. It really saves me time and effort. LangKerja is exactly what our business has been lacking."</p>
                                <div class="testimonial-author">
                                    <h4>Gloria Rose</h4>
                                    <div class="rating">
                                        ★★★★★ <span>12 reviews at Yelo</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="navigation-dots">
                        <span class="dot active"></span>
                        <span class="dot"></span>
                        <span class="dot"></span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="latest-news">
        <div class="container">
            <div class="latest-header">
                <h2>Lastest</h2>
                <h3>News and Resources</h3>
                <p>See the developments that have occurred to LearnEasers in the world</p>
            </div>
    
            <div class="news-content">
                <div class="news-main">
                    <div class="news-image">
                        <img src="{{asset('images/Group 40.png')}}" alt="Students studying">
                        <span class="tag">NEWS</span>
                    </div>
                    <div class="news-text">
                        <h4>Revolutionizing Education: Virtual Classes Redefining Learning Landscape</h4>
                        <p>As virtual classes become the new norm, this article explores their impact on traditional education models,</p>
                        <a href="{{ route('login') }}" class="read-more">Read more</a>
                    </div>
                </div>
    
                <div class="news-list">
                    <div class="news-item">
                        <div class="news-item-image">
                            <img src="{{asset('images/Rectangle 33.png')}}" alt="Virtual classroom">
                            <span class="tag">PRESS RELEASE</span>
                        </div>
                        <div class="news-item-content">
                            <h5>From Classroom to Clicks: How Virtual Classes Are Bridging Educational Gaps</h5>
                            <p>Discover how virtual classes are breaking down geographical barriers, ...</p>
                        </div>
                    </div>
    
                    <div class="news-item">
                        <div class="news-item-image">
                            <img src="{{asset('images/Rectangle 34.png')}}" alt="Online learning">
                            <span class="tag">NEWS</span>
                        </div>
                        <div class="news-item-content">
                            <h5>Elevating Learning: Virtual Classes Enriching Education</h5>
                            <p>This piece delves into the immersive experience of virtual classes, discussing</p>
                        </div>
                    </div>
    
                    <div class="news-item">
                        <div class="news-item-image">
                            <img src="{{asset('images/Rectangle 37.png')}}" alt="Virtual education">
                            <span class="tag">NEWS</span>
                        </div>
                        <div class="news-item-content">
                            <h5>Learning Unleashed: Virtual Classes Empowering Lifelong Education</h5>
                            <p>Explore the empowering impact of virtual classes in fostering continuous learning ..</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
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