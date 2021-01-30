<!doctype html>
<html lang="en">
<?php include("header.php"); ?>
  <head>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300&display=swap" rel="stylesheet">    
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="CSS/fonts.css">
    <link rel="stylesheet" href="CSS/hakkimizda.css">

  </head>
  <body>

    


    <?php include ('navbar.php'); ?>



  <!-- TOP İMAGE SECTİON -->

  <div class="card back-img bg-dark text-white">
      <img class="card-img" src="images/hakkımızda/hak-img.jpg" alt="Card image">
    <div class="card-img-overlay text-center mt-3 mt-sm-5 pt-2 pt-sm-5">
      <h5 class="card-title blc-white-roboto">HAKKIMIZDA</h5>
      <div class="line"></div>
      <p class="card-text  mt-2 mt-sm-0 font-f-t">Firmamız Hakkında</p>

    </div>
  </div> 










    <div class="container mt-5 pb-5" style="max-width: 1650px;">
          <div class="row d-flex justify-content-center">
                <div class="col-md-5 about-company">
                  <img src="images/hakkımızda/my-company.jpg" alt="">
                </div>
                <div class="col-md-5">
                  <div style="width:40px; height:3px; background-color:black;"></div>
                      <h3 class="font-roboto mt-4">KAYAKOKSAL HAKKINDA</h3>
                      <p class="mt-5 font-roboto">KAYA KÖKSAL yerel ve uluslararası müvekkillerine her konuda tam servis sağlayan, şirketler hukuku, inşaat hukuku, iş hukuku, vergi, kişisel verilerin korunması ve uyuşmazlık çözümü konusunda geniş bilgi ve tercrübeye sahip avukatlarıyla İstanbul, Türkiye’de kurulmuş bir avukatlık ortaklığıdır.</p> 

                      <p class="mt-4 font-roboto">KAYA KÖKSAL, müvekkillerine en kaliteli ve etkili hizmeti sağlama felsefesi ile yola çıkmıştır ve müvekkillerine süre ve masraf açısından en verimli hizmeti sağlamaktadır. </p>

                      <p class="font-roboto">KAYA KÖKSAL’ın ağırlıklı çalışma alanları arasında birleşme ve devralmalar, ortak girişimler, ticari ve idari davalar, uluslararası tahkim, construction, iş hukuku, vergi mevzuatı ve uyumluluk denetimi ve yer almaktadır. </p>

                      <p class="mt-5 font-roboto">Daha ayrıntılı bilgi için “Uzmanlık Alanlarımız” kısmını ziyaret edebilirsiniz.
                </div>
                <div class="col-md-2">
                  <div class="card">
                    <h5 class="card-header text-center">Önemli Linkler</h5>
                    <div class="card-body">
                      <div class="row d-flex justify-content-center">
                        <ul class="list-unstyled">
                          <li class="mt-2">
                            <a href="#">Ana Sayfa</a>
                          </li>
                          <li class="mt-2">
                            <a href="#">Hakkımızda</a>
                          </li>
                          <li class="mt-2">
                            <a href="#">Ekibimiz</a>
                          </li>
                          <li class="mt-2">
                            <a href="#">Faaliyetler</a>
                          </li>
                          <li class="mt-2">
                            <a href="#">Yayınlar</a>
                          </li>
                          <li class="mt-2">
                            <a href="#">İletişim</a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
          </div>
    </div>

       
          




           
















          <!-- BİZİMLE İLETİŞİME GEÇİN 

          <div class="card back-two-img text-white mt-5 pb-5" style="background-color:#ffc277;">
            <div class="text-center d-flex justify-content-center mt-2">
              <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="col-md-8 col-sm-12">
                      <h4 class="card-title contact blc-white-roboto word-sp-4 mt-5">HEMEN BİZİ ARAYIN</h4>
                      <div class="line"></div>
                      <h2 class="blc-white-roboto mt-2">İLETİŞİM HATTI</h2>
                    </div>
                    <div class="col-md-8 col-sm-12 mt-2">
                        <h2 class="blc-white-roboto">+90 539 587 58 98</h2>
                    </div>
                    <div class="col-md-12 col-sm-12 mt-3">
                      <button class="contact-me">İLETİŞİM İÇİN</button>
                    </div>
                </div>
              </div>
              
              
            </div>
          </div>

          -->
          











          <?php include ('footer.php'); ?>


    





          
    <script src="https://kit.fontawesome.com/365601f972.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="JS/owl-carousel/owl.carousel.min.js"></script>


    <script>
       jQuery(document).ready(function ($) {
        $(".owl-carousel").owlCarousel({
            dots:false,
            loop:true,
            margin:10,
            nav:true,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:2
                },
                1000:{
                    items:3
                }
            }
        });

      });
       
     </script>
     

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  
  
  
  
  
  
  
  
  
  
  
  </body>
</html>