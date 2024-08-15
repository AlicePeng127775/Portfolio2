<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Explore Alice Peng's portfolio featuring web development projects including the Whac-A-Mole Website GameAnimal Adoption Website. Discover innovative solutions in HTML, CSS, JavaScript, UI/UX design, and more.">
    <meta name="keywords" content="Alice Peng, Web Development, UI/UX Design, HTML, CSS, JavaScript, Visual Studio Code, WordPress, React, Portfolio">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dist/app.css">
    <link rel="icon" type="image/x-icon" href="/img/logo/icon.png">
    <script src="https://kit.fontawesome.com/92a4d8c871.js" crossorigin="anonymous"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.9.6/lottie.min.js"></script>

    <!-- Open Graph Meta Tags -->
        <meta property="og:title" content="Alice Peng - Whac-A-Mole Website Game">
        <meta property="og:description" content="Hello! I'm Alice Peng, I designed and developed the website for Whac-A-Mole Website Game.">
        <meta property="og:image" content="https://alicepeng.com/img/project/project3.png">
        <meta property="og:url" content="https://alicepeng.com/project3">
        <meta property="og:type" content="website">
        <meta property="fb:app_id" content="yuan.zi.3133">
    <!-- Twitter Card Meta Tags -->
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="Alice Peng - Whac-A-Mole Website Game">
        <meta name="twitter:description" content="Hello! I'm Alice Peng, I designed and developed the website for Whac-A-Mole Website Game.">
        <meta name="twitter:image" content="https://alicpeng.com/img/project/project3.png">
        <meta name="twitter:url" content="https://alicepeng.com/project3">
        <meta name="twitter:creator" content="@775_Yu">
    <title> Alice's Project | Whac-A-Mole </title>
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
    <div class='singleProject'>
        <div class='project grid'>
            <div class='projectInfo col-12' data-aos="fade-up">                
                    <div class='projectIntro col-12'>
                        <div class='project3C col-12 grid'>                        

                            <div class='projectIMG col-12 col-6-lg'><img src='./img/project/laptop3.png' alt='Whac-A-Mole Website Game laptop Mockup'></div>
                        
                            <div class='col-12 col-6-lg'>
                                <h4 class='col-12 col-8-lg '>Whac-A-Mole Website Game</h4> 
                                <div class='toolC'>
                                <span class='tool toolBorder3'><img src='./img/skill/coding/HTML.png' alt='HTML Logo'/></span>
                                <span class='tool toolBorder3'><img src='./img/skill/coding/CSS.png' alt='CSS Logo'/></span>
                                <span class='tool toolBorder3'><img src='./img/skill/coding/Visual Studio Code.png' alt='Visual Studio Code Logo'/></span>
                                <span class='tool toolBorder3'><img src='./img/skill/design/Figma.png' alt='Figma Logo'/></span>
                                <span class='tool toolBorder3'><img src='./img/skill/design/Illustrator.png' alt='Illustrator Logo'/></span>
                                </div>
                                

                                <h6>Whac-A-Mole Website Game<br> 

                                This is a web game created with HTML, CSS, and JavaScript. 
                                </h6>

                                <div class='linkBtn col-12 col-4-lg'>
                                    <a href="https://lumina.aliccccce.com/"><i class="fa-solid fa-link"></i>Lauch&nbsp;Site</a>
                                    <a href="#"><i class="fa-brands fa-github"></i>View&nbsp;Code</a>
                                </div>

                            </div>
                        </div>
                    
                          

                        <div class='process col-12 grid'>
                            <div class='col-12 col-6-lg'>
                                <h5>The first version:<br> Brainstorm and Search</h5>


                                <p>
                                Since we need to use the getBoundingClientRect() method to 
                                create web pages with images that follow the cursor, I wanted 
                                to make a whac-a-mole game. Since I was not familiar with this 
                                method, I started to look for related introductions and tutorials on the internet.</br>
                                At the same time, I was also looking for suitable pictures. 
                                I also made reference to the current gopher games on the internet, 
                                and formulated the basic rules and functions. But because the 
                                focus is on the use of getBoundingClientRect() method, so the 
                                rules only set the time for 30 seconds, hit the mouse can be 
                                added points, and in the final pop-up window to tell you the total score.
                                </p>
                                </br>

                                <h5>Development and testing process:</h5>
                                <p>
                                    I’ve designed the web page layout for the Whack-A-Mole game. 
                                    I use some oval images to represent the hole for mouse image 
                                    to go up and down. I use the hammer images to replace the normal 
                                    cursor during the game. During development I used the getBoundingClientRect() 
                                    method to get the hammer to hit the mouse and add points,and I've been 
                                    working on this part for a long time. There are few functions I used 
                                    to cooperate with getBoundingClientRect() to make the hammer work 
                                    without error which is moveCursor(), hit(), and for each loop to 
                                    allow the hammer to interact with the mouse images. I also added 
                                    a few variables which are time, timer, and startCountdown() function 
                                    to achieve the time countdown function for game.
                                </p>
                            </div>
                            <div class="col-12 col-6-lg">
                                 <div id="lottie-animation2" class='col-12 col-6-lg'></div>
                            </div>

                            </div>

                        </div>
                        
                        <div class='process col-12 grid'>
                            <div class="col-12 col-6-lg">
                                <img src='./img/project/whac-a-mole.gif' alt='whac-a-mole website gif' width="90%">
                            </div>

                            <div class="col-12 col-6-lg">
                                <h5>Second version:</br> Re-brainstormed and re-designed:</h5>
                                <p>
                                    I added refresh page, and pause, etc. to the first version.
                                    I also re-searched for suitable images and icons, 
                                    since I couldn't find suitable hammers, 
                                    the original hammer image was too low pixel, so I used an 
                                    illustrator to draw my own vector image and used it in the game.
                                    In addition, I found background music, and hit sound 
                                    effects to increase the game play experience.
                                    After that, I use a background-image to make the web page look more interesting.                                
                                </p> </br>
                                    <h5>Development - hand code:</h5>
                                    <p>
                                        First, I added two new buttons on the top 
                                        left corner which is refresh and pause button. 
                                        I added the pauseGame() and refreshGame() 
                                        function to make the button can pause and 
                                        refresh the game. But unfortunately, the hammer 
                                        cannot interact with these two buttons in the 
                                        first few tests. After that, I found that the 
                                        problem is in the JavaScript part, and I’ve 
                                        fixed the error of refreshGame() and pauseGame() 
                                        function by modified the JavaScript code. Next, 
                                        I change the images and icons for mouse and hammer 
                                        to improve the visual presentation quality of the game. 
                                        I also added a few audios effect which is hit sound 
                                        when the hammer hit mouse and background-music to increase 
                                        the game play experience of user. In addition, 
                                        I use a background-image to make the web page look more 
                                        interesting. Lastly, I added some CSS code for the start 
                                        button, to make it can ease-in when the web page was 
                                        launched and disappear after user click the start button 
                                        to improve the visual presentation quality.
                                    </p>
                            </div>
                        </div>
                    </div>
            </div>

        </div>
        <h2 class='other'>Other Project</h2>
           <!----------------- Other Projct ------------------>
           <?php require_once("partials/other.php") ?>
        <!------------------------------------------------->

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

    var animation2 = lottie.loadAnimation({
            container: document.getElementById('lottie-animation2'), // 容器 ID
            renderer: 'svg', // 渲染器类型，可选 'svg' 或 'canvas'
            loop: true, // 是否循环播放
            autoplay: true, // 是否自动播放
            path: 'https://lottie.host/62ecd630-5863-4f22-94ba-e80968fa0bb1/zCWiMOR3fs.json' // Lottie 文件的路径
        });
       //other project

       document.addEventListener('DOMContentLoaded', () => {
        const prevBtn = document.querySelector('.prev-btn2');
        const nextBtn = document.querySelector('.next-btn2');
        const projectsContainer = document.querySelector('.projects-container');
        let scrollPosition = 0;

        prevBtn.addEventListener('click', () => {
            scrollPosition -= projectsContainer.clientWidth / 3;
            if (scrollPosition < 0) {
                scrollPosition = 0;
            }
            projectsContainer.scrollTo({
                left: scrollPosition,
                behavior: 'smooth'
            });
        });

        nextBtn.addEventListener('click', () => {
            scrollPosition += projectsContainer.clientWidth / 3;
            if (scrollPosition > projectsContainer.scrollWidth - projectsContainer.clientWidth) {
                scrollPosition = projectsContainer.scrollWidth - projectsContainer.clientWidth;
            }
            projectsContainer.scrollTo({
                left: scrollPosition,
                behavior: 'smooth'
            });
        });
    });
    </script>

</body>
</html>