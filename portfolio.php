<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Alice Peng's Portfolio showcases a wide range of web development projects, including UI/UX design, WordPress, and React development. Explore innovative designs and solutions.">
    <meta name="keywords" content="Alice Peng, Portfolio, Web Development, UI/UX Design, WordPress, React, HTML, CSS, JavaScript">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dist/app.css">
    <link rel="icon" type="image/x-icon" href="/img/logo/icon.png">
    <script src="https://kit.fontawesome.com/92a4d8c871.js" crossorigin="anonymous"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.9.6/lottie.min.js"></script>
    
    <!-- Open Graph Meta Tags -->
        <meta property="og:title" content="Alice Peng - Portfolio">
        <meta property="og:description" content="Hello! I'm Alice Peng,  a passionate front-end developer and UI/UX designer based in Vancouver. here is my portfolio">
        <meta property="og:image" content="https://alicepeng.com/img/project/project1.png">
        <meta property="og:url" content="https://alicepeng.com/portfolio.php">
        <meta property="og:type" content="website">
        <meta property="fb:app_id" content="yuan.zi.3133">

    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Alice Peng - Portfolio">
    <meta name="twitter:description" content="Hello! I'm Alice Peng, a passionate front-end developer and UI/UX designer based in Vancouver. Here is my portfolio">
    <meta name="twitter:image" content="https://alicepeng.com/img/project/project1.png">
    <meta name="twitter:url" content="https://alicepeng.com/portfolio.php">
    <meta name="twitter:creator" content="@775_Yu">

    <title> Alice's Portfolio</title>
</head>
<body>
    
    <!----------------- header ------------------>
    <?php require_once("partials/header.php") ?>
    <!------------------------------------------->
 
    <main class='container'>
    <div class='portfolioTitle'>
        <p>Explore my latest portfolio of web development projects<br>
         covering a wide range of areas from HTML , CSS, JavaScript,<br>
          Visual Studio Code, UI/UX animation to WordPress and React.</p>
          <div id="lottie-animation"></div>

    </div>
    
    <div class="filter-bar">
    <button class="filter-btn" data-filter="all">All</button>
    <button class="filter-btn" data-filter="website">Website</button>
    <button class="filter-btn" data-filter="mobileApp">App</button>
    <button class="filter-btn" data-filter="design">Design</button>
    <button class="filter-btn" data-filter="develop">Develop</button>
</div>

