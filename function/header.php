<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $titlename ?></title>
    <link rel="stylesheet" href="style.css" type="text/css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>

<body>



    <?php

    include("./database/databaseconnection.php");
    session_start();
    ?>

    <nav class="nav_bar">
        <a href="#"><img class="img1" src="photos/logo.jpeg"></a>
        <a href="">KMH</a>
        <a href="home.php">Home</a>
        <a href="contact.php">Contact</a>
        <a href="guidance.php">Guidance</a>

        <?php if (isset($_SESSION["userid"])) {
            $uid = $_SESSION['userid'];
            $sql = "select  * from user where userid = $uid";
            $fetch = mysqli_query($conn, $sql);
            $result = mysqli_fetch_array($fetch);
            $urname = $result['fname'] . $result['lname'];
        ?>

        <div class="dropdown">
            <button class="dropbtn"><?php echo $urname ?>
                <i class="fa-solid fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a href="browsing_history.php">Browsing History</a>
                <a href="logout.php">Logout</a>
            </div>
        </div>


        <?php } else { ?> <a href="login.php">Login</a>

        <?php } ?>
        <div class="dropdown">
            <button class="dropbtn">Information
                <i class="fa-solid fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a href="app.php">Apps</a>
                <a href="support.php">Support</a>
                <a href="live.php">Live</a>
            </div>
        </div>

        <div class="search_form">
    <form action="container.php" method="get">
        <input type="text" id="search" name="search" placeholder="search">
        <button type="submit"><i class="fas fa-search"></i></button>
    </form>
</div>
    </nav>
</body>