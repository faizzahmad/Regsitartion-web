<?php

session_start();
// if(!isset($_SESSION['username'])){
//   header('location:logout.php');
// }

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Test series</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   

    <!-- favicons -->

<link rel="icon" type="image/png" sizes="32x32" href="favicon//favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="favicon//favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="favicon/">
<link rel="manifest" href="/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
<style>
    @import url('https://fonts.googleapis.com/css2?family=Lato:wght@100&family=Patrick+Hand&display=swap');

*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

:root{
  --btn-color : #FF0000;
  --white-color : #fff;
}

/* Header section */

 .btn{
   
    background-color: var(--btn-color);
    border-radius: 0px ;
    box-shadow: 2px 2px 3px rgb(151, 147, 147);
    font-weight: 600;
    color: var(--white-color);
    transition: all 0.3s ease-in-out;
 }

 .btn:hover{
    background-color: transparent;
    color: var(--btn-color);
    border: 1px solid var(--btn-color);
 }

 .navbar-nav .nav-item .nav-link{
    font-weight: 600;
    font-size: 17px;
 }

 .navbar-nav .nav-item .nav-link:hover{
    color: var(--btn-color);
 }


 .dropdown-menu{
    border: 1.5px solid var(--btn-color);
 }

.dropdown-menu .dropdown-item{
        transition: all 0.3s ease-in-out;
}

 .dropdown-menu .dropdown-item:hover{
    background-color: var(--btn-color);
    color: white;
 }

 .dropdown-divider{
    border-top: 1px solid red;
 }

 .navbar-toggle{
    border: 2px solid var(--btn-color);
    box-shadow: 2px 2px 3px  rgb(151, 147, 147);
 }

 .d-block{
    width: auto;
    height: 450px;
 }
 html{
    scroll-behavior: smooth;
 }
 
 .abouthead{
    color: var(--btn-color);
    text-align: center;
    font-size: 22px;
    letter-spacing: 1.5px;
 }
header{
    position: sticky;
    top: 0px;
    bottom: 0px;
    left: 0;
    right: 0;
    z-index: 1000;
    background-color: var(--white-color);
}

.fbtn{
    color: var(--white-color);
    background-color: rgb(6, 6, 128);
    font-weight: 600;
    padding: 6px 0px 6px 0px ;
    transition: all 0.3s ease-in-out;
    border: 2px solid rgb(6, 6, 128);
}
.fbtn:hover{
    background: transparent;
    color: rgb(6, 6, 128);  
}
.ibtn{
    background-color: transparent;
    border: 2px solid rgb(6, 6, 128);
    font-weight: 600;
    padding: 6px 0px 6px 0px ;
    color: rgb(6, 6, 128);
    transition: all 0.3s ease-in-out;
}
.ibtn:hover{
     background-color:  rgb(6, 6, 128);
     color: white;
}