<div class='allProject container grid'>
    <div class='project grid col-12 col-4-lg' data-aos="fade-up" data-category="website develop design">
        <div class='projectImg col-12'><img src='./img/project/project1.png' alt="Little Fish Cares website"></div>
        <div class='projectInfo col-12'>
            <h5>Little Fish Cares Animal Adoption Website</h5>
            <p>Little Fish Cares is a pet adoption organization in Vancouver. The purpose of this project is to demonstrate the use of HTML, CSS, JavaScript combined with other JavaScript libraries and jQuery plugins to complete web pages.</p>
            <div class='projectCardBottom'>
                <div class='toolC'>
                    <span class='tool'><img src='./img/skill/coding/HTML.png' alt='HTML Logo'/></span>
                    <span class='tool'><img src='./img/skill/coding/CSS.png' alt='CSS Logo'/></span>
                    <span class='tool'><img src='./img/skill/coding/Java Script.png' alt='JavaScript Logo'/></span>
                    <span class='tool'><img src='./img/skill/coding/Visual Studio Code.png' alt='Visual Studio Code Logo'/></span>
                    <span class='tool'><img src='./img/skill/design/Figma.png' alt='Figma Logo'/></span>
                    <span class='tool'><img src='./img/skill/design/Illustrator.png' alt='Illustrator Logo'/></span>
                </div>
                <a href='project1.php' class='viewBtn1 btn2'>View</a>
            </div>
        </div>
    </div>

    <div class='project grid col-12 col-4-lg' data-aos="fade-up" data-category="website develop design">
        <div class='projectImg col-12'><img src='./img/project/project2.png' alt="Lumina online shopping Website"></div>
        <div class='projectInfo col-12'>
            <h5>Lumina Online Shopping Website</h5>
            <p>Lumina is a candle shop located in Vancouver. This project required our team to design and develop their online shopping website. The entire webpage was designed using Figma to create wireframes and developed in HTML, CSS, JavaScript, and PHP.</p>
            <div class='projectCardBottom'>
                <div class='toolC'>
                    <span class='tool'><img src='./img/skill/coding/HTML.png' alt='HTML Logo'/></span>
                    <span class='tool'><img src='./img/skill/coding/PHP.png' alt='PHP Logo'/></span>
                    <span class='tool'><img src='./img/skill/coding/CSS.png' alt='CSS Logo'/></span>
                    <span class='tool'><img src='./img/skill/coding/Java Script.png' alt='JavaScript Logo'/></span>
                    <span class='tool'><img src='./img/skill/coding/MySQL.png' alt='MySQL Logo'/></span>
                    <span class='tool'><img src='./img/skill/coding/Visual Studio Code.png' alt='Visual Studio Code Logo'/></span>
                    <span class='tool'><img src='./img/skill/design/Figma.png' alt='Figma Logo'/></span>
                    <span class='tool'><img src='./img/skill/design/Illustrator.png' alt='Illustrator Logo'/></span>
                </div>
                <a href='project2.php' class='viewBtn1 btn2'>View</a>
            </div>
        </div>
    </div>

    <div class='project grid col-12 col-4-lg' data-aos="fade-up" data-category="website develop design">
        <div class='projectImg col-12'><img src='./img/project/project3.png' alt="Whac-A-Mole Website Game"></div>
        <div class='projectInfo col-12'>
            <h5>Whac-A-Mole Website Game</h5>
            <p>This is a small web game where the player uses the mouse to control the hammer and knock the mole to get points. Cute graphics with background music and sound effects make the game more interesting!</p>
            <div class='projectCardBottom'>
                <div class='toolC'>
                    <span class='tool'><img src='./img/skill/coding/HTML.png' alt='HTML Logo'/></span>
                    <span class='tool'><img src='./img/skill/coding/CSS.png' alt='CSS Logo'/></span>
                    <span class='tool'><img src='./img/skill/coding/Visual Studio Code.png' alt='Visual Studio Code Logo'/></span>
                    <span class='tool'><img src='./img/skill/design/Figma.png' alt='Figma Logo'/></span>
                    <span class='tool'><img src='./img/skill/design/Illustrator.png' alt='Illustrator Logo'/></span>
                </div>
                <a href='project3.php' class='viewBtn1 btn2'>View</a>
            </div>
        </div>
    </div>

    <div class='project grid col-12 col-4-lg' data-aos="fade-up" data-category=" design mobileApp">
        <div class='projectImg col-12'><img src='./img/project/project4.png' alt="October shopping app design"></div>
        <div class='projectInfo col-12'>
            <h5>October Shopping App Design</h5>
            <p>October is an original accessories company. In this project, I designed an app for them and created wireframes and interaction models using Figma, followed by user testing using Maze. The model was modified based on the test results.</p>
            <div class='projectCardBottom'>
                <div class='toolC'>
                    <span class='tool'><img src='./img/skill/design/Figma.png' alt='Figma Logo'/></span>
                    <span class='tool'><img src='./img/skill/design/Photoshop.png' alt='Photoshop Logo'/></span>
                    <span class='tool'><img src='./img/skill/design/Illustrator.png' alt='Illustrator Logo'/></span>
                </div>
                <a href='project4.php' class='viewBtn1 btn2'>View</a>
            </div>
        </div>
    </div>

    <div class='project grid col-12 col-4-lg' data-aos="fade-up" data-category="mobileApp develop">
        <div class='projectImg col-12'><img src='./img/project/project5.png' alt="Narra Furniture App"></div>
        <div class='projectInfo col-12'>
            <h5>Narra Furniture App</h5>
            <p>Narra is a furniture company. In this team project, we designed and developed an app and website for them.</p>
            <div class='projectCardBottom'>
                <div class='toolC'>
                    <span class='tool'><img src='./img/skill/coding/HTML.png' alt='HTML Logo'/></span>
                    <span class='tool'><img src='./img/skill/coding/CSS.png' alt='CSS Logo'/></span>
                    <span class='tool'><img src='./img/skill/coding/React.js.png' alt='React Logo'/></span>
                    <span class='tool'><img src='./img/skill/coding/Expo.png' alt='Expo Logo'/></span>
                    <span class='tool'><img src='./img/skill/coding/Visual Studio Code.png' alt='Visual Studio Code Logo'/></span>
                    <span class='tool'><img src='./img/skill/coding/Android Studio.png' alt='Android Studio Logo'/></span>
                </div>
                <a href='project5.php' class='viewBtn1 btn2'>View</a>
            </div>
        </div>
    </div>

    <div class='project grid col-12 col-4-lg' data-aos="fade-up" data-category="mobileApp develop">
        <div class='projectImg col-12'><img src='./img/project/project6.png' alt="Pokedex App"></div>
        <div class='projectInfo col-12'>
            <h5>Pokedex</h5>
            <p>In this project, I fetched data from the Poke API and displayed it on the app.</p>
            <div class='projectCardBottom'>
                <div class='toolC'>
                    <span class='tool'><img src='./img/skill/coding/React.js.png' alt='React Logo'/></span>
                    <span class='tool'><img src='./img/skill/coding/Expo.png' alt='Expo Logo'/></span>
                    <span class='tool'><img src='./img/skill/coding/Visual Studio Code.png' alt='Visual Studio Code Logo'/></span>
                    <span class='tool'><img src='./img/skill/coding/Android Studio.png' alt='Android Studio Logo'/></span>
                </div>
                <a href='project6.php' class='viewBtn1 btn2'>View</a>
            </div>
        </div>
    </div>
</div>

    </div>
    
    </main>
    <div class='content-wrap'></div>
    <!----------------- footer ------------------>
    <?php require_once("partials/footer.php") ?>
    <!------------------------------------------->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src='./js/app.js'></script>
    <script>
        var animation = lottie.loadAnimation({
        container: document.getElementById('lottie-animation'), // 容器 ID
        renderer: 'svg', // 渲染器类型，可选 'svg' 或 'canvas'
        loop: true, // 是否循环播放
        autoplay: true, // 是否自动播放
        path: 'https://lottie.host/50b088fe-b6b6-47b4-88f6-5d532aea5086/2a3vEVbGKX.json' // Lottie 文件的路径
    });

    
    document.addEventListener('DOMContentLoaded', () => {
    const filterButtons = document.querySelectorAll('.filter-btn');
    const projects = document.querySelectorAll('.project');

    filterButtons.forEach(button => {
        button.addEventListener('click', () => {
            // Remove active class from all buttons
            filterButtons.forEach(btn => btn.classList.remove('active'));
            // Add active class to clicked button
            button.classList.add('active');

            const filter = button.getAttribute('data-filter');

            projects.forEach(project => {
                if (filter === 'all' || project.getAttribute('data-category').includes(filter)) {
                    project.style.display = 'grid'; // Show project
                } else {
                    project.style.display = 'none'; // Hide project
                }
            });
        });
    });
});


</script>

</body>
</html>