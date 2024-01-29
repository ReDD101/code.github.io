<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" type="x-icon" href="imgs/cathsoc/cathsoc-removebg-preview.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cathsoc|gallery</title>

     <!-- swiper css file link-->
     <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />


    <!--font awesome cdn link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    
    <!-- custom css file link-->
    <link rel="stylesheet" href="style.css">

<!-- swiper js  link-->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>


<!-- custom js file link-->
<script src="script.js"></script>
</head>
<body>

</body>
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

<section class="home">
        <div class="swiper home-slider">
          <div class="swiper-wrapper">
       <div class="swiper-slide slide" style="background: url(imgs/cathsoc/bible.jpg) no-repeat;">
              <div class="content">
                    <span>explore,dicover,Meditate</span>
                    <h3>WELCOME to cathsoc Gallery</h3>
                    <a href="gallery.php" class="btn">discover more</a>
              </div>
            </div>

            <div class="swiper-slide slide" style="background: url(imgs/cathsoc/glasses-1052010_1280.jpg) no-repeat;">
              <div class="content">
                    <span>explore,dicover, Enjoy</span>
                    <h3>discover new things about yourself</h3>
                    <a href="gallery.php" class="btn">discover more</a>
              </div>
            </div>

            <div class="swiper-slide slide" style="background: url(imgs/cathsoc/sunset.jpg) no-repeat;">
              <div class="content">
                    <span>explore,dicover,Mediatate</span>
                    <h3>make it worth your while</h3>
                    <a href="gallery.php" class="btn">discover more</a>
              </div>
            </div>
            <div class="swiper-slide slide" style="background: url(imgs/cathsoc/cathsoc.jpg) no-repeat;">
              <div class="content">
                    <span>explore,dicover, Enjoy</span>
                    <h3>discover new places</h3>
                    <a href="gallery.php" class="btn">discover more</a>
              </div>
            </div>
            <div class="swiper-slide slide" style="background: url(imgs/cathsoc/add-day.jpg) no-repeat;">
              <div class="content">
                    <span>explore,dicover, celebrate</span>
                    <h3>discover yourself </h3>
                    <a href="gallery.php" class="btn">discover more</a>
              </div>
            </div>
           
            <div class="swiper-slide slide" style="background: url(imgs/cathsoc/aag.jpg) no-repeat;">
              <div class="content">
                    <span>explore,dicover, wonder</span>
                    <h3>pose for the camera</h3>
                    <a href="gallery.php" class="btn">discover more</a>
              </div>
            </div>
            <div class="swiper-slide slide" style="background: url(imgs/cathsoc/beaiimasters.jpg) no-repeat;">
              <div class="content">
                    <span>explore,dicover, socialise</span>
                    <h3>create new memories</h3>
                    <a href="gallery.php" class="btn">discover more</a>
              </div>
            </div>
            <div class="swiper-slide slide" style="background: url(imgs/cathsoc/friendship.jpg) no-repeat;">
              <div class="content">
                    <span>explore,dicover, travel</span>
                    <h3>Meet new people</h3>
                    <a href="gallery.php" class="btn">discover more</a>
              </div>
            </div>
            <div class="swiper-slide slide" style="background: url(imgs/cathsoc/studying.jpg) no-repeat;">
              <div class="content">
                    <span>explore,dicover, grow</span>
                    <h3>discover hidden talents</h3>
                    <a href="gallery.php" class="btn">discover more</a>
              </div>
            </div>

                     <div class="swiper-button-next"></div>
                     <div class="swiper-button-prev"></div>

          </div>
        </div>

        <script>
    var swiper = new Swiper(".home-slider", {
      loop:true,
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });
  </script>

    </section>
















<h1 class="heading-title">Cathsoc GALLERY</h1>
<style>.heading-title{
  text-align: center;
  margin-bottom:3rem ;
  font-size: 10rem;
  text-transform:uppercase;
  color:var(--black);
}</style>
<!-- gallery section starts-->

<div class="img-gallery">
  <!-- Image gallery code here -->

  
</div>

