<nav class="navbar">
    <div class="navbar-container">
      <div class="navbar-logo">
        <img src="<?php echo get_template_directory_uri(); ?>/resources/svg/logo.svg" alt="logo" class="logo">
        <span class="company-name">BrainUP</span>
      </div>
      <ul class="navbar-menu">
        <li><a href="#target-audience" class="smooth-goto">ДЛЯ КОГО КУРС</a></li>
        <li><a href="#command" class="smooth-goto">КОМАНДА</a></li>
        <li><a href="#program" class="smooth-goto">ПРОГРАММА</a></li>
      </ul>
      <div class="button-menu" onclick="toggleMenu()">
        <span class="line"></span>
        <span class="line"></span>
        <span class="line"></span>
      </div>

      <div class="hamburger-menu">
        <div class="menu-content">
          <a href="#target-audience" class="menu-item smooth-goto" onclick="toggleMenu()">ДЛЯ КОГО КУРС</a>
          <a href="#command" class="menu-item smooth-goto" onclick="toggleMenu()">КОМАНДА</a>
          <a href="#program" class="menu-item smooth-goto" onclick="toggleMenu()">ПРОГРАММА</a>
          <a href="#tariffs" class="menu-item smooth-goto menu-item-inscribed" onclick="toggleMenu()">ЗАПИСАТЬСЯ</a>
          <div class="close-menu" onclick="toggleMenu()">&#10005;</div>
        </div>
      </div>
    </div>
</nav>