<?php
$loginError = "";

if (isset($_POST['login'])) {
    function validate($data)
    {
        $data = trim(stripslashes(htmlspecialchars($data)));
        return $data;
    }

    $user = validate($_POST['username']);
    $pass = validate($_POST['password']);

    // Temporary hardcoded username and password for testing
    $hardcodedUser = 'Admin';
    $hardcodedPass = 'Password';

    if ($user === $hardcodedUser && $pass === $hardcodedPass) {
        session_start();
        $_SESSION['loggedInUser'] = $hardcodedUser;
        header("Location: admin.php");
        exit();
    } else {
        $loginError = "<div class='alert alert-danger'>Wrong Username/password combination. Try again</div>";
    }
}
?>

<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" type="x-icon" href="imgs/cathsoc/cathsoc-removebg-preview.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cathsoc|Login</title>

    <!-- swiper css file link-->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- font awesome cdn link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <!-- custom css file link-->
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!-- header section starts-->
    <section class="header">
        <img src="imgs/cathsoc/cathsoc-removebg-preview.png" alt="logo" class="hello">
        <a href="home.php" class="logo">Cathsoc@Cut.</a>

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

<!-- LOGIN -->
<div class="overlay"></div>
<div class="container l-container">
  <div class="login-header">
    <p class="display-5">Welcome To Dashboard, Login to start your session</p>
    <a href="home.php">
      <span class="login-close"><i class="fas fa-times ml-5"></i></span>
    </a>
  </div>
  <div class="login-body mb-5">
    <?= $loginError; ?>
    <form action="<?= htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" class="mt-4" id="login-form">
      <div class="row mb-4">
        <label for="username" class="col-sm-3 col-form-label">Username</label>
        <div class="col-sm-9">
          <input type="text" name="username" id="username" class="form-control" required>
        </div>
      </div>
      <div class="row mb-4">
        <label for="password" class="col-sm-3 col-form-label">Password</label>
        <div class="col-sm-9">
          <input type="password" name="password" id="password" class="form-control" required>
        </div>
      </div>
      <input type="hidden" name="csrf_token" value="YOUR_CSRF_TOKEN_HERE">
      <input type="submit" value="Login" name="login" class="mt-3 l-btn">
    </form>
  </div>
</div>



<style>

@import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,600;1,500&display=swap');
body {
 
  background-color:var(--light-white);
}
:root {
  --main-color: #8e44ad;
  --black: #222;
  --light-black: #777;
  --light-white: #fff9;
  --dark-bg: rgba(0, 0, 0, 0.7);
  --light-bg: #eee;
  --border: 1rem solid(var(--black));

  --box-shadow: 0 .5rem 1rem rgba(0, 0, 0, .1);
  --text-shadow: 0 1.5rem 3rem rgba(0, 0, 0, .3);
}

.container {
  max-width: 400px;
  margin: 0 auto;
  padding: 20px;
  background-color: var(--light-bg);
  box-shadow:var(--box-shadow);
}

.login-header {
  font-size: 2.5rem;
  text-align: center;
  margin-bottom: 20px;
}

.login-body {
  margin-bottom: 30px;
}

.form-control {
  width: 100%;
  padding: 10px;
  border: 1px solid var(--box-shadow);
  border-radius: 4px;
}

.l-btn {
  display: block;
  margin-top: 20px;
  width: 100%;
  padding: 10px;
  background-color: var(--light-black);
  color: var(--black);
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

.l-btn:hover {
  background-color: var(--main-color);
}

.alert {
  padding: 10px;
  margin-bottom: 20px;
  border-radius: 4px;
}

.alert-danger {
  color: #721c24;
  background-color: #f8d7da;
  border: 1px solid #f5c6cb;
}

.alert-danger strong {
  font-weight: bold;
}

/* Responsive Styles */
@media (max-width: 768px) {
  .container {
    max-width: 100%;
    padding: 10px;
  }
}

@media (max-width: 576px) {
  .form-control {
    font-size: 14px;
  }
}



</style>

<script>
  document.getElementById('login-form').addEventListener('submit', function(event) {
    // Perform client-side validation here
    
    var username = document.getElementById('username').value;
    var password = document.getElementById('password').value;

    if (username.trim() === '' || password.trim() === '') {
      event.preventDefault();
      alert('Please fill in all fields.');
    }
  });
</script>
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
    <a href="https://mail.google.com/mail/u/2/#inbox"><i class="fas fa-envelope"></i>CathsocCut.com</a>
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

   
    <script src="../js/jquery.js"></script>
    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="../js/script.js" type="text/javascript"></script> 

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