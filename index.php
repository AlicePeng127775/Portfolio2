<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Welcome to Alice's Web - Explore the world of web development and design with Alice, a Front-End Developer and Designer.">
    <meta name="keywords" content="Alice Peng web development, front-end development, UI/UX designer">
    <meta name="author" content="Alice Peng">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dist/app.css">
    <link rel="icon" type="image/x-icon" href="/img/logo/icon.png">

    <!-- aos Animate On Scroll Library -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <!-- Jquery -->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <!-- Typer js -->
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12/lib/typed.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/typed.js@2.0.12/lib/typed.min.css" />
    <!--Font Awesome-->
    <script src="https://kit.fontawesome.com/92a4d8c871.js" crossorigin="anonymous"></script>
    <!--GSAP Animate-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/gsap.min.js"></script>

    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="Alice Peng - Front-End Developer and UI/UX Designer">
    <meta property="og:description" content="Hello! I'm Alice Peng, a passionate front-end developer and UI/UX designer based in Vancouver.">
    <meta property="og:image" content="https://alicepeng.com/img/photo/home.png">
    <meta property="og:url" content="https://alicepeng.com">
    <meta property="og:type" content="website">
    <meta property="fb:app_id" content="yuan.zi.3133">

    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Alice Peng - Front-End Developer and UI/UX Designer">
    <meta name="twitter:description" content="Hello! I'm Alice Peng, a passionate front-end developer and UI/UX designer based in Vancouver.">
    <meta name="twitter:image" content="https://alicepeng.com/img/photo/home.png">
    <meta name="twitter:url" content="https://alicepeng.com">
    <meta name="twitter:creator" content="@775_Yu">

    <title>Welcome to Alice's Web</title>
