<!DOCTYPE html>
<html lang="en">
<?php include("header.php"); ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
    

    <link rel="stylesheet" href="CSS/fonts.css">
    <link rel="stylesheet" href="CSS/hakkimizda.css">
    <link rel="stylesheet" href="CSS/footer.css">
    <link rel="stylesheet" href="CSS/contact.css">

    <title>Document</title>
</head>
<body>

<?php include ('navbar.php'); ?>


<div class="card back-img">
    <img src="images/contact-banner.png" alt="" class="card-img" style="opacity: 0.6;">
    <div class="card-img-overlay text-center mt-3 mt-sm-5 pt-2 pt-sm-5">
        <h5 class="card-title blc-white-roboto">İLETİŞİM</h5>
        <div class="line"></div>
        <div class="card-text mt-2 mt-sm-0 font-f-t">İletişime Geçin</div>
    </div>
</div>










    <div class="container mt-5">
        <div class="row d-flex justify-content-center">
            <h4 class="font-md-serrat">Biz İstanbul Beşiktaş'tayız.</h4>
        </div>
        <div class="row d-flex justify-content-center mt-3">
            <div class="line-contact"></div>
        </div>
        <div class="row d-flex justify-content-center mt-3 pb-4">
            <p class="font-mdl-serrat">İstediğiniz Zaman Bizimle</p>
            <span class="font-mdl-serrat ml-2">İletişime Geçebilirsiniz.</span>
        </div>







        <div class="row">
            <div class="col-md-4">
                <div class="row svg-icon d-flex justify-content-center">
                    <img src="images/contact/loc-icon.svg" alt="icon">
                </div>
                <div class="row d-flex justify-content-center ">
                    <div class="col-md-8 mt-4">
                        <small><p class="font-serrat text-center">Levent Mahallesi Manolyalı Sokak
                            <br>         
                        No:5 34330 İstanbul, Türkiye  </p></small>
                        <div class="row d-flex justify-content-center">
                            <a href="#" class="font-f-m">Harita</a>
                            <span><img class="icon-svg" src="images/icon/right-icon.svg" alt="right-icon"></span>
                        </div>
                        
                    </div>       
                </div>
                
                
            </div>
            <div class="col-md-4">
                <div class="row svg-icon d-flex justify-content-center">
                    <img src="images/contact/call.svg" alt="icon">
                </div>
                <div class="row d-flex justify-content-center ">
                    <div class="col-md-8 mt-4">
                        <small><p class="font-serrat text-center"> Tel: 0212 699 87 41
                            <br>         
                        Fax: 268-152-2965  </p></small>
                        <div class="row d-flex justify-content-center">
                            <a href="#" class="font-f-m">Harita</a>
                            <span><img class="icon-svg" src="images/icon/right-icon.svg" alt="right-icon"></span>
                        </div>
                    </div>       
                </div>
            </div>
            <div class="col-md-4">
                <div class="row svg-icon d-flex justify-content-center">
                    <img src="images/contact/clock.svg" alt="icon">
                </div>
                <div class="row d-flex justify-content-center ">
                    <div class="col-md-8 mt-4">
                        <small><p class="font-serrat text-center"> Haftaiçi: 08.00 - 18.00 
                            <br>         
                        Haftasonu: Kapalı  </p></small>
                        <div class="row d-flex justify-content-center">
                            <a href="#" class="font-f-m">Harita</a>
                            <span><img class="icon-svg" src="images/icon/right-icon.svg" alt="right-icon"></span>
                        </div>
                    </div>       
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row d-flex justify-content-center">
            <div class="line-two"></div>
        </div>
    </div>
    


    <div class="container mt-5">
        <div class="row d-flex justify-content-center">    
                <span><img class="icon-svg" src="images/social-media/facebook.svg" alt="icon-face"></span>
                <span><img class="icon-svg ml-3" src="images/social-media/twitter.svg" alt="icon-twitter"></span>
                <span><img class="icon-svg ml-3" src="images/social-media/gmail.svg" alt="icon-gmail"></span>       
        </div>
    </div>




    
    <div class="container-fluid">
        <div class="row d-flex justify-content-center">
        <div class="inner contact mt-5 mb-2">
                <!-- Form Area -->
                <div class="contact-form">
                    <!-- Form -->
                    <form id="contact-us" method="post" action="#">
                        <!-- Left Inputs -->
                        <div class="col-xs-5 wow animated slideInLeft" data-wow-delay=".5s">
                            <!-- Name -->
                            <input type="text" name="name" id="name" required="required" class="form" placeholder="Ad" />
                            <!-- Email -->
                            <input type="email" name="mail" id="mail" required="required" class="form" placeholder="Email adresi" />
                            <!-- Subject -->
                            <input type="text" name="subject" id="subject" required="required" class="form" placeholder="Konu başlığı" />
                        </div><!-- End Left Inputs -->
                        <!-- Right Inputs -->
                        <div class="col-xs-5 wow animated slideInRight" data-wow-delay=".5s">
                            <!-- Message -->
                            <textarea name="message" id="message" class="form textarea"  placeholder="Mesaj"></textarea>
                        </div><!-- End Right Inputs -->
                        <!-- Bottom Submit -->
                        <div class="relative fullwidth col-xs-12">
                            <!-- Send Button -->
                            <button type="submit" id="submit" name="submit" class="form-btn semibold">Mesajı Gönder</button> 
                        </div><!-- End Bottom Submit -->
                        <!-- Clear -->
                        <div class="clear"></div>
                    </form>

                    <!-- Your Mail Message -->
                    <div class="mail-message-area">
                        <!-- Message -->
                        <div class="alert gray-bg mail-message not-visible-message">
                            <strong>Teşekkürler!</strong> Mailiniz başarıyla iletilmiştir...
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

           

    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3007.3945666101563!2d29.0115693156674!3d41.0822249228196!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cab66f2bd8033b%3A0xc21450a1c7e0834b!2zTGV2ZW50LCBNYW5vbHlhbMSxIFNrLiBObzo1LCAzNDMzMCBCZcWfaWt0YcWfL8Swc3RhbmJ1bA!5e0!3m2!1str!2str!4v1611144373330!5m2!1str!2str" width="1903" height="400" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>



<?php include ('footer.php'); ?>


    



    <script src="https://kit.fontawesome.com/365601f972.js" crossorigin="anonymous"></script>
</body>
</html>