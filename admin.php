<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" type="x-icon" href="imgs/cathsoc/cathsoc-removebg-preview.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cathsoc|dashboard</title>

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

<!DOCTYPE html>
<html>
<head>
    <title>Admin Page</title>
</head>
<body>
    <h1>Add Data</h1>
    <form action="add_data.php" method="POST">
        <label for="image_url">Image URL:</label>
        <input type="text" name="image_url" id="image_url" required>
        <br>
        <label for="title">Title:</label>
        <input type="text" name="title" id="title" required>
        <br>
        <label for="description">Description:</label>
        <textarea name="description" id="description" required></textarea>
        <br>
        <input type="submit" value="Add Data">
    </form>

    <form action="home.php" method="POST">
        <input type="submit" value="Logout">
    </form>

    <style>
        /* Your existing CSS styles */
        
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            padding: 20px;
        }

        h1 {
            color: #333;
            margin-bottom: 20px;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
        }

        input[type="text"],
        textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            resize: vertical;
        }

        input[type="submit"] {
            background-color: purple;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: plum;
        }

        .logout-form {
            text-align: right;
        }

        .logout-form input[type="submit"] {
            background-color: purple;
            margin-top: 10px;
        }

        .logout-form input[type="submit"]:hover {
            background-color: plum;
        }
    </style>
</body>
</html>