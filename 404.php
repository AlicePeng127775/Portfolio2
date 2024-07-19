<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Welcome to Alice's Web - Explore the world of web development and design with Alice, a Front-End Developer and Designer.">
    <meta name="keywords" content="Alice Peng web development, front-end development, Ui/Ux designer">
    <meta name="author" content="Alice Peng">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dist/app.css">
    <link rel="icon" type="image/x-icon" href="/img/logo/icon.png">

    <!-- Jquery -->
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    <title>404 Page Not Found</title>
</head>
<body>

    <main class='container'>
        <div class='error404' >
            <div id="lottie-animation404" ></div>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/gsap.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.9.1/lottie.min.js"></script>
        </div>
    </main>
  
    <!----------------- footer ------------------>
    <?php require_once("partials/footer.php") ?>
    <!------------------------------------------->

    <script src='./js/app.js/'></script>
    <script>

        var animation = lottie.loadAnimation({
                container: document.getElementById('lottie-animation404'), // 容器 ID
                renderer: 'svg', // 渲染器类型，可选 'svg' 或 'canvas'
                loop: true, // 是否循环播放
                autoplay: true, // 是否自动播放
                path: 'https://lottie.host/0939c32a-d7ac-49ed-95e7-2644f172d5ed/r3wKZ165oe.json' // Lottie 文件的路径
            });
      
    </script>

</body>
</html>