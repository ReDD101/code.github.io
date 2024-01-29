<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" type="x-icon" href="imgs/cathsoc/cathsoc-removebg-preview.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cathsoc|home</title>

     <!-- swiper css file link-->
     <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />


    <!--font awesome cdn link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    
    <!-- custome css file link-->
    <link rel="stylesheet" href="style.css">

<!-- swiper js  link-->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<style>
    
#preloader {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  display: flex;
  justify-content: center;
  align-items: center;
  background-color: #f2f2f2;
  z-index: 9999;
}

/* Modify the styles for the preloader image */
#preloader img {
  width: 100px; /* Adjust the width as needed */
  height: 100px; /* Adjust the height as needed */
  animation: spin 2s linear infinite; /* Adjust the animation duration as needed */
}

@keyframes spin {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(180deg);
  }
}
</style>

<!-- custome js file link-->
<script src="script.js"></script>
</head>
<body>
<div id="preloader">
  <img src="imgs/cathsoc/R.gif" alt="Preloader">
</div>

<script>
  window.addEventListener("load", function () {
    var preloader = document.getElementById("preloader");
    
    // Set the time frame (in milliseconds) for the preloader to display
    var displayTime = 4000; // 4 seconds

    setTimeout(function () {
      preloader.style.display = "none";
    }, displayTime);
  });
</script>

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
document.addEventListener('DOMContentLoaded', function() {
  // Your code here


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
})
});
</script>
<!-- header section ends-->

<!-- home section starts-->
    <section class="home">
        <div class="swiper home-slider">
          <div class="swiper-wrapper">
       <div class="swiper-slide slide" style="background: url(imgs/cathsoc/friendship.jpg) no-repeat;">
              <div class="content">
                    <span>explore,dicover,Meditate</span>
                    <h3>a family that prays together stays together</h3>
                    <a href="package.php" class="btn">discover more</a>
              </div>
            </div>

            <div class="swiper-slide slide" style="background: url(imgs/cathsoc/hands.jpg) no-repeat;">
              <div class="content">
                    <span>explore,dicover, Enjoy</span>
                    <h3>discover yourself</h3>
                    <a href="package.php" class="btn">discover more</a>
              </div>
            </div>

            <div class="swiper-slide slide" style="background: url(imgs/cathsoc/pray.jpg) no-repeat;">
              <div class="content">
                    <span>explore,dicover,Celebrate</span>
                    <h3>make it worth your while</h3>
                    <a href="package.php" class="btn">discover more</a>
              </div>
            </div>
            <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-pagination"></div>
    <div class="autoplay-progress">
      <svg viewBox="0 0 48 48">
        <circle cx="24" cy="24" r="20"></circle>
      </svg>
      <span></span>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
  const progressCircle = document.querySelector(".autoplay-progress svg");
  const progressContent = document.querySelector(".autoplay-progress span");
  var swiper = new Swiper(".home-slider", {
    loop:true,
    spaceBetween: 30,
    centeredSlides: true,
    autoplay: {
      delay: 3500,
      disableOnInteraction: false
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev"
    },
    on: {
      autoplayTimeLeft(s, time, progress) {
        progressCircle.style.setProperty("--progress", 1 - progress);
        progressContent.textContent = `${Math.ceil(time / 1500)}s`;
      }
    }
  });
</script>
    </section>

<!-- home section ends-->


<!-- services section starts-->
<section class="services">
    <h1 class="heading-title">our services</h1>
    <div class="box-container">
        <div class="box">
            <img src="imgs/map.png" alt="">
            <h3>adventure</h3>
        </div>
        <div class="box">
            <img src="imgs/tour-bus.png" alt="">
            <h3>touring</h3>
        </div>
        <div class="box">
            <img src="imgs/cathsoc/community-removebg-preview.png" alt="">
            <h3>charity visits</h3>
        </div>
        <div class="box">
            <img src="imgs/bonfire.png" alt="">
            <h3>Masses</h3>
        </div>
        <div class="box">
            <img src="imgs/cathsoc/party.gif" alt="">
            <h3>social Outings</h3>
        </div>
        <div class="box">
            <img src="imgs/man-with-bag-and-walking-stick.png" alt="">
            <h3>Pilgrimages</h3>
        </div>
    </div>
   
</section>
<!-- services section ends-->

<!-- home about section starts-->
    <section class="home-about">
<div class="image">
    <img src="imgs/cathsoc/get-together.jpg" alt="">
</div>

<div class="content">
    <h3>about us</h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt molestiae nostrum consequatur sequi, sapiente nobis unde obcaecati? Perferendis aspernatur dicta voluptas vel provident quidem minima, est alias ipsam dolores repudiandae?</p>
    <a href="about.php" class="btn">read more</a>
