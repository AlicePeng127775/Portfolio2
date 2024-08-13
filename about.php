<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Alice Peng is a creative Front-End Developer and UI/UX Designer with a passion for crafting intuitive and engaging digital experiences. Specializing in responsive design and user-centric interfaces, I leverages technologies like HTML, CSS, JavaScript, and tools like Figma to bring innovative ideas to life.">
    <meta name="keywords" content="Alice Peng web development, front-end development, Ui/Ux designer">
    <meta name="author" content="Alice Peng">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="/img/logo/icon.png">
    
    <link rel="stylesheet" href="dist/app.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/92a4d8c871.js" crossorigin="anonymous"></script>

    
    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="About Alice Peng">
    <meta property="og:description" content="Learn more about Alice Peng, a creative front-end developer and UI/UX designer with a passion for crafting intuitive and engaging digital experiences.">
    <meta property="og:image" content="https://alicepeng.com/img/photo/home.png">
    <meta property="og:url" content="https://alicepeng.com/about.php">
    <meta property="og:type" content="website">
    <meta property="fb:app_id" content="yuan.zi.3133">
       
    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="About Alice Peng">
    <meta name="twitter:description" content="Learn more about Alice Peng, a creative front-end developer and UI/UX designer with a passion for crafting intuitive and engaging digital experiences.">
    <meta name="twitter:image" content="https://alicepeng.com/img/photo/Alice03.png">
    <meta name="twitter:url" content="https://alicepeng.com/about.php">
    <meta name="twitter:creator" content="@775_Yu">
    

    <title>About Alice - Front-End Developer and UI/UX Designer</title>
