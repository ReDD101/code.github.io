<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" type="x-icon" href="imgs/cathsoc/cathsoc-removebg-preview.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cathsoc|about</title>

     <!-- swiper css file link-->
     <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />


    <!--font awesome cdn link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    
    <!-- custome css file link-->
    <link rel="stylesheet" href="style.css">

<!-- swiper js  link-->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>


<!-- custome js file link-->
<script type="text/javascript" src="script.js"></script>
</head>
<body>













 

 
</body>


</html>
 <!-- header section starts-->
 <section class="header">
 <img src="imgs/cathsoc/cathsoc-removebg-preview.png" alt="logo" class="hello">
<a href="home.php" class="logo ">Cathsoc@Cut.</a>

<nav class="navbar">
    <a href="home.php">home</a>
    <a href="about.php">about</a>
    <a href="package.php">package</a>
    <a href="suggestion.php">suggestion</a>
    <a href="gallery.php">gallery</a>
    <a href="login.php">dashboard</a>

</nav>

<div id="menu-btn" class="fas fa-bars"></div>

</section>
<script>
    let menu = document.querySelector('#menu-btn');
let navbar = document.querySelector('.header .navbar');

document.addEventListener('click', (event) => {
  // Check if the clicked element is the menu button or part of the navigation bar
  const isMenuButton = event.target === menu || menu.contains(event.target);
  const isNavbar = event.target === navbar || navbar.contains(event.target);

  if (isMenuButton) {
    // Toggle menu button and navigation bar
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
  } else if (!isNavbar) {
    // Close menu if clicked outside the menu button and navigation bar
    menu.classList.remove('fa-times');
    navbar.classList.remove('active');
  }
});
</script>
  <!-- header section ends-->

<div class="heading" style="background: url(imgs/cathsoc/sunday_vibes.jpg) no-repeat;">
    <h1>about us</h1>
</div>
  <!-- about section starts-->
  <section class="about">
<div class="image">

<img src="imgs/cathsoc/terrific_.jpg" alt="">
</div>

<div class="content">
  <h3>why choose us?</h3>
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus quidem velit doloremque vero facilis laudantium sed eos porro saepe deleniti facere omnis, et labore, praesentium voluptatum iure voluptate tenetur cumque.</p>
  <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illum ab, veritatis quos quas unde repudiandae esse nam perferendis, explicabo delectus aliquid voluptatum debitis dolorem quisquam aut tempora fugit optio? Voluptatibus.</p>

  <div class="icons-container">
    <div class="icons">
      <i class="fa fa-universal-access"></i>
      <span>unity</span>
    </div>
    <div class="icons">
      <i class="fa fa-heart"></i>
      <span>love</span>
    </div>

    <div class="icons">
      <i class="fas fa-headset"></i>
      <span>support</span>
    </div>

  </div>
</div>



  </section>


  <section class="reviews">
  <div class="swiper reviews-slider">
    <h1 class="heading-title">Meet the Executive</h1>

    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <div class="stars">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
        </div>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
        <h3>MIKE TEMBO</h3>
        <span>President</span>
        <img src="imgs/cathsoc/MIKE.jpg" alt="">
      </div>

      <div class="swiper-slide">
        <div class="stars">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
        </div>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
        <h3>ELMA MLAMBO</h3>
        <span>Vice President</span>
        <img src="imgs/cathsoc/Elma.jpg" alt="">
      </div>

      <div class="swiper-slide">
        <div class="stars">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
        </div>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
        <h3>Rumbie</h3>
        <span>secretary</span>
        <img src="imgs/cathsoc/rumbie.jpg" alt="">
      </div>

      <!-- Add more swiper-slide elements for each executive member -->
      <!-- Example:
      <div class="swiper-slide">
        <div class="stars">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
        </div>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
        <h3>EXECUTIVE NAME</h3>
        <span>EXECUTIVE POSITION</span>
        <img src="imgs/cathsoc/executive_photo.jpg" alt="">
      </div>
      -->

      <div class="swiper-slide">
        <div class="stars">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
        </div>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
        <h3>JOANNE</h3>
        <span>P.R.O</span>
        <img src="imgs/cathsoc/mkaseke.jpg" alt="">
      </div>
      

      <div class="swiper-slide">
        <div class="stars">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
        </div>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
        <h3>Gatzman</h3>
        <span>org-sec</span>
        <img src="imgs/cathsoc/gatzman.jpg" alt="">
      </div>
      

      <div class="swiper-slide">
        <div class="stars">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
        </div>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
        <h3>Shamiso Moira</h3>
        <span>Treasurer</span>
        <img src="imgs/cathsoc/MOIRA.jpg" alt="">
      </div>
      

      <div class="swiper-slide">
        <div class="stars">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
        </div>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
        <h3>Michael Malunga</h3>
        <span>Projects Manager</span>
        <img src="imgs/cathsoc/MALUNGA.jpg" alt="">
      </div>
      

      <div class="swiper-slide">
        <div class="stars">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fa-solid fa-star-half-stroke"></i>
          <i class="fa-solid fa-star-half-stroke"></i>
        </div>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
        <h3>PANASHE BALDWIN MANYERA</h3>
        <span>REGIONAL secretary</span>
        <img src="imgs/cathsoc/beezie sachy.jpg" alt="">
      </div>
     

      <div class="swiper-slide">
        <div class="stars">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
        </div>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
        <h3>Chantelle</h3>
        <span>Liturgist</span>
        <img src="imgs/cathsoc/chanty.jpg" alt="">
      </div>
      

      <div class="swiper-slide">
        <div class="stars">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fa-solid fa-star-half-stroke"></i>
        </div>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
        <h3>Tanatswa</h3>
        <span>liturgist</span>
        <img src="imgs/man-with-bag-and-walking-stick.png" alt="">
      </div>

      <div class="swiper-slide">
        <div class="stars">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fa-duotone fa-star"></i>
        </div>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
        <h3>JUBBEZ</h3>
        <span>NATIONAL ORG-SEC</span>
        <img src="imgs/Cathsoc/jubez.jpg" alt="">
      </div>
      
      


    </div>

    <div class="swiper-pagination"></div>
  </div>

  <!-- Include the Swiper library -->
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

  <script>
    var swiper = new Swiper(".reviews-slider", {
      slidesPerView: 4,
      centeredSlides: true,
      spaceBetween: 30,
      grabCursor: true,
      loop: true,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
    });
  </script>
