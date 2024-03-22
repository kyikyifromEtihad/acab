<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Social Media Campaign</title>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<style>
.form_container {
    max-width: 500px;
    margin: 0 auto;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 10px;
}

.input_group {
    margin-bottom: 15px;
}

.input_group i {
    margin-right: 10px;
    color: #555;
}

.input_group input[type="text"],
.input_group input[type="email"],
.input_group textarea {
    width: calc(100% - 30px);
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

.input_group textarea {
    height: 100px;
}

.button_group button {
    padding: 10px 20px;
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

.button_group button[type="reset"] {
    background-color: #dc3545;
    margin-left: 10px;
}

a {
    display: block;
    margin-top: 10px;
    color: #007bff;
    text-decoration: none;
}
</style>
</head>
<body>
    <?php
    $titlename = "Contact ";
    include("function/header.php");
    ?>

    <div class="form_container">
        <form action="" method="post">
            <div class="input_group">
                <i class="fa-solid fa-user"></i>
                <input type="text" name="name" placeholder="Enter name" required>
            </div>
            <div class="input_group">
                <i class="fa-solid fa-envelope"></i>
                <input type="email" name="email" placeholder="example@gmail.com" required>
            </div>
            <div class="input_group">
                <i class="fa-solid fa-phone"></i>
                <input type="text" name="phone" placeholder="Enter phone number" required>
            </div>
            <div class="input_group">
                <i class="fa-solid fa-location-dot"></i>
                <input type="text" name="address" placeholder="Enter address" required>
            </div>
            <div class="input_group">
                <i class="fa-solid fa-message"></i>
                <textarea placeholder="Write your message" name="message"></textarea>
            </div>
            <div class="button_group">
                <button type="submit" name="send" value="Signup" id="send">Send</button>
                <button type="reset" name="cancel" value="Cancel">Cancel</button>
            </div>
            <a href="privacy&policy.php">Privacy&Policy</a>
        </form>
    </div>

    <?php 
    $footername = "Contact Page";
    include("function/footer.php");
    ?>
</body>
</html>