.btnab{
    color: var(--white-color);
    background-color: rgb(6, 6, 128);
    font-weight: 600;
    padding : 10px 15px 10px 15px;
    transition: all 0.3s ease-in-out;
    border: 2px solid rgb(6, 6, 128);
}
.btnab:hover{
    background: transparent;
    color: rgb(6, 6, 128);
}




 
</style>

  </head>
  <body>
    
    <!-- navbar -->

    <header>
        <nav class="navbar navbar-expand-lg mb-lg-4 navbar-toggle">
            <div class="container-fluid">
              <a class="navbar-brand ms-sm-3 ms-lg-5" href="#"><img src="images/logo.png" width="150px" alt="comapny logo"></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 me-5">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#about">About Us</a> 
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Pricing</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Contact Us</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                     Log-in
                    </a>
                    <ul class="dropdown-menu mt-3 mb-3 mb-lg-0">
                      <li><a class="dropdown-item" href="#">Student</a></li>
                      <li><a class="dropdown-item" href="#">Institute</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                    </ul>
                    <li class="nav-item">
                        <a href=""> <button class="btn mt-3 mt-lg-0">9987 564 876  <i class="fa-sharp fa-solid fa-phone"></i></button></a>
                      </li>
                 
                </ul>
               
              </div>
            </div>
          </nav>
    </header>
    <!-- content -->

    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="images/carousel/carousel 1.jpg"  class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5> hello <?php echo $_SESSION['username']; ?> </h5>
              <p>Get exam-ready with concepts, questions and study notes as per the latest pattern.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="images/carousel/carousel 2.jpg" height="600px" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Second slide label</h5>
              <p>Some representative placeholder content for the second slide.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="images/carousel/carousel3.jpg"  class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Third slide label</h5>
              <p>Some representative placeholder content for the third slide.</p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

      <section class="mt-5" id="about">
        <div class="container mt-4">
            <div class="row">
                <div class="col-md-7">
                    <h1>This is heading</h1>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Obcaecati dolor veniam molestiae placeat nostrum corporis quae tenetur, error harum quibusdam exercitationem beatae iste, pariatur, iure dolorem dolorum minima! Molestiae earum accusamus eos eum nihil illo natus, impedit at voluptatem error, aperiam amet et dolore saepe quaerat quae ipsa, consequatur voluptates cumque obcaecati sed? Reiciendis, minima animi! Sapiente quia numquam totam id facere quos, dolorem repellendus at officiis reiciendis sint unde quo et non sunt ab voluptate explicabo eveniet quae eius illo omnis aliquid soluta deleniti! Illo, non dicta sunt recusandae autem eligendi a aperiam quae suscipit maxime, repellat, sit temporibus.</p>
                   <a href=""></a><button class="col-md-3 fbtn me-3">Facebook <i class="fa-brands fa-facebook"></i></button></a>
                   <a href=""></a><button class="col-md-3 ibtn">Instagram <i class="fa-brands fa-instagram"></i></button></a>
                </div>
                <div class="col-md-5">
                    <img src="images/background/pngtree-concept-of-online-exam-on-internet-png-image_6060987-removebg-preview.png" alt="">
                </div>
                <div class="col-md-4 mt-3" id="">
                    <h2>Unlimited Test & Questions <i class="fa-solid fa-laptop"></i> </h2>
                    <p class="mt-3">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Neque earum commodi culpa vel, placeat distinctio veritatis deleniti dolore! Harum commodi quas expedita reiciendis accusamus provident quia voluptatibus placeat facilis veritatis.</p>
                    <button class="btnab mt-4">View details <i class="fa-solid fa-eye"></i></button>
                      
                </div>
                <div class="col-md-4 mt-3" id="">
                    <h2>Unlimited Student Registration <i class="fa-solid fa-users"></i> </h2>
                    <p class="mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga at repellendus, ipsum ratione distinctio tenetur voluptates nesciunt corporis, commodi ducimus sapiente excepturi sequi placeat error harum. Laborum, ipsa. Minus, veritatis.</p>

                    <button class="btnab mt-4">View details <i class="fa-solid fa-eye"></i></button>
                </div>
                <div class="col-md-4 mt-3" id="">
                    <h2>Unlimited Test <br> Attemps <i class="fa-solid fa-pen-nib"></i></h2>
                    <p class="mt-3">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Earum nobis eum repellat ipsa, odio voluptatum fugiat unde autem, voluptates consequatur impedit reprehenderit accusamus tenetur quia assumenda amet soluta dicta rerum. dfdhiuhi</p>
                    <button class="btnab mt-4">View details <i class="fa-solid fa-eye"></i></button>
                </div>
            </div>
            <br>
            <br>
        </div>
      </section>

      <section id="contact" class="mt-4">
        <div class="container">
           <h1>Contact Us  <i class="fa-sharp fa-solid fa-id-card"></i></h1>
           <div id="contact" class="container">
            <hr class="new4">
            <div class="row">
              <div class="col-md-4">
                <p>CONTACT US</p>
                <p><span class="glyphicon glyphicon-map-marker" style="color:#3601B3"></span> East Boring Canal Road, Behind Laxmi Inn Hotel, Near Reliance Trends, Rajapul, Patna (Bihar).</p>
                <p><span class="glyphicon glyphicon-phone" style="color:#3601B3"></span> Phone: +91 9708046126, 9708269608</p>
                <p><span class="glyphicon glyphicon-envelope" style="color:#3601B3"></span> Email: info@sanitysoftwares.com</p>
              </div>
              <div class="col-md-8">
                <div class="row">
                  <div class="col-sm-6 form-group">
                    <input class="form-control" id="name" name="name" placeholder="Name" type="text" required="">
                  </div>
                  <div class="col-sm-6 form-group">
                    <input class="form-control" id="email" name="email" placeholder="Email" type="email" required="">
                  </div>
                </div>
                <textarea class="form-control mt-2" id="comments" name="comments" placeholder="Comment" rows="5"></textarea>
                <br>
                <div class="row">
                  <div class="col-md-12 form-group">
                    <button class="btn pull-right" type="submit">Send <i class="fa-light fa-paper-plane-top"></i></button>
                  </div>
                </div>
              </div>
            </div>
            <br>
            <h3 class="text-center" style="color:#3601B3; font-weight:600">Google Map</h3>  
            <hr class="new4"> 
          
            <div class="tab-content">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3597.5356542556788!2d85.13725931525536!3d25.620341820689433!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ed58312ae1c641%3A0x96b1ea178498bf00!2sSanity%20Softwares!5e0!3m2!1sen!2sin!4v1645265073576!5m2!1sen!2sin" width="100%" height="220" allowfullscreen="" style="border:2px solid #ccc; border-radius:10px;"></iframe>
          
            </div>
            
          </div>
        </div>
      </section>

      <footer>
        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
            <div class="col-md-4 d-flex align-items-center">
              <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
                <svg class="bi" width="30" height="24"><use xlink:href="#bootstrap"></use></svg>
              </a>
              <span class="mb-3 mb-md-0 text-muted">© 2022 Company, Inc</span>
            </div>
        
            <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
              <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#twitter"></use></svg></a></li>
              <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#instagram"></use></svg></a></li>
              <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#facebook"></use></svg></a></li>
            </ul>
          </footer>
      </footer>
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="js/main.js"></script>
  </body>
</html>