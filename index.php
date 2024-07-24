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

            (function() {

var width, height, canvas, ctx, points, target, animateHeader = true;
var colorRGB = 128;

// Main
initHeader();
initAnimation();
addListeners();

function initHeader() {
    width = window.innerWidth;
    height = window.innerHeight;
    target = {x: width/2, y: height/2};


    canvas = document.getElementById('bg-animation');
    canvas.width = width;
    canvas.height = height;
    ctx = canvas.getContext('2d');

    // create points
    points = [];
    for(var x = 0; x < width; x = x + width/20) {
        for(var y = 0; y < height; y = y + height/20) {
            var px = x + Math.random()*width/20;
            var py = y + Math.random()*height/20;
            var p = {x: px, originX: px, y: py, originY: py };
            points.push(p);
        }
    }

    // for each point find the 5 closest points
    for(var i = 0; i < points.length; i++) {
        var closest = [];
        var p1 = points[i];
        for(var j = 0; j < points.length; j++) {
            var p2 = points[j]
            if(!(p1 == p2)) {
                var placed = false;
                for(var k = 0; k < 5; k++) {
                    if(!placed) {
                        if(closest[k] == undefined) {
                            closest[k] = p2;
                            placed = true;
                        }
                    }
                }

                for(var k = 0; k < 5; k++) {
                    if(!placed) {
                        if(getDistance(p1, p2) < getDistance(p1, closest[k])) {
                            closest[k] = p2;
                            placed = true;
                        }
                    }
                }
            }
        }
        p1.closest = closest;
    }

    // assign a circle to each point
    for(var i in points) {
        var c = new Circle(points[i], 2+Math.random()*2, 'rgba(255,255,255,0.3)');
        points[i].circle = c;
    }
}

// Event handling
function addListeners() {
    if(!('ontouchstart' in window)) {
        window.addEventListener('mousemove', mouseMove);
    }
    window.addEventListener('scroll', scrollCheck);
    window.addEventListener('resize', resize);
}

function mouseMove(e) {
    var posx = posy = 0;
    if (e.pageX || e.pageY) {
        posx = e.pageX;
        posy = e.pageY - $(window).scrollTop();
        absolutePosy = e.pageY;
    }
    else if (e.clientX || e.clientY)    {
        posx = e.clientX + document.body.scrollLeft + document.documentElement.scrollLeft;
        posy = e.clientY + document.body.scrollTop + document.documentElement.scrollTop;
    }

    target.x = posx;
    target.y = posy;
    
    if($('body').hasClass('single-iaa_programs')){
        if(absolutePosy > 800){
            colorRGB = 128;
        } else {
            colorRGB = 255;
        }
    } else if($('body').hasClass('page-template-default')){
        if(absolutePosy > 600){
            colorRGB = 128;
        } else {
            colorRGB = 255;
        }
    }
}

function scrollCheck() {
    
}

function resize() {

    width = window.innerWidth;
    height = window.innerHeight;
    ctx.canvas.width = width;
    ctx.canvas.height = height;
    
}

// animation
function initAnimation() {
    animate();
    for(var i in points) {
        shiftPoint(points[i]);
    }
}

function animate() {
    if(animateHeader) {
        ctx.clearRect(0,0,width,height);
        for(var i in points) {
            // detect points in range
            if(Math.abs(getDistance(target, points[i])) < 4000) {
                points[i].active = 0.3;
                points[i].circle.active = 0.6;
            } else if(Math.abs(getDistance(target, points[i])) < 20000) {
                points[i].active = 0.1;
                points[i].circle.active = 0.3;
            } else if(Math.abs(getDistance(target, points[i])) < 40000) {
                points[i].active = 0.02;
                points[i].circle.active = 0.1;
            } else {
                points[i].active = 0;
                points[i].circle.active = 0;
            }

            drawLines(points[i]);
            points[i].circle.draw();
        }
    }
    requestAnimationFrame(animate);
}

function shiftPoint(p) {
    TweenLite.to(p, 1+1*Math.random(), {x:p.originX-50+Math.random()*100,
        y: p.originY-50+Math.random()*100, ease:Circ.easeInOut,
        onComplete: function() {
            shiftPoint(p);
        }});
}

// Canvas manipulation
function drawLines(p) {
    if(!p.active) return;
    for(var i in p.closest) {
        ctx.beginPath();
        ctx.moveTo(p.x, p.y);
        ctx.lineTo(p.closest[i].x, p.closest[i].y);
        ctx.strokeStyle = 'rgba('+colorRGB+','+colorRGB+','+colorRGB+','+ p.active+')';
//            ctx.strokeStyle = 'rgba(156,217,249,'+ p.active+')';
        ctx.stroke();
    }
}

function Circle(pos,rad,color) {
    var _this = this;

    // constructor
    (function() {
        _this.pos = pos || null;
        _this.radius = rad || null;
        _this.color = color || null;
    })();

    this.draw = function() {
        if(!_this.active) return;
        ctx.beginPath();
        ctx.arc(_this.pos.x, _this.pos.y, _this.radius, 0, 2 * Math.PI, false);
        ctx.fillStyle = 'rgba('+colorRGB+','+colorRGB+','+colorRGB+','+ _this.active+')';
        ctx.fill();
    };
}

// Util
function getDistance(p1, p2) {
    return Math.pow(p1.x - p2.x, 2) + Math.pow(p1.y - p2.y, 2);
}

})();



        
       
    </script>
</body>
</html>