</div>

    </section>


<!-- home about section ends-->

<!-- home offer section starts-->
<section class="home-offer">
<div class="content">
    <h3>join the family</h3>
    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Enim aliquid pariatur modi iure maxime minus animi, consectetur voluptas saepe? Minima voluptas hic aspernatur debitis in possimus dolores dolor quaerat minus?</p>
    <a href="gallery.php"class="btn">View now</a>
</div>








</section>



<!-- home offer section ends-->

<!-- home packages section starts-->
<section class="home-packages">
    <h1 class="heading-title">Our Events</h1>
    <div class="box-container">
        <div class="box">
            <div class="image">
                <img src="imgs/cathsoc/soxial.jpg" alt="">
            </div>
            <div class="content">
                <h3>Communication Hubs</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ratione ipsam architecto, consequuntur quas assumenda laudantium atque distinctio asperiores ipsa obcaecati reiciendis quaerat facilis? Voluptate, quos? Hic quibusdam aut impedit qui.</p>
                <a href="suggestion.php" class="btn">Comment Now</a>

            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="imgs/cathsoc/soxial2.jpg" alt="">
            </div>
            <div class="content">
                <h3>Social Outings</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ratione ipsam architecto, consequuntur quas assumenda laudantium atque distinctio asperiores ipsa obcaecati reiciendis quaerat facilis? Voluptate, quos? Hic quibusdam aut impedit qui.</p>
                <a href="suggestion.php" class="btn">comment now</a>

            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="imgs/cathsoc/conference_easter.jpg" alt="">
            </div>
            <div class="content">
                <h3>National Conference</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ratione ipsam architecto, consequuntur quas assumenda laudantium atque distinctio asperiores ipsa obcaecati reiciendis quaerat facilis? Voluptate, quos? Hic quibusdam aut impedit qui.</p>
                <a href="suggestion.php" class="btn">comment now</a>

            </div>
        </div>


    </div>

    <div class="load-more"><a href="package.php" class="btn">load more</a></div>
   
</section>


<!-- home packages section ends-->

<!-- footer section starts-->
<section class="footer">
    <div class="box-container">
        <div class="box">
            <h3>quick links</h3>
            <a href="home.php"><i class="fas fa-angle-right"></i>home</a>
            <a href="about.php"><i class="fas fa-angle-right"></i>about</a>
            <a href="package.php"><i class="fas fa-angle-right"></i>package</a>
            <a href="suggestion.php"><i class="fas fa-angle-right"></i>suggestion</a>
            <a href="gallery.php"><i class="fas fa-angle-right"></i>gallery</a>
            <a href="login.php"><i class="fas fa-angle-right"></i>dashboard</a>
        </div>
        <div class="box">
            <h3>extra links</h3>
            <a href="suggestion.php"><i class="fas fa-angle-right"></i>ask questions</a>
            <a href="about.php"><i class="fas fa-angle-right"></i>about us</a>
            <a href="#"><i class="fas fa-angle-right"></i>privacy policy</a>
            <a href="#"><i class="fas fa-angle-right"></i>terms of use</a>
        </div>
        <div class="box">
            <h3>contact info</h3>
            <a href="#"><i class="fas fa-phone"></i>+263 78 739 1078</a>
            <a href="https://mail.google.com/mail/u/2/#inbox"><i class="fas fa-envelope"></i>CathsocCut@gmail.com</a>
            <a href="https://www.bing.com/search?pglt=43&q=-17.35331817434099%2C+30.205743042087533&cvid=ef2d55ab8e7448578ba747f5d1dd2d8b&gs_lcrp=EgZjaHJvbWUyBggAEEUYOTIHCAEQRRj8VdIBBzk1MmowajGoAgCwAgA&FORM=ANSAB1&PC=U531"><i class="fas fa-map"></i>Harare, Zimbabwe</a>
        </div>
        <div class="box">
            <h3>follow us</h3>
            <a href="https://www.facebook.com/CUTCathsoc"><i class="fab fa-facebook-f"></i>facebook</a>
            <a href="#"><i class="fab fa-twitter"></i>twitter</a>
            <a href="https://instagram.com/cathsoc_cut?igshid=NzZlODBkYWE4Ng==" ><i class="fab fa-instagram"></i>instagram</a>
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
<script src="js/script.js"></script>


<style>
    .heading-title{
  text-align: center;
  margin-bottom:3rem ;
  font-size: 7rem;
  text-transform:uppercase;
  color:var(--black);

    }
</style>


</body>
</html>