<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" type="x-icon" href="imgs/cathsoc/cathsoc-removebg-preview.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cathsoc|package</title>

     <!-- swiper css file link-->
     <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />


    <!--font awesome cdn link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    
    <!-- custome css file link-->
    <link rel="stylesheet" href="style.css">

<!-- swiper js  link-->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>


<!-- custome js file link-->
<script src="js/script.js"></script>
</head>
<body>













 

 

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
  <!-- header section ends-->
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
<div class="heading" style="background: url(imgs/together.jpg) no-repeat;">
    <h1>EVENTS</h1>
</div>

<!-- packages section starts-->
<section class="packages">

    <h1 class="heading-title">ALL Cathsoc Events</h1>

        <div class="box-container">

            <div class="box">

                <div class="image">
                    <img src="imgs/cathsoc/kudzi wedding.jpg" alt="">
                </div>

                <div class="content">
                    <h3>adventure and Weddings</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi cum amet numquam quaerat minus magnam pariatur dolore fuga aliquid optio!</p>
                    <a href="gallery.php" class="btn">view now</a>
                </div>

            </div>



            <div class="box">

<div class="image">
    <img src="imgs/cathsoc/guilds.jpg" alt="">
</div>

<div class="content">
    <h3>Guild Initiations</h3>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi cum amet numquam quaerat minus magnam pariatur dolore fuga aliquid optio!</p>
    <a href="gallery.php" class="btn">view now</a>
</div>

</div>


<div class="box">

<div class="image">
    <img src="imgs/cathsoc/aag.jpg" alt="">
</div>

<div class="content">
    <h3>adventure in A&As</h3>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi cum amet numquam quaerat minus magnam pariatur dolore fuga aliquid optio!</p>
    <a href="gallery.php" class="btn">view now</a>
</div>

</div>
            <div class="box">

                <div class="image">
                    <img src="imgs/cathsoc/advisors.jpg" alt="">
                </div>

                <div class="content">
                    <h3>Under Advisement</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi cum amet numquam quaerat minus magnam pariatur dolore fuga aliquid optio!</p>
                    <a href="gallery.php" class="btn">view now</a>
                </div>

            </div>
            <div class="box">

                <div class="image">
                    <img src="imgs/cathsoc/get-together.jpg" alt="">
                </div>

                <div class="content">
                    <h3>adventure and Get-Togethers</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi cum amet numquam quaerat minus magnam pariatur dolore fuga aliquid optio!</p>
                    <a href="gallery.php" class="btn">view now</a>
                </div>

            </div>
            <div class="box">

                <div class="image">
                    <img src="imgs/cathsoc/lastouting.jpg" alt="">
                </div>

                <div class="content">
                    <h3>OUTINGS</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi cum amet numquam quaerat minus magnam pariatur dolore fuga aliquid optio!</p>
                    <a href="gallery.php" class="btn">view now</a>
                </div>

            </div>
            <div class="box">

                <div class="image">
                    <img src="imgs/cathsoc/lads.jpg" alt="">
                </div>

                <div class="content">
                    <h3>Regular Sundays</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi cum amet numquam quaerat minus magnam pariatur dolore fuga aliquid optio!</p>
                    <a href="gallery.php" class="btn">view now</a>
                </div>

            </div>
            <div class="box">

<div class="image">
    <img src="imgs/cathsoc/mut7.jpg" alt="">
</div>

<div class="content">
    <h3>Tours & Hikes</h3>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi cum amet numquam quaerat minus magnam pariatur dolore fuga aliquid optio!</p>
    <a href="gallery.php" class="btn">view now</a>
</div>

</div>



            <div class="box">

                <div class="image">
                    <img src="imgs/cathsoc/dayoprayer.jpg" alt="">
                </div>

                <div class="content">
                    <h3>adventure with Foodies</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi cum amet numquam quaerat minus magnam pariatur dolore fuga aliquid optio!</p>
                    <a href="gallery.php" class="btn">view now</a>
                </div>

            </div>

            <div class="box">

<div class="image">
    <img src="imgs/cathsoc/cathsoc.jpg" alt="">
</div>

<div class="content">
    <h3>adventure and tour</h3>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi cum amet numquam quaerat minus magnam pariatur dolore fuga aliquid optio!</p>
    <a href="gallery.php" class="btn">view now</a>
</div>

