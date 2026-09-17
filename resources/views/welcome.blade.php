<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marry | Aspiring Developer Portfolio</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Playfair+Display:ital,wght@0,600;1,400&display=swap" rel="stylesheet">
    
    <style>
        :root {
            --lavender-primary: #7C5CFC;
            --lavender-soft: #F0EDFF;
            --lavender-dark: #2E2559;
            --accent-glow: rgba(124, 92, 252, 0.15);
            --text-main: #2D3748;
            --text-muted: #718096;
            --bg-body: #FAF9FE;
            --white: #FFFFFF;
            --card-shadow: 0 10px 30px -5px rgba(124, 92, 252, 0.08);
            --transition-smooth: all 0.35s cubic-bezier(0.4, 0, 0.2, 1);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
            scroll-behavior: smooth;
        }

        body {
            background-color: var(--bg-body);
            color: var(--text-main);
            line-height: 1.7;
            overflow-x: hidden;
        }

        /* NAVIGATION */
        nav {
            position: fixed;
            top: 0;
            width: 100%;
            background: rgba(255, 255, 255, 0.85);
            backdrop-filter: blur(12px);
            padding: 1.2rem 8%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            z-index: 1000;
            border-bottom: 1px solid rgba(124, 92, 252, 0.08);
        }

        .logo {
            font-family: 'Playfair Display', serif;
            font-size: 1.8rem;
            font-weight: 600;
            color: var(--lavender-dark);
            text-decoration: none;
            letter-spacing: -0.5px;
        }

        .nav-links {
            display: flex;
            gap: 2.5rem;
        }

        .nav-links a {
            color: var(--text-main);
            text-decoration: none;
            font-size: 0.95rem;
            font-weight: 500;
            transition: var(--transition-smooth);
            position: relative;
        }

        .nav-links a::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: -4px;
            left: 0;
            background-color: var(--lavender-primary);
            transition: var(--transition-smooth);
        }

        .nav-links a:hover::after {
            width: 100%;
        }

        .nav-links a:hover {
            color: var(--lavender-primary);
        }

        /* SECTIONS COMMON */
        section {
            padding: 7rem 8% 4rem;
            max-width: 1200px;
            margin: 0 auto;
        }

        .section-header {
            text-align: center;
            margin-bottom: 4rem;
        }

        .section-tag {
            text-transform: uppercase;
            font-size: 0.8rem;
            font-weight: 700;
            letter-spacing: 2px;
            color: var(--lavender-primary);
            margin-bottom: 0.5rem;
            display: block;
        }

        .section-header h2 {
            font-family: 'Playfair Display', serif;
            font-size: 2.5rem;
            color: var(--lavender-dark);
            font-weight: 600;
        }

        /* HOME / HERO SECTION */
        #home {
            min-height: 90vh;
            display: grid;
            grid-template-columns: 1.2fr 0.8fr;
            align-items: center;
            gap: 2rem;
            padding-top: 9rem;
        }

        .hero-text .greeting {
            font-size: 1.1rem;
            color: var(--lavender-primary);
            font-weight: 600;
            margin-bottom: 0.5rem;
        }

        .hero-text h1 {
            font-family: 'Playfair Display', serif;
            font-size: 4rem;
            line-height: 1.15;
            color: var(--lavender-dark);
            margin-bottom: 1rem;
        }

        .hero-text .subtitle {
            font-size: 1.2rem;
            color: var(--text-muted);
            margin-bottom: 1.5rem;
            font-weight: 400;
        }

        .hero-text .subtitle strong {
            color: var(--lavender-dark);
            font-weight: 600;
        }

        .hero-desc {
            font-size: 1.05rem;
            color: var(--text-muted);
            margin-bottom: 2.5rem;
            max-width: 540px;
        }

        .cta-group {
            display: flex;
            gap: 1rem;
            align-items: center;
        }

        .btn-primary {
            padding: 0.9rem 2rem;
            background: var(--lavender-primary);
            color: var(--white);
            border-radius: 30px;
            text-decoration: none;
            font-weight: 500;
            box-shadow: 0 4px 15px rgba(124, 92, 252, 0.3);
            transition: var(--transition-smooth);
        }

        .btn-primary:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(124, 92, 252, 0.4);
        }

        .btn-secondary {
            padding: 0.9rem 2rem;
            border: 1px solid rgba(124, 92, 252, 0.3);
            color: var(--lavender-dark);
            border-radius: 30px;
            text-decoration: none;
            font-weight: 500;
            transition: var(--transition-smooth);
            background: var(--white);
        }

        .btn-secondary:hover {
            background: var(--lavender-soft);
            transform: translateY(-3px);
        }

        .hero-image {
            display: flex;
            justify-content: center;
            position: relative;
        }

        .avatar-frame {
            width: 320px;
            height: 320px;
            border-radius: 30% 70% 70% 30% / 30% 30% 70% 70%;
            overflow: hidden;
            box-shadow: var(--card-shadow);
            animation: morph 8s ease-in-out infinite;
            border: 4px solid var(--lavender-soft);
        }

        .avatar-frame img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        @keyframes morph {
            0% { border-radius: 30% 70% 70% 30% / 30% 30% 70% 70%; }
            50% { border-radius: 60% 40% 30% 70% / 60% 30% 70% 40%; }
            100% { border-radius: 30% 70% 70% 30% / 30% 30% 70% 70%; }
        }

        /* ABOUT SECTION */
        .about-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 2rem;
            align-items: stretch;
        }

        .card {
            background: var(--white);
            border-radius: 16px;
            padding: 2.5rem;
            box-shadow: var(--card-shadow);
            border: 1px solid rgba(124, 92, 252, 0.06);
            transition: var(--transition-smooth);
        }

        .card:hover {
            transform: translateY(-5px);
        }

        .about-main p {
            margin-bottom: 1.2rem;
            color: var(--text-main);
        }

        .highlights-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 1rem;
        }

        .highlight-item {
            background: var(--lavender-soft);
            padding: 1.5rem;
            border-radius: 12px;
            border-left: 4px solid var(--lavender-primary);
        }

        .highlight-item h3 {
            font-size: 1.5rem;
            color: var(--lavender-dark);
            font-weight: 700;
        }

        .highlight-item p {
            font-size: 0.85rem;
            color: var(--text-muted);
            margin: 0;
        }

        /* SKILLS SECTION */
        .skills-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(160px, 1fr));
            gap: 1.2rem;
        }

        .skill-card {
            background: var(--white);
            padding: 1.8rem 1rem;
            border-radius: 12px;
            text-align: center;
            box-shadow: var(--card-shadow);
            border: 1px solid rgba(124, 92, 252, 0.05);
            transition: var(--transition-smooth);
        }

        .skill-card:hover {
            transform: translateY(-5px);
            border-color: var(--lavender-primary);
            background: var(--white);
        }

        .skill-card span {
            display: block;
            font-weight: 600;
            color: var(--lavender-dark);
            margin-top: 0.5rem;
        }

        .skill-level {
            font-size: 0.75rem;
            color: var(--text-muted);
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        /* CONTACT SECTION */
        .contact-container {
            background: linear-gradient(135deg, var(--lavender-dark), #1E173E);
            color: var(--white);
            border-radius: 24px;
            padding: 4rem 3rem;
            text-align: center;
            box-shadow: 0 20px 40px rgba(46, 37, 89, 0.2);
        }

        .contact-container h2 {
            font-family: 'Playfair Display', serif;
            font-size: 2.2rem;
            margin-bottom: 1rem;
        }

        .contact-container p {
            color: rgba(255, 255, 255, 0.7);
            max-width: 500px;
            margin: 0 auto 2.5rem;
        }

        .contact-links {
            display: flex;
            justify-content: center;
            gap: 2rem;
            flex-wrap: wrap;
        }

        .contact-pill {
            display: flex;
            align-items: center;
            gap: 0.8rem;
            background: rgba(255, 255, 255, 0.08);
            padding: 0.8rem 1.8rem;
            border-radius: 40px;
            backdrop-filter: blur(5px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            color: var(--white);
            text-decoration: none;
            transition: var(--transition-smooth);
        }

        .contact-pill:hover {
            background: var(--white);
            color: var(--lavender-dark);
            transform: translateY(-3px);
        }

        /* FOOTER */
        footer {
            text-align: center;
            padding: 2.5rem;
            color: var(--text-muted);
            font-size: 0.85rem;
            border-top: 1px solid rgba(124, 92, 252, 0.08);
            margin-top: 3rem;
        }

        /* RESPONSIVE DESIGN */
        @media (max-width: 900px) {
            #home {
                grid-template-columns: 1fr;
                text-align: center;
                padding-top: 7rem;
            }

            .hero-desc {
                margin-left: auto;
                margin-right: auto;
            }

            .cta-group {
                justify-content: center;
            }

            .about-grid {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 600px) {
            .hero-text h1 { font-size: 2.8rem; }
            .nav-links { display: none; }
            .contact-container { padding: 2.5rem 1.5rem; }
        }
    </style>
</head>
<body>

    <!-- Navigation -->
    <nav>
        <a href="#home" class="logo">M</a>
        <div class="nav-links">
            <a href="#home">Home</a>
            <a href="#about">About</a>
            <a href="#skills">Skills</a>
            <a href="#contact">Contact</a>
        </div>
    </nav>

    <!-- Hero / Home Section -->
    <section id="home">
        <div class="hero-text">
            <h1>Hi, I'm RY</h1>
            <p class="subtitle">Aspiring Web Developer & <strong>BSIT Student at CCDI</strong></p>
            <p class="hero-desc">
                Building a solid foundation in web development with curiosity, humility, and persistence. Dedicated to growing every day and turning ambition into reality.
            </p>
            <div class="cta-group">
                <a href="#about" class="btn-primary">My Journey</a>
                <a href="#contact" class="btn-secondary">Let's Connect</a>
            </div>
        </div>

        <div class="hero-image">
            <div class="avatar-frame">
                <img src="{{ asset('images/MARRY.jpg') }}" alt="Marry">
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about">
        <div class="section-header">
            <span class="section-tag">About Me</span>
            <h2>Driven by Growth & Resilience</h2>
        </div>

        <div class="about-grid">
            <div class="card about-main">
                <p>
                    I am currently pursuing a degree in <strong>Bachelor of Science in Information Technology (BSIT)</strong> at <strong>CCDI</strong>, located in Albay, Bicol.
                </p>
                <p>
                    I strongly believe that taking things <strong>one step at a time is a huge help</strong>—every small effort adds up to meaningful progress. This mindset keeps me motivated to keep learning and pushing forward every single day.
                </p>
                <p>
                    When given the opportunity to join a team, <strong>I will do my absolute best to fulfill and exceed expectations</strong>. I thrive under pressure, adapt quickly to new challenges, and remain committed to delivering quality work no matter the difficulty.
                </p>
            </div>

            <div class="highlights-grid">
                <div class="highlight-item card">
                    <h3>Step by Step</h3>
                    <p>Steady daily learning and growth</p>
                </div>
                <div class="highlight-item card">
                    <h3>Resilient</h3>
                    <p>Thrives under pressure</p>
                </div>
                <div class="highlight-item card">
                    <h3>Dedicated</h3>
                    <p>Committed to fulfilling expectations</p>
                </div>
                <div class="highlight-item card">
                    <h3>Goal-Oriented</h3>
                    <p>Striving for excellence as a future developer</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Skills Section -->
    <section id="skills">
        <div class="section-header">
            <span class="section-tag">Capabilities</span>
            <h2>Humble Roots, Confident Skills</h2>
        </div>

        <div class="skills-grid">
            <div class="skill-card">
                <span>HTML5</span>
                <span class="skill-level">Semantic Structure</span>
            </div>
            <div class="skill-card">
                <span>CSS3</span>
                <span class="skill-level">Responsive Design</span>
            </div>
            <div class="skill-card">
                <span>JavaScript</span>
                <span class="skill-level">Interactivity Basics</span>
            </div>
            <div class="skill-card">
                <span>PHP</span>
                <span class="skill-level">Backend Logic</span>
            </div>
            <div class="skill-card">
                <span>Laravel</span>
                <span class="skill-level">Framework Essentials</span>
            </div>
            <div class="skill-card">
                <span>MySQL</span>
                <span class="skill-level">Database Management</span>
            </div>
            <div class="skill-card">
                <span>Git & GitHub</span>
                <span class="skill-level">Version Control</span>
            </div>
            <div class="skill-card">
                <span>VS Code</span>
                <span class="skill-level">Primary Environment</span>
            </div>
            <div class="skill-card">
                <span>Problem Solving</span>
                <span class="skill-level">Adaptability & Logic</span>
            </div>
            <div class="skill-card">
                <span>Work Under Pressure</span>
                <span class="skill-level">Reliability & Grit</span>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact">
        <div class="contact-container">
            <h2>Let's Connect & Work Together</h2>
            <p>I am eager to learn, contribute, and take on new challenges. Feel free to reach out via email or phone!</p>
            
            <div class="contact-links">
                <a href="mailto:marrydawat735@gmail.com" class="contact-pill">
                    <span>📧</span>
                    <span>marrydawat735@gmail.com</span>
                </a>
                <a href="tel:09070060359" class="contact-pill">
                    <span>📞</span>
                    <span>09070060359</span>
                </a>
                <div class="contact-pill">
                    <span>📍</span>
                    <span>Albay, Bicol, Philippines</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <p>&copy; 2026 Marry. <br>ONE STEP AT A TIME.</br></p>
    </footer>

</body>
</html>