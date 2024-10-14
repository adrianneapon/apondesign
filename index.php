<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/style/style.css">
    <link rel="stylesheet" href="/style/font-style.css">
    <link rel="stylesheet" href="/style/progress-bar.css">
    <link rel="stylesheet" href="/style/mobile-view.css">  
    <script src="script.js"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;900&family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Courier+Prime&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="icon" type="image/x-icon" href="/img/icons/favicon.ico">


<img src="/img/pro" alt="">
     
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" /> 


    <title>Adrianne Apon</title>
</head>  
<body class="body" id="top-body"> 
    
    <div class="index-body">
        <div class="container">
            

                <div class="toggle" id="toggle"><img src="/img/icons/dots.png" alt=""></div>
                
                <div class="toggle-nav" id="toggleButton"></div>

                <nav class="nav-bar" id="nav">
                        <li class="nav-list"><a class="nav-link" href="#about">About</a></li>
                        <li class="nav-list"><a class="nav-link" href="#jobs">Work History</a></li>
                        <li class="nav-list"><a class="nav-link" href="#works">UI/UX Designs</a></li>
                        <li class="nav-list"><a class="nav-link" href="#proj">Web Designs</a></li>
                        <li class="nav-list"><a class="nav-link" href="#contact">Contacts</a></li>
                </nav>

                <?php include ('info-sidebar.php') ?>

                <?php include ('main-body.php') ?> 

                <div class="back-to-top" id="toTop">
                        <a href="#top-body"><img src="/img/icons/top.png" alt=""></a>
                </div>

        </div>    
    </div>




<script>
        document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
            anchor.addEventListener("click", function (e) {
                e.preventDefault();

                const targetId = this.getAttribute("href").substring(1);
                const targetElement = document.getElementById(targetId);

                if (targetElement) {
                    targetElement.scrollIntoView({
                        behavior: "smooth",
                    });
                }
            });
        });

        $(document).ready(function () {  
            var $toggleButton = $("#toggleButton");
            var $toggle = $("#toggle");
    
            $toggleButton.click(function () { 
                $toggleButton.toggleClass("active");
                $("#nav").toggleClass("active");
                $("#overlay").toggleClass("active");
                $("#top-body").toggleClass("active");

                $("#toggle").removeClass("active");
                $("#sidebar").removeClass("active");
                $("#overlay2").removeClass("active");
            });

            $toggle.click(function () {
                $("#toggle").toggleClass("active");
                $("#sidebar").toggleClass("active");
                $("#overlay2").toggleClass("active");
                $("#top-body").toggleClass("active");

                $("#toggleButton").removeClass("active");
                $("#nav").removeClass("active");
            }); 
 
            $(".nav-link").click(function () {
                if ($("#nav").hasClass("active")) {
                    $("#nav").removeClass("active"); 
                    $("#overlay").removeClass("active"); 
                    $("#toggleButton").removeClass("active");
                    $("#top-body").removeClass("active");
                }
            });

            $("#overlay").click(function () {
                if ($("#overlay").hasClass("active")) {
                    $("#toggleButton").removeClass("active");
                    $("#nav").removeClass("active");
                    $("#overlay").removeClass("active");
                    $("#toggle").removeClass("active");
                    $("#sidebar").removeClass("active");
                    $("#top-body").removeClass("active");
                }
            });

            $("#overlay2").click(function () {
                if ($("#overlay2").hasClass("active")) {
                    $("#overlay2").removeClass("active");
                    $("#toggle").removeClass("active");
                    $("#sidebar").removeClass("active");
                    $("#top-body").removeClass("active");
                    $("#top-body").removeClass("active");
                }
            });
        });


        $(document).ready(function() {
            var roles = ["UI/UX Designer..", "Website Designer..", "Website Developer.."];
            var currentRoleIndex = 0; // Index of the current role
            var currentText = roles[currentRoleIndex]; // Initialize with the first role
            var speed = 100; // Typing speed in milliseconds
            var eraseSpeed = 50; // Erasing speed in milliseconds
            var delay = 1000; // Delay before erasing text in milliseconds

            function typeText() {
                var i = 0;
                var interval = setInterval(function() {
                    if (i < currentText.length) {
                        $('#typingText').append(currentText.charAt(i));
                        i++;
                    } else {
                        clearInterval(interval);
                        setTimeout(eraseText, delay);
                    }
                }, speed);
            }

            function eraseText() {
                var i = currentText.length;
                var interval = setInterval(function() {
                    if (i >= 0) {
                        $('#typingText').text(currentText.substring(0, i));
                        i--;
                    } else {
                        clearInterval(interval);
                        currentRoleIndex = (currentRoleIndex + 1) % roles.length; // Move to the next role
                        currentText = roles[currentRoleIndex]; // Get the text for the next role
                        setTimeout(typeText, delay);
                    }
                }, eraseSpeed);
            }  

            typeText(); // Start typing initially
        
        });    



        $(document).ready(function() {
            var hiddenDiv = $("#toTop");

            $(window).scroll(function() {
                // Get the current scroll position
                var scrollPosition = $(window).scrollTop();
                
                // Define the scroll position at which you want the div to appear
                var triggerScrollPosition = 400; // Adjust this value as needed

                if (scrollPosition >= triggerScrollPosition) {
                    // When the scroll position is greater than or equal to the trigger point, show the div
                    hiddenDiv.show();
                } else {
                    // Otherwise, hide the div
                    hiddenDiv.hide();
                }
            });
        });

        

</script> 
    
 
</body>
</html> 