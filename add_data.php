<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" type="x-icon" href="imgs/cathsoc/cathsoc-removebg-preview.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cathsoc|dashboard</title>

    <!-- swiper css file link-->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- font awesome cdn link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <!-- custom css file link-->
    <link rel="stylesheet" href="style.css">

    <!-- swiper js link-->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- custom js file link-->
    <script type="text/javascript" src="script.js"></script>

   
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

    // Check if a delete request is made
    if (isset($_GET['delete'])) {
        $id = $_GET['delete'];

        // Retrieve the file path from the database
        $sql = "SELECT image_url FROM gallery WHERE id = '$id'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $filePath = $row['image_url'];

            // Delete the record from the database
            $deleteSql = "DELETE FROM gallery WHERE id = '$id'";
            if ($conn->query($deleteSql) === TRUE) {
                // Delete the file from the server
                if (file_exists($filePath)) {
                    unlink($filePath);
                }
                echo "File deleted successfully";
            } else {
                echo "Error deleting file: " . $conn->error;
            }
        } else {
            echo "File not found";
        }
    }

    // Retrieve data from the form submission
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $imageUrl = $_POST['image_url'];
        $title = $_POST['title'];
        $description = $_POST['description'];

        // Insert the data into the database
        $insertSql = "INSERT INTO gallery (image_url, title, description) VALUES ('$imageUrl', '$title', '$description')";
        if ($conn->query($insertSql) === TRUE) {
            echo "Data added successfully";
        } else {
            echo "Error adding data: " . $conn->error;
        }
    }

    // Display existing data
    $selectSql = "SELECT id, image_url, title FROM gallery";
    $result = $conn->query($selectSql);
    ?>

    <h1>Add Data</h1>
    <form action="" method="POST">
        <label for="image_url">Image URL:</label>
        <input type="text" name="image_url" id="image_url" required><br>
        <label for="title">Title:</label>
        <input type="text" name="title" id="title" required><br>
        <label for="description">Description:</label>
        <textarea name="description" id="description" required></textarea><br>
        <input type="submit" value="Add Data">
    </form>

    <form action="home.php" method="POST">
        <input type="submit" value="Logout">
    </form>

    <h1>Existing Data</h1>
    <ul>
        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $id = $row['id'];
                $imageUrl = $row['image_url'];
                $title = $row['title'];

                echo "<li><img src=\"$imageUrl\" alt=\"$title\"><br>";
                echo "<strong>Title:</strong> $title<br>";
                echo "<a href=\"?delete=$id\">Delete</a></li>";
            }
        } else {
            echo "No data found";
        }
        ?>
    </ul>

    <?php
    $conn->close();
    ?>
    <style>

/* Main content styles */
.container {
  display: grid;
  grid-template-columns: 1fr 1fr;
  grid-gap: 20px;
}

.container form,
.container .existing-data {
  background-color: #fff;
  padding: 20px;
}

h1 {
  margin-top: 20px;
  font-size: 24px;
  font-weight: bold;
}

form {
  margin-top: 10px;
  background-color: #fff;
  padding: 20px;
}

form label {
  font-weight: bold;
  display: block;
  margin-bottom: 5px;
}

form input[type="text"],
form textarea {
  width: 100%;
  padding: 5px;
  margin-bottom: 10px;
}

form input[type="submit"] {
  padding: 10px 20px;
  background-color: #333;
  color: #fff;
  border: none;
  cursor: pointer;
}

form input[type="submit"]:hover {
  background-color: purple;
}

ul {
  list-style-type: none;
  margin-top: 10px;
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
  grid-gap: 20px;
}

ul li {
  background-color: #fff;
  padding: 10px;
  margin-bottom: 10px;
  text-align: center;
}

ul li img {
  width: 100%;
  height: 80%;
  margin-bottom: 10px;
}

ul li strong {
  font-weight: bold;
}

ul li a {
  color: #333;
  text-decoration: none;
  font-weight: bold;
}
</style>
</body>
</html>