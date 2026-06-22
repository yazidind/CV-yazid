<?php
require_once __DIR__ . '/includes/helper.php';

$profile = read_json_file(__DIR__ . '/data/profile.json', []);
$skills = read_json_file(__DIR__ . '/data/skills.json', []);
$projects = read_json_file(__DIR__ . '/data/projects.json', []);
$experience = read_json_file(__DIR__ . '/data/experience.json', []);
$education = read_json_file(__DIR__ . '/data/education.json', []);
$certifications = read_json_file(__DIR__ . '/data/certifications.json', []);

$skillsByCategory = [];
foreach ($skills as $skill) {
    $skillsByCategory[$skill['category']][] = $skill;
}

$heroName = $profile['name'] ?? 'Your Name';
$heroTitle = $profile['title'] ?? 'Software Engineer';
$heroSubtitle = $profile['subtitle'] ?? 'Fullstack Developer';
$profileImage = 'assets/images/profile/profile.jpg';
$typedRoles = ['Software Engineer', 'Fullstack Developer', 'Cloud Engineer', 'AI Enthusiast'];
?>
<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php echo e($heroName); ?> | <?php echo e($heroTitle); ?></title>
  <meta name="description" content="Website CV dan portfolio pribadi <?php echo e($heroName); ?>, <?php echo e($heroTitle); ?>.">
  <meta property="og:title" content="<?php echo e($heroName); ?> | <?php echo e($heroTitle); ?>">
  <meta property="og:description" content="CV dan portfolio pribadi dengan proyek, skill, dan pengalaman.">
  <meta property="og:image" content="<?php echo e($profileImage); ?>">
  <meta property="og:type" content="website">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css">
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
  <header class="site-header">
    <div class="container nav-wrap">
      <a class="brand" href="#hero"><?php echo e($heroName); ?></a>
      <nav class="nav">
        <a href="#about">About</a>
        <a href="#skills">Skills</a>
        <a href="#experience">Experience</a>
        <a href="#portfolio">Portfolio</a>
        <a href="#contact">Contact</a>
      </nav>
      <button id="themeToggle" class="theme-toggle" type="button" aria-label="Toggle dark mode">
        <i class="fa-solid fa-moon"></i>
      </button>
    </div>
  </header>

  <main>
    <section id="hero" class="hero section">
      <div class="container hero-grid">
        <div class="hero-copy" data-aos="fade-up">
          <p class="eyebrow"><?php echo e($heroSubtitle); ?></p>
          <h1><?php echo e($heroName); ?></h1>
          <p class="title-line"><span id="typedRole"></span></p>
          <p class="lead"><?php echo e($profile['about'] ?? ''); ?></p>
          <div class="hero-actions">
            <a class="btn btn-primary" href="<?php echo e($profile['resume'] ?? '#'); ?>" target="_blank" rel="noopener">Download CV</a>
            <a class="btn btn-secondary" href="#contact">Contact</a>
          </div>
          <div class="hero-meta">
            <span><i class="fa-solid fa-location-dot"></i> <?php echo e($profile['location'] ?? ''); ?></span>
            <span><i class="fa-solid fa-envelope"></i> <?php echo e($profile['email'] ?? ''); ?></span>
          </div>
        </div>
        <div class="hero-image" data-aos="zoom-in">
          <div class="image-frame">
            <img src="<?php echo e($profileImage); ?>" alt="Foto profil <?php echo e($heroName); ?>" loading="eager">
          </div>
        </div>
      </div>
    </section>

    <section id="about" class="section">
      <div class="container" data-aos="fade-up">
        <h2>About Me</h2>
        <p class="section-lead"><?php echo e($profile['summary'] ?? ''); ?></p>
        <div class="about-grid">
          <div class="glass-card"><h3>Background</h3><p><?php echo e($profile['about'] ?? ''); ?></p></div>
          <div class="glass-card"><h3>Focus</h3><p><?php echo e($profile['focus'] ?? ''); ?></p></div>
          <div class="glass-card"><h3>Passion</h3><p><?php echo e($profile['passion'] ?? ''); ?></p></div>
        </div>
      </div>
    </section>

    <section id="skills" class="section alt">
      <div class="container" data-aos="fade-up">
        <h2>Skills</h2>
        <div class="skills-grid">
          <?php foreach ($skillsByCategory as $category => $items): ?>
            <div class="glass-card">
              <h3><?php echo e($category); ?></h3>
              <div class="skill-list">
                <?php foreach ($items as $item): ?>
                  <span><?php echo e($item['name']); ?> <small><?php echo e($item['level']); ?></small></span>
                <?php endforeach; ?>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </section>

    <section id="experience" class="section">
      <div class="container" data-aos="fade-up">
        <h2>Experience</h2>
        <div class="timeline">
          <?php foreach ($experience as $item): ?>
            <article class="timeline-item glass-card">
              <div class="timeline-head">
                <h3><?php echo e($item['role']); ?></h3>
                <span><?php echo e($item['period']); ?></span>
              </div>
              <p class="company"><?php echo e($item['company']); ?></p>
              <ul>
                <?php foreach ($item['points'] as $point): ?>
                  <li><?php echo e($point); ?></li>
                <?php endforeach; ?>
              </ul>
            </article>
          <?php endforeach; ?>
        </div>
      </div>
    </section>

    <section id="portfolio" class="section alt">
      <div class="container" data-aos="fade-up">
        <h2>Portfolio</h2>
        <div class="portfolio-grid">
          <?php foreach ($projects as $project): ?>
            <article class="project-card glass-card">
              <div class="project-thumb"></div>
              <h3><?php echo e($project['title']); ?></h3>
              <p><?php echo e($project['description']); ?></p>
              <div class="tags">
                <?php foreach ($project['tech'] as $tech): ?>
                  <span><?php echo e($tech); ?></span>
                <?php endforeach; ?>
              </div>
              <div class="project-links">
                <a href="<?php echo e($project['demo']); ?>" target="_blank" rel="noopener">Demo</a>
                <a href="<?php echo e($project['github']); ?>" target="_blank" rel="noopener">GitHub</a>
              </div>
            </article>
          <?php endforeach; ?>
        </div>
      </div>
    </section>

    <section id="education" class="section">
      <div class="container" data-aos="fade-up">
        <h2>Education</h2>
        <div class="timeline">
          <?php foreach ($education as $item): ?>
            <article class="timeline-item glass-card">
              <div class="timeline-head">
                <h3><?php echo e($item['school']); ?></h3>
                <span><?php echo e($item['period']); ?></span>
              </div>
              <p class="company"><?php echo e($item['degree']); ?></p>
            </article>
          <?php endforeach; ?>
        </div>
      </div>
    </section>

    <section id="certifications" class="section alt">
      <div class="container" data-aos="fade-up">
        <h2>Certifications</h2>
        <div class="cert-grid">
          <?php foreach ($certifications as $item): ?>
            <div class="glass-card cert-card">
              <h3><?php echo e($item['name']); ?></h3>
              <p><?php echo e($item['issuer']); ?> - <?php echo e($item['year']); ?></p>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </section>

    <section id="contact" class="section">
      <div class="container" data-aos="fade-up">
        <h2>Contact</h2>
        <div class="contact-grid">
          <a class="contact-card glass-card" href="mailto:<?php echo e($profile['email'] ?? ''); ?>">
            <i class="fa-solid fa-envelope"></i>
            <span>Email</span>
            <strong><?php echo e($profile['email'] ?? ''); ?></strong>
          </a>
          <a class="contact-card glass-card" href="<?php echo e($profile['linkedin'] ?? '#'); ?>" target="_blank" rel="noopener">
            <i class="fa-brands fa-linkedin"></i>
            <span>LinkedIn</span>
            <strong>Profile</strong>
          </a>
          <a class="contact-card glass-card" href="<?php echo e($profile['github'] ?? '#'); ?>" target="_blank" rel="noopener">
            <i class="fa-brands fa-github"></i>
            <span>GitHub</span>
            <strong>Repository</strong>
          </a>
          <a class="contact-card glass-card" href="<?php echo e($profile['whatsapp'] ?? '#'); ?>" target="_blank" rel="noopener">
            <i class="fa-brands fa-whatsapp"></i>
            <span>WhatsApp</span>
            <strong>Chat</strong>
          </a>
        </div>
      </div>
    </section>
  </main>

  <script>
    window.typedRoles = <?php echo json_encode($typedRoles, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE); ?>;
  </script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script src="assets/js/app.js"></script>
</body>
</html>