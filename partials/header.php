
<header class='header'>
  <div class='logo'>
    <a href="index.php"> <img src="./img/logo/logo.png" alt="logo"></a>
  </div>
  <div>
    <nav class="navigation">
      <div class="nav-menu">
        <li><a href="about.php">About</a></li>
        <li><a href="portfolio.php">Portfolio</a></li>
        <li><a href="mailto:yuan127775@gmail.com">Contacts</a></li>
      </div>
      <div class="resume">
    <a href="../resume/AlicePeng_Resume.pdf" target="_blank">Resume</a>
  </div>
    </nav>
  </div>

            <div class="mobile-menu">
                <div class="bar"></div>
                <div class="bar"></div>
                <div class="bar"></div>
            </div>

        <script>
        
            const menuButton = document.querySelector('.mobile-menu');
            const nav = document.querySelector('.navigation');

            menuButton.addEventListener('click', function() {
            nav.classList.toggle('showMenu');
            menuButton.classList.toggle('active');
            });

        </script>

</header>
