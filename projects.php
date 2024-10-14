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
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" /> 


    <title>Adrianne Apon</title>
</head>  
<body class="body" id="top-body"> 
    
    <div class="index-body">
        <div class="container"> 

                <div class="toggle" id="toggle"><img src="/img/icons/dots.png" alt=""></div>

                <?php include ('info-sidebar.php') ?>

                <?php include ('works.php') ?>  

                

                <div class="back-to-top" id="toTop">
                        <a href="#top-body"><img src="/img/icons/top.png" alt=""></a>
                </div>


        </div>    
    </div>



    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>

<script>  

    $(document).ready(function () {   
        var $toggle = $("#toggle"); 

        $toggle.click(function () {
            $("#toggle").toggleClass("active");
            $("#sidebar").toggleClass("active");
            $("#overlay2").toggleClass("active");
            $("#top-body").toggleClass("active");

            $("#toggleButton").removeClass("active");
            $("#nav").removeClass("active");
        }); 

        $("#overlay2").click(function () {
            if ($("#overlay2").hasClass("active")) {
                $("#overlay2").removeClass("active");
                $("#toggle").removeClass("active");
                $("#sidebar").removeClass("active");
                $("#top-body").removeClass("active");
            }
        });
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

    


    AOS.init({
    duration: 1000,
    once: false,
    });
  
</script> 
 

    
 
</body>
</html> 