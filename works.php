 
                
<div class="main-body-wrapper portfolio" id="main-body-wrapper">  

    <a class="home" href="/"></a>

    <div class="title"><p class="poppins-22 semibold">PROJECTS</p></div>
                      
    <div class="tab-pane">
        <p class="poppins-16 active" id="uidesign">UI & UX DESIGN</p>
        <p class="poppins-16" id="webdesign">WEBSITE DESIGN</p>
    </div>

 
    
    <div class="design-wrapper uidesign-wrapper active" id="uidesign-box">
                <?php include ('uidesign.php') ?>  
    </div>





    <div class="design-wrapper  webdesign-wrapper" id="webdesign-box">
                <?php include ('webdesign.php') ?>  
    </div>




    

                <div class="main-wrapper contact" id="contact">
                                        <div class="title" data-aos="fade-right"><p class="poppins-22 semibold">Get in touch</p></div>

                                        <div class="contact-info-wrapper">
                                                <p class="poppins-16 parag" data-aos="fade-up">Message or Contact me through <b>Whatsapp</b>, <b>Viber</b>, or <b>Telegram</b> at <a class="contact-info" href="tel:+63 945 411 6411">+63 945 411 6411</a></p>
                                                <p class="poppins-16 parag" data-aos="fade-up">or <b>email</b> me through <a class="contact-info" href="mailto:adrianneapon@gmail.com">adrianneapon@gmail.com</a></p> 
                                        </div> 
                </div>

                <div class="footer"> 
                        <p class="poppins-13 light parag">© 2023 Adrianne Apon Design. All Rights Reserved.</p>
                </div>
    
 
</div> 

<script>
        
        $(document).ready(function () {  
            var $uidesign = $("#uidesign");
            var $webdesign = $("#webdesign");
    
                $uidesign.click(function () { 
                        $("#uidesign-box").addClass("active");  
                        $("#uidesign").addClass("active");  

                        $("#webdesign-box").removeClass("active"); 
                        $("#webdesign").removeClass("active"); 
                }); 
    
                $webdesign.click(function () {  
                        $("#webdesign-box").addClass("active");  
                        $("#webdesign").addClass("active");  

                        $("#uidesign-box").removeClass("active"); 
                        $("#uidesign").removeClass("active");  
                }); 
        });
</script>