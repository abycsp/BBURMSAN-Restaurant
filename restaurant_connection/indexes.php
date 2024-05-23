<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bburnmsam</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/59c8d2dc7b.js" crossorigin="anonymous"></script>
</head>
<body>
  <!--Nav Bar-->
  <nav class="navbar navbar-expand-lg bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#" style="color: white"><img src="loggo.png" alt="logo" width="60" height="54" class="logob d-inline-block align-text">
       <b><i>BBURMSAM</i></b> Restaurant</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">   
          <li class="nav-item">
            <a class="nav-link" href="indexes.php" style="color: white">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="productuser.html" style="color: white">Products</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="reservationuser.html" style="color: white">Reservations</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="aboutuser.html" style="color: white">About us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="maintenanceuser.php" style="color: white">Maintenance</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" style="color: white" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="fa-solid fa-user"></i>
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
              <li><a class="dropdown-item" href="login_form.php">Log Out</a></li>
              <li><a class="dropdown-item" href="contact.html">Contact Us</a></li>
              <li><a class="dropdown-item" href="members.html">Members</a></li>
            </ul>
          </li>
        </ul>           
      </div>
    </div>
  </nav>
      <!--Carousel slides-->
      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" 
          aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" 
          aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" 
          aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="pic1.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption">
              <h5>Appetizing foods</h5>
              <p>A good restaurant prides itself on the quality of the food that it serves to its visitors</p>
              <p><a href="#" class="btn btn-dark mt-3">Explore More</a></p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="pic2.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption">
              <h5>The Right Mood</h5>
              <p>A good restaurant will make sure that they go to great lengths to set the appropriate mood so that the dining experience is as comfortable and enjoyable as possible.</p>
              <p><a href="#" class="btn btn-dark mt-3">Explore More</a></p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="pic3.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption">
              <h5>Great Ambiance</h5>
              <p>A good restaurant will have a team of diligent and hardworking staff who are committed to doing everything that they can to ensure that you enjoy your meal.</p>
              <p><a href="#" class="btn btn-dark mt-3">Explore More</a></p>
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

     <!--Bcakground of bburmsam-->
     <section id="about" class="about  section-padding">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-12 col-12">  
            <div class="about-img">
              <img src="restau.jpg" alt="resto" class="img-fluid">
            </div>
          </div>
        <div class="col-lg-8 col-md-12 col-12">
          <div class="about-text">
            <h2>Why BBURMSAM Restaurant <br> is the <i>best?</i></h2>
            <p class="justify">In the metros buffet scene, one of the restaurants you would immediately associate with would be BBURMSAM. 
              As one of the best buffet restaurants here in the Philippines, BBURMSAM offers something which makes it more loved by its customers.
              BBURMSAM has made noise for being one of the best buffets in the Philippines. They have smokeless grill as they
               have various cuisine. They have all sorts of your favorite dishes so be sure to try it.</p>
               <a href="about.html">
               <button type="button" class="btn btn-dark">Read More</button></a>
          </div>
        </div>
        </div>
      </div>
    </section>

    <!--card hover-->
    <div class="container features">
      <h3 class = "why" >SKILLS THAT MUST HAVE TO BECOME A GREAT CHEF FROM OUR TOP CHEFS</h3>
      <hr>
      <br>
    <div class="row row-cols-1 row-cols-md-3 g-4">
      <div class="col">
        <div class="card h-100">
          <img src="cong.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Chef Cong Tivee</h5>
            <p class="card-text" class="justify">Becoming a chef can be a hands-on learning experience, and like they say, practice does make perfect. You must master flavours and techniques of different dishes which can take time and a lot of energy. 
             </p>
            </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100">
          <img src="toni.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Chef Toni Gonzaga</h5>
            <p class="card-text" class="justify">A Head Chef will be able to do this very well, they will also understand and know what the customers are experiencing, 
              and what the front of house team are doing at any point during service.</p>
            </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100">
          <img src="vice.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Chef Vice Ganda</h5>
            <p class="card-text"  class="justify"> Becoming a chef involves more than just following a recipe.
              A chef will be creative in terms of putting a menu together, how the dish looks on the plate, and how it tastes to the customers.</p>
            </div>
        </div>
      </div>
    </div>
  </div>

  <!--Footer section-->
    <footer class="page-footer">
      <div class="container">    
        <div class="row"> 
          <div class="col-lg-8 col-md-8 col-sm-12">   
          <h6 class="text-uppercase font-weight-bold">Additional Information</h6>   
          <p>Having dined at Bburnmsam, This restaurant offers one of the best 
            self-service buffet experiences. The staff are very attentive and looks after the customers well. 
            When they see that a buffet chafer is running low on grub, they quickly re-stock for diners to get a fresh bite of every dish.</p>   
        </div>   
        <div class="col-lg-4 col-md-4 col-sm-12"> 
          <h6 class="text-uppercase font-weight-bold">Contact</h6>    
          <p> Bburmsam 123, g1land, Philippines  
          <br/> Group1@mywebsite.com  
          <br/>+ 01 234 567 88   
          <br/>+ 01 234 567 89</p>  
        </div>  
      </div>   
      </div>
     <div class="footer-copyright text-center">© 2022 Copyright: MyWebsite.com</div> 
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" 
    crossorigin="anonymous"></script>
</body>
</html>