</head>
<body>
    <!----------------- header ------------------>
    <?php require_once("partials/header.php") ?>
    <!------------------------------------------->
    <main class='container'>
        <div class='homeIntro grid'>
            <div class='photo col-12 col-6-md col-6-lg'>
                <div class='alicePhoto' style="position: relative;">
                    <div class="background-shape-container">
                        <svg class="background-shape" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                            <path id="blob" d="M43.3,-55.6C55.8,-42.8,65.5,-28.4,66.3,-13.3C67,1.7,59,17.6,47.8,26.6C36.6,35.7,22.3,37.9,7.5,40.6C-7.3,43.2,-14.7,46.3,-27.6,46.2C-40.5,46,-59,42.6,-60.4,33.7C-61.8,24.9,-46.2,10.6,-37.8,-2.3C-29.4,-15.2,-28.2,-26.8,-21.3,-39.5C-14.3,-52.2,-1.7,-66,11.8,-69.7C25.4,-73.4,39.6,-67.1,43.3,-55.6Z" fill="url(#grad1)" opacity="0.8"/>
                            <path id="blob2" d="M32.7,-47.9C45.6,-35.1,59.4,-23.6,64.2,-8.5C69,6.5,64.7,26.1,55.8,36.4C46.9,46.6,33.4,47.6,21.2,50.2C9.1,52.8,-1.8,57,-10.4,53.7C-19,50.3,-26.4,39.4,-31.3,29.5C-36.2,19.6,-38.6,10.7,-46.6,-3.5C-54.6,-17.7,-68.2,-35.3,-65.5,-40.1C-62.8,-44.9,-43.8,-36.9,-30.8,-40.6C-17.9,-44.3,-8.9,-59.7,3.2,-64.2C15.3,-68.7,30.5,-62.3,32.7,-47.9Z" fill="url(#grad2)" opacity="0.6"/>
                            <defs>
                                <linearGradient id="grad1" x1="0%" y1="0%" x2="100%" y2="100%">
                                    <stop offset="0%" style="stop-color:rgb(255,215,0);stop-opacity:1" />
                                    <stop offset="100%" style="stop-color:rgb(255,105,180);stop-opacity:1" />
                                </linearGradient>
                                <linearGradient id="grad2" x1="0%" y1="0%" x2="100%">
                                    <stop offset="0%" style="stop-color:rgb(75,0,130);stop-opacity:1" />
                                    <stop offset="100%" style="stop-color:rgb(238,130,238);stop-opacity:1" />
                                </linearGradient>
                            </defs>
                        </svg>
                    </div>
                    <img src='./img/photo/Alice01.png' alt="Alice photo"/>
                </div>
            </div>
            <div class='intro col-12 col-6-md col-6-lg'> 
                <h1>
                    Hello !! <br> I'm <span class='alice' id='element'></span><br>
                </h1>
                <h5 class='position'>UI/UX designer and front-end developer</h5>
                <h5 class='nice'>
                    A Taiwanese in Vancouver. Born in 1999.<br>
                    Nice to meet you here
                </h5>
                <div class='contactIcon'>
                    <div class='github'><a href='https://github.com/AlicePeng127775'><i class="fa-brands fa-github"></i></a></div>
                    <div class='linkedin'><a href='https://linkedin.com/in/ziyuan-peng'><i class="fa-brands fa-linkedin-in"></i></a></div>
                    <div class='email'><a href='mailto:yuan127775@gmail.com'><i class="fa-solid fa-envelope"></i></a></div>
                </div>
                <a class='btn' href='./about.php'>more  <i class="fa-solid fa-arrow-right"></i> </a>
            </div>
        </div>
    </main>
  
    <!----------------- footer ------------------>
    <?php require_once("partials/footer.php") ?>
    <!------------------------------------------->

    <script>
        /* Typing my Name */
        const typed = new Typed('#element', {
            strings: ['Aliccccce :>', 'Zi Yuan Peng :)','<span class="chinese">彭 子 鳶</span> :D'],
            typeSpeed: 150,
            loop: true, 
            showCursor: true,
            cursorChar: '|',
        });

        /* GSAP Animation for Background Shape */
        const blob = document.querySelector('#blob');
        const blob2 = document.querySelector('#blob2');

        function animateBlob() {
            const timeline = gsap.timeline({ repeat: -1, yoyo: true });
            timeline.to(blob, { duration: 10, attr: { d: "M43.3,-55.6C55.8,-42.8,65.5,-28.4,66.3,-13.3C67,1.7,59,17.6,47.8,26.6C36.6,35.7,22.3,37.9,7.5,40.6C-7.3,43.2,-14.7,46.3,-27.6,46.2C-40.5,46,-59,42.6,-60.4,33.7C-61.8,24.9,-46.2,10.6,-37.8,-2.3C-29.4,-15.2,-28.2,-26.8,-21.3,-39.5C-14.3,-52.2,-1.7,-66,11.8,-69.7C25.4,-73.4,39.6,-67.1,43.3,-55.6Z" }, ease: "power1.inOut" })
                .to(blob, { duration: 10, attr: { d: "M32.7,-47.9C45.6,-35.1,59.4,-23.6,64.2,-8.5C69,6.5,64.7,26.1,55.8,36.4C46.9,46.6,33.4,47.6,21.2,50.2C9.1,52.8,-1.8,57,-10.4,53.7C-19,50.3,-26.4,39.4,-31.3,29.5C-36.2,19.6,-38.6,10.7,-46.6,-3.5C-54.6,-17.7,-68.2,-35.3,-65.5,-40.1C-62.8,-44.9,-43.8,-36.9,-30.8,-40.6C-17.9,-44.3,-8.9,-59.7,3.2,-64.2C15.3,-68.7,30.5,-62.3,32.7,-47.9Z" }, ease: "power1.inOut" })
                .to(blob, { duration: 10, attr: { d: "M30.4,-45.7C40.5,-33.6,48.6,-22.1,53.7,-8.4C58.8,5.4,61,20.4,56.3,32.1C51.6,43.8,40.1,52.3,27.2,54.5C14.3,56.8,0,52.9,-13.4,49.1C-26.8,45.3,-39.3,41.6,-41.3,33.5C-43.4,25.4,-34.9,13.1,-36.8,-0.3C-38.6,-13.7,-50.8,-27.5,-50.5,-37.5C-50.3,-47.6,-37.7,-53.9,-25.4,-61.4C-13.1,-68.9,-6.5,-77.7,2.4,-80.9C11.2,-84,22.4,-81.4,30.4,-73.2C38.3,-65,43,-51.9,30.4,-45.7Z" }, ease: "power1.inOut" });

            const timeline2 = gsap.timeline({ repeat: -1, yoyo: true });
            timeline2.to(blob2, { duration: 10, attr: { d: "M32.7,-47.9C45.6,-35.1,59.4,-23.6,64.2,-8.5C69,6.5,64.7,26.1,55.8,36.4C46.9,46.6,33.4,47.6,21.2,50.2C9.1,52.8,-1.8,57,-10.4,53.7C-19,50.3,-26.4,39.4,-31.3,29.5C-36.2,19.6,-38.6,10.7,-46.6,-3.5C-54.6,-17.7,-68.2,-35.3,-65.5,-40.1C-62.8,-44.9,-43.8,-36.9,-30.8,-40.6C-17.9,-44.3,-8.9,-59.7,3.2,-64.2C15.3,-68.7,30.5,-62.3,32.7,-47.9Z" }, ease: "power1.inOut" })
                .to(blob2, { duration: 10, attr: { d: "M43.3,-55.6C55.8,-42.8,65.5,-28.4,66.3,-13.3C67,1.7,59,17.6,47.8,26.6C36.6,35.7,22.3,37.9,7.5,40.6C-7.3,43.2,-14.7,46.3,-27.6,46.2C-40.5,46,-59,42.6,-60.4,33.7C-61.8,24.9,-46.2,10.6,-37.8,-2.3C-29.4,-15.2,-28.2,-26.8,-21.3,-39.5C-14.3,-52.2,-1.7,-66,11.8,-69.7C25.4,-73.4,39.6,-67.1,43.3,-55.6Z" }, ease: "power1.inOut" })
                .to(blob2, { duration: 10, attr: { d: "M30.4,-45.7C40.5,-33.6,48.6,-22.1,53.7,-8.4C58.8,5.4,61,20.4,56.3,32.1C51.6,43.8,40.1,52.3,27.2,54.5C14.3,56.8,0,52.9,-13.4,49.1C-26.8,45.3,-39.3,41.6,-41.3,33.5C-43.4,25.4,-34.9,13.1,-36.8,-0.3C-38.6,-13.7,-50.8,-27.5,-50.5,-37.5C-50.3,-47.6,-37.7,-53.9,-25.4,-61.4C-13.1,-68.9,-6.5,-77.7,2.4,-80.9C11.2,-84,22.4,-81.4,30.4,-73.2C38.3,-65,43,-51.9,30.4,-45.7Z" }, ease: "power1.inOut" });
        }

        animateBlob();
       
    </script>
</body>
</html>
