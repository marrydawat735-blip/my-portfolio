<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return <<<HTML
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marry Rose Dawat | Web Developer Portfolio</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,600;0,700;1,600&family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    
    <style>
        html {
            scroll-behavior: smooth;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Plus Jakarta Sans', sans-serif;
        }

        :root {
            --primary: #6b4c7a;
            --primary-hover: #563b63;
            --primary-light: #f5edf8;
            --dark: #1f1424;
            --card-bg: #ffffff;
            --gray: #524858;
            --gray-muted: #8c8292;
            --accent-border: #e2cce7;
            --gold-accent: #d4af37;
            --radius-lg: 24px;
            --radius-md: 16px;
            --transition-smooth: all 0.4s cubic-bezier(0.25, 1, 0.5, 1);
        }

        body {
            background-color: #fcf9fe;
            color: var(--dark);
            line-height: 1.7;
            overflow-x: hidden;
        }

        nav {
            position: fixed;
            top: 0;
            width: 100%;
            background: rgba(252, 249, 254, 0.85);
            backdrop-filter: blur(12px);
            padding: 1.1rem 8%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            z-index: 1000;
            border-bottom: 1px solid rgba(226, 204, 231, 0.5);
            transition: var(--transition-smooth);
        }

        .logo-circle {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background: linear-gradient(135deg, var(--primary), #8f67a2);
            border: 2px solid var(--accent-border);
            display: flex;
            align-items: center;
            justify-content: center;
            color: #ffffff;
            font-family: 'Cormorant Garamond', serif;
            font-weight: 700;
            font-size: 1.25rem;
            letter-spacing: 1.5px;
            box-shadow: 0 6px 16px rgba(107, 76, 122, 0.25);
            transition: var(--transition-smooth);
        }

        .logo-circle:hover {
            transform: scale(1.05);
        }

        .nav-links {
            display: flex;
            gap: 2.5rem;
        }

        .nav-links a {
            text-decoration: none;
            color: var(--gray);
            font-size: 0.95rem;
            font-weight: 600;
            position: relative;
            padding-bottom: 4px;
            transition: var(--transition-smooth);
        }

        .nav-links a::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: 0;
            left: 0;
            background-color: var(--primary);
            transition: var(--transition-smooth);
        }

        .nav-links a:hover, 
        .nav-links a.active {
            color: var(--primary);
        }

        .nav-links a:hover::after, 
        .nav-links a.active::after {
            width: 100%;
        }

        section {
            padding: 8rem 8% 5rem;
            max-width: 1200px;
            margin: 0 auto;
        }

        #home {
            min-height: 100vh;
            display: grid;
            grid-template-columns: 1.2fr 0.8fr;
            align-items: center;
            gap: 4rem;
            padding-top: 6rem;
        }

        .hero-badge {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            background: var(--primary-light);
            color: var(--primary);
            padding: 0.4rem 1.1rem;
            border-radius: 50px;
            font-size: 0.85rem;
            font-weight: 700;
            letter-spacing: 0.5px;
            text-transform: uppercase;
            margin-bottom: 1.2rem;
            border: 1px solid var(--accent-border);
        }

        h1, h2, h3 {
            font-family: 'Cormorant Garamond', serif;
        }

        h1 {
            font-size: clamp(3rem, 5.5vw, 4.8rem);
            color: var(--dark);
            line-height: 1.1;
            margin-bottom: 1rem;
            font-weight: 700;
            letter-spacing: -0.5px;
        }

        h1 span {
            color: var(--primary);
            font-style: italic;
        }

        .subtitle {
            font-size: 1.35rem;
            color: var(--primary);
            font-weight: 600;
            margin-bottom: 1.2rem;
        }

        .description {
            font-size: 1.05rem;
            color: var(--gray);
            max-width: 580px;
            margin-bottom: 2.5rem;
            line-height: 1.8;
            font-weight: 500;
        }

        .btn-group {
            display: flex;
            gap: 1.2rem;
            flex-wrap: wrap;
        }

        .btn-primary {
            background: var(--primary);
            color: #ffffff;
            padding: 0.95rem 2.4rem;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 700;
            font-size: 0.95rem;
            box-shadow: 0 8px 25px rgba(107, 76, 122, 0.3);
            transition: var(--transition-smooth);
        }

        .btn-primary:hover {
            background: var(--primary-hover);
            transform: translateY(-3px);
            box-shadow: 0 12px 30px rgba(107, 76, 122, 0.4);
        }

        .btn-outline {
            border: 2px solid var(--primary);
            color: var(--primary);
            padding: 0.95rem 2.4rem;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 700;
            font-size: 0.95rem;
            transition: var(--transition-smooth);
        }

        .btn-outline:hover {
            background: var(--primary-light);
            transform: translateY(-3px);
        }
        
        .profile-container {
            display: flex;
            justify-content: center;
            position: relative;
        }

        .profile-card-wrapper {
            position: relative;
        }

        .profile-card-wrapper::before {
            content: '';
            position: absolute;
            inset: -15px;
            border-radius: 50%;
            background: linear-gradient(135deg, var(--accent-border), transparent);
            z-index: 0;
        }

        .profile-circle {
            position: relative;
            z-index: 1;
            width: 320px;
            height: 320px;
            border-radius: 50%;
            overflow: hidden;
            box-shadow: 0 20px 40px rgba(42, 29, 48, 0.15);
            border: 6px solid #ffffff;
        }

        .profile-circle img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: top center;
            transition: transform 0.6s cubic-bezier(0.25, 1, 0.5, 1);
        }

        .profile-circle:hover img {
            transform: scale(1.05);
        }

        .section-header {
            text-align: center;
            margin-bottom: 3.5rem;
        }

        h2 {
            font-size: 3rem;
            color: var(--dark);
            font-weight: 700;
            line-height: 1.2;
        }

        .section-subtitle {
            color: var(--gray-muted);
            font-size: 0.95rem;
            text-transform: uppercase;
            letter-spacing: 2px;
            font-weight: 700;
            margin-bottom: 0.5rem;
        }

        .content-card {
            background: var(--card-bg);
            padding: 3rem;
            border-radius: var(--radius-lg);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.03);
            border: 1px solid rgba(226, 204, 231, 0.4);
            margin-bottom: 2rem;
            transition: var(--transition-smooth);
        }

        .about-card h3 {
            font-size: 2.2rem;
            color: var(--primary);
            margin-bottom: 1.2rem;
        }

        .about-card p {
            color: var(--gray);
            font-size: 1.05rem;
            line-height: 1.9;
            margin-bottom: 1.2rem;
            font-weight: 500;
        }

        .about-card p:last-child {
            margin-bottom: 0;
        }

        .skills-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
            gap: 1.2rem;
            margin-top: 1.5rem;
        }

        .skill-item {
            background: var(--primary-light);
            color: var(--primary);
            padding: 1.2rem 1rem;
            border-radius: var(--radius-md);
            text-align: center;
            font-weight: 700;
            font-size: 0.95rem;
            border: 1px solid var(--accent-border);
            cursor: pointer;
            transition: var(--transition-smooth);
        }

        .skill-item:hover {
            transform: translateY(-6px);
            background: var(--primary);
            color: #ffffff;
            box-shadow: 0 10px 25px rgba(107, 76, 122, 0.3);
            border-color: var(--primary);
        }

        /* Contact Section */
        .contact-card {
            background: linear-gradient(135deg, #231629, #3d2647);
            color: #ffffff;
            border-radius: var(--radius-lg);
            padding: 4rem 2rem;
            text-align: center;
            box-shadow: 0 15px 35px rgba(35, 22, 41, 0.2);
        }

        .contact-card h2 {
            color: #ffffff;
            margin-bottom: 2.5rem;
        }

        .contact-details {
            display: flex;
            flex-direction: column;
            gap: 1.5rem;
            max-width: 600px;
            margin: 0 auto;
        }

        .contact-item {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 1rem;
            font-size: 1.05rem;
            font-weight: 500;
            background: rgba(255, 255, 255, 0.06);
            padding: 1rem 1.5rem;
            border-radius: 50px;
            border: 1px solid rgba(255, 255, 255, 0.1);
            transition: var(--transition-smooth);
        }

        .contact-item:hover {
            background: rgba(255, 255, 255, 0.12);
        }

        .contact-item a {
            color: #ffffff;
            text-decoration: none;
            transition: opacity 0.2s ease;
        }

        .contact-item a:hover {
            opacity: 0.8;
            text-decoration: underline;
        }

        /* Footer */
        footer {
            text-align: center;
            padding: 3rem 2rem;
            color: var(--gray-muted);
            font-size: 0.9rem;
            font-weight: 500;
            border-top: 1px solid rgba(226, 204, 231, 0.4);
        }

        /* Responsive Design */
        @media (max-width: 900px) {
            #home {
                grid-template-columns: 1fr;
                text-align: center;
                padding-top: 8rem;
            }

            .hero-content {
                display: flex;
                flex-direction: column;
                align-items: center;
            }

            .description {
                max-width: 100%;
            }

            .btn-group {
                justify-content: center;
            }

            .profile-container {
                order: -1;
            }

            .profile-circle {
                width: 240px;
                height: 240px;
            }

            .nav-links {
                display: none;
            }
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav>
        <div class="logo-circle">MRD</div>
        <div class="nav-links">
            <a href="#home" class="nav-item active">Home</a>
            <a href="#about" class="nav-item">About</a>
            <a href="#skills" class="nav-item">Skills</a>
            <a href="#contact" class="nav-item">Contact</a>
        </div>
    </nav>

    <!-- Home Section -->
    <section id="home">
        <div class="hero-content">
            <div class="hero-badge">Welcome to my space ✨</div>
            <h1>Marry Rose Dawat</h1>
            <p class="subtitle">Aspiring Web Developer & IT Student</p>
            <p class="description">
                A passionate BSIT student at CCDI crafting thoughtful digital experiences and building functional web applications — one line of code at a time.
            </p>
            <div class="btn-group">
                <a href="#about" class="btn-primary">Explore My Journey</a>
                <a href="#contact" class="btn-outline">Connect With Me</a>
            </div>
        </div>
        <div class="profile-container">
            <div class="profile-card-wrapper">
                <div class="profile-circle">
                    <img src="/images/MARRY.jpg" alt="Marry Rose Dawat Profile Picture">
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about">
        <div class="section-header">
            <p class="section-subtitle">Get To Know Me</p>
            <h2>About Me</h2>
        </div>
        <div class="content-card about-card">
            <h3>Hello! I'm RY</h3>
            <p>
                I am currently pursuing a <strong>Bachelor of Science in Information Technology at CCDI</strong>. My journey in tech is driven by curiosity, continuous growth, and an eagerness to embrace new challenges daily.
            </p>
            <p>
                I focus on <strong>front-end layouts and web interface design</strong>, transforming initial concepts into clean, user-friendly digital environments. There's something satisfying about seeing a blank screen turn into something meaningful, even if it's just a small step at a time.
            </p>
            <p>
                Guided by a belief in progress over perfection, I'm discovering what I can do — from writing my first line of code to designing simple pages. I'm still growing, still exploring, and still excited about what comes next.
            </p>
            <p>
                This portfolio is not expert-level, but a story of someone who's starting, trying, and never stopping to learn.
            </p>
        </div>
    </section>

    <!-- Skills Section -->
    <section id="skills">
        <div class="section-header">
            <p class="section-subtitle">My Capabilities</p>
            <h2>Technical & Soft Skills</h2>
        </div>
        <div class="content-card">
            <p style="text-align: center; color: var(--gray-muted); font-weight: 600;">
                Core competencies and tools I work with 
            </p>
            <div class="skills-grid">
                <div class="skill-item">HTML</div>
                <div class="skill-item">CSS</div>
                <div class="skill-item">Basic PHP</div>
                <div class="skill-item">Web Design</div>
                <div class="skill-item">UI/UX Basics</div>
                <div class="skill-item">Problem Solving</div>
                <div class="skill-item">Creative Thinking</div>
                <div class="skill-item">Team Collaboration</div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact">
        <div class="contact-card">
            <p class="section-subtitle" style="color: rgba(255,255,255,0.7);">Start A Conversation</p>
            <h2>Let's Connect</h2>
            <div class="contact-details">
                <div class="contact-item">
                    <span>📧</span>
                    <a href="mailto:marrydawat735@gmail.com">marrydawat735@gmail.com</a>
                </div>
                 <div class="contact-item">
                    <span>📞</span>
                    <span>09070060359</span>
                </div>
                <div class="contact-item">
                    <span>📍</span>
                    <span>P6 Parada, Buyo, Manito, Albay, Philippines</span>
                </div>
                <div class="contact-item">
                    <span>🎓</span>
                    <span>Computer Communication Development Institute</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <p>© 2026 Marry Rose Dawat.</p>
        <p style="margin-top: 0.4rem; color: var(--primary);">STILL LEARNING. ONE STEP AT A TIME ✨</p>
    </footer>

    <!-- Active Navigation Highlight & Smooth Scroll Script -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const sections = document.querySelectorAll('section');
            const navItems = document.querySelectorAll('.nav-item');

            const observerOptions = {
                root: null,
                rootMargin: '-20% 0px -70% 0px',
                threshold: 0
            };

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const currentId = entry.target.getAttribute('id');
                        navItems.forEach(item => {
                            item.classList.remove('active');
                            if (item.getAttribute('href') === `#\${currentId}`) {
                                item.classList.add('active');
                            }
                        });
                    }
                });
            }, observerOptions);

            sections.forEach(section => observer.observe(section));
        });
    </script>
</body>
</html>
HTML;
});