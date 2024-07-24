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
    <canvas id="bg-animation"></canvas>
    <main class='container'>
    <div class='portfolioTitle'>
        <p>Explore my latest portfolio of web development projects<br>
         covering a wide range of areas from HTML , CSS, JavaScript,<br>
          Visual Studio Code, UI/UX animation to WordPress and React.</p>
          <div id="lottie-animation"></div>

    </div>
    
    <div class='allProject container grid'>
        <div class='project grid  col-12 col-4-lg' data-aos="fade-up">
            <div class='projectImg col-12'><img src='./img/project/project1.png' alt="Little Fish Cares website"></div>
            <div class='projectInfo col-12'>
                <h5>Little Fish Cares Animal Adoption Website</h5>
     
                <p>Little Fish Cares is a pet adoption organization in Vancouver. The purpose of this project is to demonstrate the use of HTML, CSS, JavaScript combined with other JavaScript libraries and JQ plugins to complete web pages.</p>
               <div class='projectCardBottom'>
                <div class='toolC'>
                <span class='tool'><img src='./img/skill/coding/HTML.png' alt='HTML Logo'/></span>
                <span class='tool'><img src='./img/skill/coding/CSS.png' alt='CSS Logo'/></span>
                <span class='tool'><img src='./img/skill/coding/Java Script.png' alt='JavaScript Logo'/></span>
                <span class='tool'><img src='./img/skill/coding/Visual Studio Code.png' alt='Visual Studio Code Logo'/></span>
                <span class='tool'><img src='./img/skill/design/Figma.png' alt='Figma Logo'/></span>
                <span class='tool'><img src='./img/skill/design/Illustrator.png' alt='Illustrator Logo'/></span>

                </div>
                <a href='project1.php'class='viewBtn1 btn2'>View</a>
               </div>
                
            </div>
        </div>


        <div class='project grid col-12 col-4-lg' data-aos="fade-up">
            <div class='projectImg col-12'><img src='./img/project/project2.png'  alt="Lumina online shopping Website"></div>
            <div class='projectInfo col-12'>
                <h5>Lumina online shopping Website</h5>
                <p>Introduction：lumina is a candle shop located in Vancouver, this project requires our team to design and develop their online shopping website, the entire webpage was designed using Figma to design the wireframes and developed in HTML, CSS, JavaScirt, </p>
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
                <a href='project2.php'class='viewBtn1 btn2'>View</a>
               </div>
            </div>
        </div>

        <div class='project grid  col-12 col-4-lg' data-aos="fade-up">
            <div class='projectImg col-12'><img src='./img/project/project3.png' alt="Whac-A-Mole Website Game"></div>
            <div class='projectInfo col-12'>
                <h5>Whac-A-Mole Website Game</h5>
                <p>Introduction：This is a small web game, the player mainly uses the mouse to control the hammer, to knock the mouse to get points, cute graphics with background music and percussion sound effects to make the game more interesting!</p>
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



        <div class='project grid  col-12 col-4-lg' data-aos="fade-up">
            <div class='projectImg col-12'><img src='./img/project/project4.png' alt="October shopping app design"></div>
            <div class='projectInfo col-12'>
                <h5>October shopping app design</h5>
                <p>Introduction： October is an original Accessories company, In this project I need to design App for they and create wireframe and interaction model using Figma and finally user testing using Maze. Modify the model based on the test results,  </p>
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
    </div>
    
    </main>
    <div class='content-wrap'></div>
    <!----------------- footer ------------------>
    <?php require_once("partials/footer.php") ?>
    <!------------------------------------------->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/TweenLite.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/easing/EasePack.min.js"></script>
    <script type='text/javascript' src='resources/scripts/bg-animation.js'></script>
    <script src='js/app.js'></script>
    <script>
        var animation = lottie.loadAnimation({
        container: document.getElementById('lottie-animation'), // 容器 ID
        renderer: 'svg', // 渲染器类型，可选 'svg' 或 'canvas'
        loop: true, // 是否循环播放
        autoplay: true, // 是否自动播放
        path: 'https://lottie.host/50b088fe-b6b6-47b4-88f6-5d532aea5086/2a3vEVbGKX.json' // Lottie 文件的路径
    });
</script>

</body>
</html>