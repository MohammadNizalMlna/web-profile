<nav class="navbar">

    <!-- LOGO (KLIK KE HOME) -->
    <a href="/" class="logo">
        <span class="badge">MNM</span>
        <span class="name">Mohammad Nizal Maulana</span>
    </a>

    <!-- MENU -->
    <div class="menu">
        <a href="/" class="{{ request()->is('/') ? 'active' : '' }}">Home</a>
        <a href="/about" class="{{ request()->is('about') ? 'active' : '' }}">About Me</a>
        <a href="/project" class="{{ request()->is('project') ? 'active' : '' }}">Project</a>
        <a href="/contact" class="{{ request()->is('contact') ? 'active' : '' }}">Contact</a>
    </div>

    <!-- ACTION -->
    <div class="actions">
        <!-- GitHub -->
        <a href="https://github.com/MohammadNizalMlna" target="_blank" class="icon">
            <i class="fab fa-github"></i>
        </a>

        <!-- Dark Mode -->
        <button onclick="toggleTheme()" class="icon">
            <i id="themeIcon" class="fas fa-moon"></i>
        </button>
    </div>

</nav>