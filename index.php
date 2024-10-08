<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Welcome to Alice's Web - Explore the world of web development and design with Alice, a Front-End Developer and Designer.">
    <meta name="keywords" content="Alice Peng web development, front-end development, UI/UX designer">
    <meta name="author" content="Alice Peng">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dist/app.css">
    <link rel="icon" type="" href="/img/logo/icon.png">

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
    <canvas id="bg-animation"></canvas>

    <main class='container'>
        <div class='homeIntro grid'>
            <div class='photo col-12 col-6-md col-6-lg'>
                <div class='alicePhoto' style="position: relative;">
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/TweenLite.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/easing/EasePack.min.js"></script>
    <script type='text/javascript' src='resources/scripts/bg-animation.js'></script>
    <script src='./js/app.js'></script>
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
        gsap.timeline({ repeat: -1, yoyo: true })
            .to(".alicePhoto", { 
                borderRadius: "70% 58% 60% 50% / 85% 90% 55% 75%",
                transform: "translate3d(0,0,0) rotateZ(0.01deg)",
                duration: 0,
                backgroundColor: "#faacac99",
            })
            .to(".alicePhoto", { 
                borderRadius: "60% 50% 60% 70% / 70% 50% 70% 70%",
                transform: "translate3d(0,5px,0) rotateZ(0.01deg)",
                duration: 1.7,
                ease: "linear"
            })
            .to(".alicePhoto", { 
                transform: "translate3d(0,0,0) rotateZ(0.01deg)",
                duration: 0.8,
                ease: "linear",
                
                backgroundColor: "#Ff999999",
            })
            .to(".alicePhoto", { 
                borderRadius: "100% 80% 60% 100% / 100% 100% 80% 90%",
                transform: "translate3d(0,-3px,0) rotateZ(0.01deg)",
                duration: 1.6,
                ease: "linear"
            });

            /* Animation Background */


        
       
    </script>
</body>
</html>