</section>

  <!-- reviews section ends-->



  <!-- footer section starts-->

<section class="footer">

<div class="box-container">
    <div class="box">
      <h3>quick links</h3>
      <a href="home.php"> <i class="fas fa-angle-right></i>"></i>home</a>
      <a href="about.php"><i class="fas fa-angle-right></i>"></i>about</a>
      <a href="package.php"><i class="fas fa-angle-right></i>"></i>package</a>
      <a href="suggestion.php"><i class="fas fa-angle-right></i>"></i>suggestion</a>
      <a href="gallery.php"><i class="fas fa-angle-right></i>"></i>gallery</a>
      <a href="login.php"><i class="fas fa-angle-right></i>"></i>dashboard</a>
    </div>
    <div class="box">
      <H3>extra links</H3>
      <a href="suggestion.php"><i class="fas fa-angle-right"></i>ask questions</a>
      <a href="about.php"><i class="fas fa-angle-right"></i>about us</a>
      <a href="#"><i class="fas fa-angle-right"></i>privacy policy</a>
      <a href="#"><i class="fas fa-angle-right"></i>terms of use</a>
    </div>
    <div class="box">
    <H3>contact info</H3>
    <a href="#"><i class="fas fa-phone"></i>+263 78 739 1078</a>
    <a href="https://mail.google.com/mail/u/2/#inbox"><i class="fas fa-envelope"></i>CathsocCut@gmail.com</a>
    <a href="https://www.bing.com/search?pglt=43&q=-17.35331817434099%2C+30.205743042087533&cvid=ef2d55ab8e7448578ba747f5d1dd2d8b&gs_lcrp=EgZjaHJvbWUyBggAEEUYOTIHCAEQRRj8VdIBBzk1MmowajGoAgCwAgA&FORM=ANSAB1&PC=U531"><i class="fas fa-map"></i>Harare, Zimbabwe </a>
    </div>
    <div class="box">
      <h3>follow us</h3>
      <a href="https://www.facebook.com/CUTCathsoc"><i class="fab fa-facebook-f"></i>facebook</a>
      <a href="#"><i class="fab fa-twitter"></i>twitter</a>
      <a href="https://instagram.com/cathsoc_cut?igshid=NzZlODBkYWE4Ng=="><i class="fab fa-instagram"></i>instagram</a>
      <a href="#"><i class="fab fa-linkedin"></i>linkedin</a>
    </div>
    
</div>
<div class="credit">created by <span>Shinigami.Nyamayaro</span> | &copy; <span id="currentYear"></span> all rights reserved</div>

<script>
  // Get the current year
  var currentYear = new Date().getFullYear();

  // Set the current year in the HTML element
  document.getElementById("currentYear").textContent = currentYear;
</script>

</section>

 <!-- footer section ends-->

 <style>
    .heading-title{
  text-align: center;
  margin-bottom:3rem ;
  font-size: 7rem;
  text-transform:uppercase;
  color:var(--black);

    }
</style>