</head>
<body>
    
    <!----------------- header ------------------>
    <?php require_once("partials/header.php") ?>
    <!------------------------------------------->
    <canvas id="bg-animation"></canvas>
    <main class='container'>
    <div class='aboutMePhoto grid'>
        <div class="photo col-12" >
            <div class='position'data-aos="fade-right">
                <div>ui/ux designer</div>
                <div>front-end </br> developer</div>
            </div>

            <div class='aboutTitle' data-aos="fade-left">
                <div>about me</div>
            </div>
            <div class='background'></div>
            <img src='./img/photo/Alice03.png' alt='alice photo'>
        </div>
    </div>
    <div class='aboutMe grid' data-aos="fade-up">
      
            <div class="col-12 col-4-md">
                <h1 class='aboutUnderLine'>About Me</h1> 
                
                <h1>:></h1>
            </div>
           
            <div class="col-12 col-8-md">
                <p data-aos="fade-left">
                Welcome to my site, a journey of creativity and technology. I'm a professional front-end developer and UI/UX designer. I'm dedicated to creating and delivering intuitive, engaging user experiences.<br><br>

                I have solid UI design skills and can make complex information simple and understandable through visual elements, making it an enjoyable experience for users to use a product. I'm also a front-end developer with experience in a variety of front-end technologies. I am able to translate design concepts into interactive products that provide a smooth user experience when browsing and operating.<br><br>

                I am passionate about innovation and challenges, and I am always looking for the ultimate technology to deliver a better project!
                </p>
            </div>
      
    </div>
        
    <div class="skill grid" >
        <h2 class="col-12">My Skills</h2>
        <div class='filter col-12'>
            <button onclick="showSlide(1)">Coding Skills</button>
            <button onclick="showSlide(2)">Design Skills</button>
            <button onclick="showSlide(3)">Soft Skills</button>
        </div>

        <div class="col-12" data-aos="fade-up">
            <div class="fade skill-all">
                <div class="grid">
                    <?php 
                        $codingskill = array('HTML', 'CSS', 'Java Script', 'PHP', 'SCSS', 'MySQL', 'Node.js', 'React.js', 'Visual Studio Code', 'Android Studio', 'Expo', 'WordPress');
                        foreach($codingskill as $value){
                            echo "<div class='skillCard col-3 col-4-sm col-2-lg'>
                            <div class='iconC'>
                            <img src='./img/skill/coding/$value.png' alt='$value logo'>
                            </div>
                            <p>$value</p>
                            </div>";
                        }
                    ?>
                </div>
            </div>

            <div class="fade skill-all">
                <div class="grid">
                    <?php 
                        $designskill = array('Photoshop', 'Illustrator', 'InDesign', 'Dimension', 'Premiere', 'After Effects', 'XD', 'Audition', 'Creative Cloud', 'Figma');
                        foreach($designskill as $value){
                            echo "<div class='skillCard col-3 col-4-sm col-2-lg'>
                            <div class='iconC'>
                            <img src='./img/skill/design/$value.png' alt='$value logo'>
                            </div>
                            <p>$value</p>
                            </div>";
                        }
                    ?>
                </div>
            </div>
            
            <div class="fade skill-all">
                <div class="grid">
                    <?php 
                        $softskill = array('Communication', 'Teamwork', 'Problem Solving', 'Creativity', 'Time Manage', 'Adaptability','Analyze', 'Search', 'Learn', 'Hard Work', 'English', 'Mandarin');
                        foreach($softskill as $value){
                            echo "<div class='skillCard col-3 col-4-sm col-2-lg'>
                            <div class='iconC'>
                            <img src='./img/skill/soft/$value.png' alt='$value logo'>
                            </div>
                            <p>$value</p>
                            </div>";
                        }
                    ?>
                </div>
            </div>
        </div>
      
        <!-- The circles/dots -->
        <div class="vertical-dots col-12">
            <span class="dots" onclick="currentSlide(1)"></span>
            <span class="dots" onclick="currentSlide(2)"></span>
            <span class="dots" onclick="currentSlide(3)"></span>
        </div>
    </div>

    <div class='experience grid' data-aos="fade-up">
            <h2 class='col-12'>My Life Experience</h2>
      
            <div class="col-12 col-4-md" > 
                <h1>:></h1>
                <h1 class='experienceTitle'>My Life <div>Experience</div></h1> 
            </div>
           
            <div class="col-12 col-8-md" data-aos="fade-left">
                <div class='timeTop'>
                <div class='timeLine T1999'>
                     
                     <p><span><i class="fa-solid fa-location-dot"></i> Born in China</span></p>
                     <h1>> 1999</h1>
                </div>

                <div  class='timeLine T2018'>
                    
                    <p>
                        Graduated from VGC </br>Language Colleged</br>
                        <span>
                            <i class="fa-solid fa-graduation-cap"></i> 
                            Come to Canda</br>  
                        </span> 
                        
                    </p>
                    <h1>> 2018</h1>
                </div>
                    
                </div>
                
              <div class='experienceImg'>
                <img src='./img/experience/experience.png' alt='experience' />
              </div>
              <div class=timeBottom>
              <div  class='timeLine T2003'>
                    <h1>> 2003</h1>
                    <p>
                        <span>
                        <i class="fa-solid fa-house"></i> 
                        Moving to Taiwan</br>
                        </span>
                        Kinder garten Primary School</br> 
                        Junior High School</br>
                        High School</br>
                    </p>
                    
                </div>  
                <div class='timeLine T2023'>
                    <h1>> 2023</h1>
                    <p>
                        <span>
                             <i class="fa-solid fa-graduation-cap"></i> 
                            Studying at  BCIT</br> 
                        </span>
                       
                        New Media Design and </br>Web Development</br>
                    </p>  
                </div>
              </div>
            </div>
      
    </div>

    <div class='Testimonials grid' data-aos="fade-up">
    <h2 class='col-12'>Testimonials</h2>

    <div class="btnclass col-12">
        <button class="nav-btn prev-btn"><i class="fa-solid fa-arrow-left"></i></button>
        <button class="nav-btn next-btn"><i class="fa-solid fa-arrow-right"></i></button>
    </div>

    <!-- Container for testimonial cards -->
    <div class="col-12 grid testimonials-container" data-aos="fade-up">
        <!-- Testimonials will be inserted here dynamically -->
        <?php
        // Sample testimonial data
        $testimonials = [
            ['photo' => '../img/Testimonials/p01.jpg', 'name' => 'Joyce', 'description' => 'Alice’s work is outstanding. She has a keen eye for design and her coding skills are top-notch.'],
            ['photo' => '../img/Testimonials/p02.jpg', 'name' => 'Lydia', 'description' => 'I was impressed by Alice’s professionalism and attention to detail. She delivered exactly what we needed.'],
            ['photo' => '../img/Testimonials/p03.jpg', 'name' => 'Emily', 'description' => 'Working with Alice was a pleasure. Her creativity and expertise brought our project to life.'],
            ['photo' => '../img/Testimonials/p04.jpg', 'name' => 'Nimo', 'description' => 'Alice is a talented developer and designer. Her work exceeded our expectations and we couldn’t be happier.'],
            ['photo' => '../img/Testimonials/p05.jpg', 'name' => 'Alvin', 'description' => 'Alice’s dedication and skill set are exceptional. She is a valuable asset to any team.']
        ];
        foreach ($testimonials as $testimonial) {
            echo "<div class='testimonial-card'>
                    <div class='testimonial-top'>
                        <div class='imgC'>
                            <img src='{$testimonial['photo']}' alt='photo of {$testimonial['name']}' />
                        </div>
                        <h4>-- {$testimonial['name']}</h4>
                    </div>
                    <p>{$testimonial['description']}</p>
                  </div>";
        }
        ?>
    </div>