</div>

<div class="box">

                <div class="image">
                    <img src="imgs/cathsoc/mut1.jpg" alt="">
                </div>

                <div class="content">
                    <h3>Mutemwa Pilgrimage</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi cum amet numquam quaerat minus magnam pariatur dolore fuga aliquid optio!</p>
                    <a href="gallery.php" class="btn">view now</a>
                </div>

            </div>

            <div class="box">

<div class="image">
    <img src="imgs/cathsoc/aaa.png" alt="">
</div>

<div class="content">
    <h3>After Mass Gathering</h3>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi cum amet numquam quaerat minus magnam pariatur dolore fuga aliquid optio!</p>
    <a href="gallery.php" class="btn">view now</a>
</div>

</div>

<div class="box">

                <div class="image">
                    <img src="imgs/cathsoc/terrific_.jpg" alt="">
                </div>

                <div class="content">
                    <h3>Terrific Nyts</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi cum amet numquam quaerat minus magnam pariatur dolore fuga aliquid optio!</p>
                    <a href="gallery.php" class="btn">view now</a>
                </div>

            </div>

            <div class="box">

<div class="image">
    <img src="imgs/cathsoc/masss.jpg" alt="">
</div>

<div class="content">
    <h3>Compass Masses</h3>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi cum amet numquam quaerat minus magnam pariatur dolore fuga aliquid optio!</p>
    <a href="gallery.php" class="btn">view now</a>
</div>

</div>

<div class="box">

                <div class="image">
                    <img src="imgs/cathsoc/socialsavanna2.jpg" alt="">
                </div>

                <div class="content">
                    <h3>Chillz @ Savanna </h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi cum amet numquam quaerat minus magnam pariatur dolore fuga aliquid optio!</p>
                    <a href="gallery.php" class="btn">View now</a>
                </div>

            </div>

            <div class="box">

<div class="image">
    <img src="imgs/cathsoc/back to schoool.jpg" alt="">
</div>

<div class="content">
    <h3>Dress Up Days</h3>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi cum amet numquam quaerat minus magnam pariatur dolore fuga aliquid optio!</p>
    <a href="gallery.php" class="btn">view now</a>
</div>

</div>

<div class="box">

                <div class="image">
                    <img src="imgs/cathsoc/charity_visit.jpg" alt="">
                </div>

                <div class="content">
                    <h3>Charity Visits</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi cum amet numquam quaerat minus magnam pariatur dolore fuga aliquid optio!</p>
                    <a href="gallery.php" class="btn">view now</a>
                </div>

            </div>

            <div class="box">

<div class="image">
    <img src="imgs/cathsoc/add-day.jpg" alt="">
</div>

<div class="content">
    <h3>Day of Prayer</h3>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi cum amet numquam quaerat minus magnam pariatur dolore fuga aliquid optio!</p>
    <a href="gallery.php" class="btn">view now</a>
</div>

</div>

<div class="box">

                <div class="image">
                    <img src="imgs/cathsoc/mutemwa.jpg" alt="">
                </div>

                <div class="content">
                    <h3>Mutemwa vibes</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi cum amet numquam quaerat minus magnam pariatur dolore fuga aliquid optio!</p>
                    <a href="gallery.php" class="btn">view now</a>
                </div>

            </div>

        </div>

        

<div class="load-more"><span class="btn">load more</span></div>

<script>
let batchSize = 3;
let currentItem = batchSize;

window.addEventListener('DOMContentLoaded', () => {
  let boxes = document.querySelectorAll('.packages .box-container .box');
  for (let i = 0; i < currentItem; i++) {
    if (boxes[i]) {
      boxes[i].style.display = 'inline-block';
    }
  }
  if (currentItem >= boxes.length) {
    loadMoreBtn.style.display = 'none';
  }
});

let loadMoreBtn = document.querySelector('.packages .load-more .btn');
loadMoreBtn.onclick = () => {
  let boxes = document.querySelectorAll('.packages .box-container .box');
  for (let i = currentItem; i < currentItem + batchSize; i++) {
    if (boxes[i]) {
      boxes[i].style.display = 'inline-block';
    }
  }
  currentItem += batchSize;
  if (currentItem >= boxes.length) {
    loadMoreBtn.style.display = 'none';
  }
};
</script>

</section>
<!-- packages section ends-->

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
 
 </body>


</html>