<div class="Full-img" id="FullimgBox">
  <div class="image-container">
    <img src="" id="Fullimg" alt="">
    <div class="controls">
      <button class="prev-btn1" onclick="showPreviousImage()">Prev</button>
      <button class="next-btn1" onclick="showNextImage()">Next</button>
      <button class="close-btn1" onclick="closeFullimg()">Close</button>
      <a id="downloadLink" href="" download>
        <button class="download-btn">Download</button>
      </a>
    </div>
  </div>
</div>

<div class="img-gallery">
  <?php
  // Connect to your database
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "gallery";

  $conn = new mysqli($servername, $username, $password, $dbname);
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  // Retrieve data from the database
  $sql = "SELECT * FROM gallery";
  $result = $conn->query($sql);

  // Display the data
  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      echo "<img src='" . $row['image_url'] . "' alt='' onclick=\"openFullimg('" . $row['image_url'] . "')\">";
    }
  } else {
    echo "No data available";
  }

  $conn->close();
  ?>
</div>

<script>
  // Function to open the full-size image
  function openFullimg(imagePath) {
    var modal = document.createElement('div');
    modal.className = 'modal';

    var modalContent = document.createElement('div');
    modalContent.className = 'modal-content';

    var img = document.createElement('img');
    img.src = imagePath;
    img.alt = '';

    var closeButton = document.createElement('span');
    closeButton.className = 'modal-close';
    closeButton.innerHTML = '&times;';
    closeButton.addEventListener('click', function() {
      closeModal();
    });

    var previousButton = document.createElement('span');
    previousButton.className = 'modal-previous';
    previousButton.innerHTML = '&#8249;';
    previousButton.addEventListener('click', function() {
      showPreviousImage();
    });

    var nextButton = document.createElement('span');
    nextButton.className = 'modal-next';
    nextButton.innerHTML = '&#8250;';
    nextButton.addEventListener('click', function() {
      showNextImage();
    });

    var downloadButton = document.createElement('a');
    downloadButton.className = 'modal-download';
    downloadButton.innerHTML = 'Download';
    downloadButton.href = imagePath;
    downloadButton.download = '';

    modalContent.appendChild(closeButton);
    modalContent.appendChild(previousButton);
    modalContent.appendChild(img);
    modalContent.appendChild(nextButton);
    modalContent.appendChild(downloadButton);
    modal.appendChild(modalContent);

    document.body.appendChild(modal);
  }

  // Function to close the modal
  function closeModal() {
    var modal = document.querySelector('.modal');
    modal.parentNode.removeChild(modal);
  }

  // Function to show the previous image
  function showPreviousImage() {
    var images = document.querySelectorAll('.img-gallery img');
    var currentIndex = Array.from(images).findIndex(function(img) {
      return img.src === document.getElementById('Fullimg').src;
    });

    var previousIndex = (currentIndex - 1 + images.length) % images.length;
    document.getElementById('Fullimg').src = images[previousIndex].src;
  }

  // Function to show the next image
  function showNextImage() {
    var images = document.querySelectorAll('.img-gallery img');
    var currentIndex = Array.from(images).findIndex(function(img) {
      return img.src === document.getElementById('Fullimg').src;
    });

    var nextIndex = (currentIndex + 1) % images.length;
    document.getElementById('Fullimg').src = images[nextIndex].src;
  }