</div>
    </main>
    <div class='content-wrap'></div>
    <!----------------- footer ------------------>
    <?php require_once("partials/footer.php") ?>
    <!------------------------------------------->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/TweenLite.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/easing/EasePack.min.js"></script>
    <script type='text/javascript' src='resources/scripts/bg-animation.js'></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js"></script>
    <script src='./js/app.js'></script>
    
    <script>    
        //===========================//
        //  About page - slideShow   //
        //===========================//
        var slidePosition = 1;
        var slideInterval = setInterval(function() { plusSlides(1); }, 6000); // Change slides every 6 seconds
        displaySlide(slidePosition);



        // image controls
        function currentSlide(n) {
            displaySlide(slidePosition = n);
            resetSlideInterval();
        }

        // show specific slide
        function displaySlide(n) {
            var i;
            var slides = document.querySelectorAll(".skill-all");
            var dots = document.querySelectorAll(".dots");
            var buttons = document.querySelectorAll(".filter button");
            if (n > slides.length) { slidePosition = 1 }
            if (n < 1) { slidePosition = slides.length }
            for (i = 0; i < slides.length; i++) {
                slides[i].classList.remove("active");
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" enable", "");
            }
            for (i = 0; i < buttons.length; i++) {
                buttons[i].classList.remove("active");
            }
            slides[slidePosition - 1].classList.add("active");
            dots[slidePosition - 1].className += " enable";
            buttons[slidePosition - 1].classList.add("active");
        }

        function resetSlideInterval() {
            clearInterval(slideInterval);
            slideInterval = setInterval(function() { plusSlides(1); }, 6000); // Reset the timer
        }

        // Show slide based on clicked link
        function showSlide(n) {
            slidePosition = n;
            displaySlide(slidePosition);
            resetSlideInterval();
        }

         //===========================//
        //  About page -  testimonial //
        //===========================//

        document.addEventListener('DOMContentLoaded', () => {
            const prevBtn = document.querySelector('.prev-btn');
            const nextBtn = document.querySelector('.next-btn');
            const testimonialsContainer = document.querySelector('.testimonials-container');
            let scrollPosition = 0;

            prevBtn.addEventListener('click', () => {
                scrollPosition -= testimonialsContainer.clientWidth / 3;
                if (scrollPosition < 0) {
                    scrollPosition = 0;
                }
                testimonialsContainer.scrollTo({
                    left: scrollPosition,
                    behavior: 'smooth'
                });
            });

            nextBtn.addEventListener('click', () => {
                scrollPosition += testimonialsContainer.clientWidth / 3;
                if (scrollPosition > testimonialsContainer.scrollWidth - testimonialsContainer.clientWidth) {
                    scrollPosition = testimonialsContainer.scrollWidth - testimonialsContainer.clientWidth;
                }
                testimonialsContainer.scrollTo({
                    left: scrollPosition,
                    behavior: 'smooth'
                });
            });
        });


    </script>
</body>
</html>