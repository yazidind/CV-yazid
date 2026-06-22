(function () {
  const root = document.documentElement;
  const toggle = document.getElementById('themeToggle');
  const typed = document.getElementById('typedRole');
  const roles = window.typedRoles || [];

  const savedTheme = localStorage.getItem('theme');
  const prefersDark = window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches;
  const theme = savedTheme || (prefersDark ? 'dark' : 'light');
  root.setAttribute('data-theme', theme);

  function syncIcon() {
    const dark = root.getAttribute('data-theme') === 'dark';
    toggle.innerHTML = dark ? '<i class="fa-solid fa-sun"></i>' : '<i class="fa-solid fa-moon"></i>';
  }

  toggle.addEventListener('click', () => {
    const next = root.getAttribute('data-theme') === 'dark' ? 'light' : 'dark';
    root.setAttribute('data-theme', next);
    localStorage.setItem('theme', next);
    syncIcon();
  });

  syncIcon();

  if (window.AOS) {
    AOS.init({ duration: 800, once: true, offset: 80 });
  }

  if (!typed || !roles.length) return;

  let roleIndex = 0;
  let charIndex = 0;
  let deleting = false;

  function tick() {
    const current = roles[roleIndex];
    typed.textContent = current.slice(0, charIndex);

    if (!deleting && charIndex < current.length) {
      charIndex += 1;
    } else if (deleting && charIndex > 0) {
      charIndex -= 1;
    } else {
      deleting = !deleting;
      if (!deleting) {
        roleIndex = (roleIndex + 1) % roles.length;
      }
    }

    setTimeout(tick, deleting ? 45 : 75);
  }

  tick();
})();