</script>
  <style>
        /* CSS styles */
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        h1 {
            margin-bottom: 20px;
            text-align: center;
        }

        .image-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            grid-gap: 20px;
        }

        .image-item {
            text-align: center;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .image-item img {
            width: 100%;
            height: 100%;
            cursor: pointer;
            object-fit: cover;
            transition: transform 1.5s linear;
            margin-bottom: 10px;
        }

        .image-item img:hover {
            transform: scale(0.8);
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
            opacity: 0.8;
        }

        .image-item h2 {
            margin-bottom: 5px;
        }

        .image-item p {
            margin-bottom: 10px;
            text-align: center;
        }
    </style>




<script>

  var fullimgBox = document.getElementById("FullimgBox");
  var fullimg = document.getElementById("Fullimg");
  var images = document.querySelectorAll(".img-gallery img");
  var currentImageIndex = 0;

  function openFullimg(src) {
    fullimgBox.style.display = "flex";
    fullimg.src = src;
    document.getElementById("downloadLink").href = src;

    // Find the index of the clicked image
    for (var i = 0; i < images.length; i++) {
      if (images[i].src === src) {
        currentImageIndex = i;
        break;
      }
    }
  }

  function closeFullimg() {
    fullimgBox.style.display = "none";
  }

  function ShowPrevious() {
    currentImageIndex--;
    if (currentImageIndex < 0) {
      currentImageIndex = images.length - 1;
    }
    fullimg.src = images[currentImageIndex].src;
    document.getElementById("downloadLink").href = images[currentImageIndex].src;
  }

  function ShowNext() {
    currentImageIndex++;
    if (currentImageIndex >= images.length) {
      currentImageIndex = 0;
    }
    fullimg.src = images[currentImageIndex].src;
    document.getElementById("downloadLink").href = images[currentImageIndex].src;
  }
</script>



<!-- video gallery section starts-->
<h1 class="heading-title">Cathsoc video GALLERY</h1>


<div class="Full-video" id="FullVideoBox">
  <video src="" id="FullVideo" controls></video>
  <span onclick="closeFullVideo()">CLOSE</span>
  <div class="controls">

    <div class="button-container">
      <button class="prev-btn" onclick="playPrevious()">Previous</button>

      <button class="next-btn" onclick="playNext()">Next</button>
    
      <a id="downloadLink" href="" download>Download</a>
    </div>
  </div>
</div>

<div class="video-gallery">
  <video src="videos/video10.mp4" onclick="openFullVideo(this.src)"></video>
  <video src="videos/video1.mp4" onclick="openFullVideo(this.src)"></video>
  <video src="videos/video2.mp4" onclick="openFullVideo(this.src)"></video>
  <video src="videos/video10.mp4" onclick="openFullVideo(this.src)"></video>
  <video src="videos/video3.mp4" onclick="openFullVideo(this.src)"></video>
  <video src="videos/video4.mp4" onclick="openFullVideo(this.src)"></video>
  <video src="videos/video5.mp4" onclick="openFullVideo(this.src)"></video>
  <video src="videos/video6.mp4" onclick="openFullVideo(this.src)"></video>
 
  <video src="videos/mut-chapel3.mp4" onclick="openFullVideo(this.src)"></video>
  <video src="videos/video7.mp4" onclick="openFullVideo(this.src)"></video>
  <video src="videos/mut-chapel2.mp4" onclick="openFullVideo(this.src)"></video>
  <video src="videos/mut-bus.mp4" onclick="openFullVideo(this.src)"></video>
  <video src="videos/mut-chapel.mp4" onclick="openFullVideo(this.src)"></video>
  <video src="videos/video8.mp4" onclick="openFullVideo(this.src)"></video>
  <video src="videos/video9.mp4" onclick="openFullVideo(this.src)"></video>

  <!-- Add more video elements as needed -->
</div>

<script>
  var videos = document.querySelectorAll('.video-gallery video');
  var currentIndex = 0;
  var fullVideoBox = document.getElementById("FullVideoBox");
  var fullVideo = document.getElementById("FullVideo");
  var downloadLink = document.getElementById("downloadLink");

  function openFullVideo(src) {
    fullVideoBox.style.display = "flex";
    fullVideo.src = src;
    currentIndex = Array.from(videos).findIndex(function(video) {
      return video.src === src;
    });
    updateDownloadLink(src);
  }

  function closeFullVideo() {
    fullVideoBox.style.display = "none";
    fullVideo.pause();
    fullVideo.currentTime = 0;
  }

  function playPrevious() {
    currentIndex = (currentIndex - 1 + videos.length) % videos.length;
    var video = videos[currentIndex];
    openFullVideo(video.src);
  }

  function playNext() {
    currentIndex = (currentIndex + 1) % videos.length;
    var video = videos[currentIndex];
    openFullVideo(video.src);
  }

  function updateDownloadLink(src) {
    downloadLink.href = src;
  }
</script>

<!-- gallery style section starts-->


<!-- gallery style section ends-->
<!-- gallery section ends-->

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
            <a href="login.php" class=" fa-angle-right"></i>dashboard</a>

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
<script src="script.js"></script>
<script src="lightbox.js"></script>

</html>