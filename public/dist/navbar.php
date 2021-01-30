
<?php include ("base.php"); ?>
 
    

    <!-- NAVBAR SECTİON  -->

    <nav class="navbar p-0 m-0 navbar-expand-lg navbar-light">
        <a class="navbar-brand mt-2 ml-4" href="#">
            <img src="images/logom.png" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mr-3">
            <li class="nav-item">
              <a class="nav-link text-dark" href="<?php echo base_url("index.php");?>">Ana Sayfa <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item ml-3">
                <a class="nav-link text-dark" href="<?php echo base_url("hakkimizda.php");?>">Hakkımızda</a>
            </li>
            <li class="nav-item ml-3">
                <a class="nav-link text-dark" href="<?php echo base_url("ekibimiz.php");?>">Ekibimiz</a>
            </li>
            <li class="nav-item ml-3">
                <a class="nav-link text-dark" href="#">Faaliyetler</a>
            </li>
            <li class="nav-item ml-3">
                <a class="nav-link text-dark" href="<?php echo base_url("yayinlar.php");?>">Yayınlar</a>
            </li>
            <li class="nav-item ml-3">
                <a class="nav-link text-dark" href="<?php echo base_url("contact.php");?>">İletişim</a>
            </li>
            
          </ul>
          
        </div>
    </nav>


    


   
