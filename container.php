<?php
$titlename = "Login";
include("function/header.php");
?>

<body>
    <br>
    <br>
    <div class="box-container">

        <?php

        if (isset($_SESSION["userid"])) {
            $userid = $_SESSION["userid"];
            if (isset($_GET["search"])) {
                $sname = $_GET["search"];
                $sql = "insert into search_history(user_id,search_name)values($userid,'$sname')";
                mysqli_query($conn, $sql);
                $sql1 = "select * from technology where category='$sname'";
                $result = mysqli_query($conn, $sql1);
                if (mysqli_num_rows($result) > 0) {
                } else {
                    echo "<script>alert('no result')</script>";
                }
            }
        }
        ?>

        <div class="box">
            <div class="box-img"><img src="./photos/1.jpg"></div>
            <div class="box-text">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                    and scrambled it to make a type specimen book. It has survived not only five centuries.</p>
            </div>
        </div>

        <div class="box">
            <div class="box-img"><img src="./photos/2.jpg"></div>
            <div class="box-text">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                    and scrambled it to make a type specimen book. It has survived not only five centuries.</p>
            </div>
        </div>

        <div class="box">
            <div class="box-img"><img src="./photos/3.jpg"></div>
            <div class="box-text">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                    and scrambled it to make a type specimen book. It has survived not only five centuries.</p>
            </div>
        </div>

        <div class="box">
            <div class="box-img"><img src="./photos/4.jpg"></div>
            <div class="box-text">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                    and scrambled it to make a type specimen book. It has survived not only five centuries.</p>
            </div>
        </div>

        <div class="box">
            <div class="box-img"><img src="./photos/5.jpg"></div>
            <div class="box-text">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                    and scrambled it to make a type specimen book. It has survived not only five centuries.</p>
            </div>
        </div>

        <div class="box">
            <div class="box-img"><img src="./photos/6.jpg"></div>
            <div class="box-text">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                    and scrambled it to make a type specimen book. It has survived not only five centuries.</p>
            </div>
        </div>

        <div class="box">
            <div class="box-img"><img src="./photos/File_security.jpg"></div>
            <div class="box-text">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                    and scrambled it to make a type specimen book. It has survived not only five centuries.</p>
            </div>
        </div>

        <div class="box">
            <div class="box-img"><img src="./photos/Insurance.jpg"></div>
            <div class="box-text">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                    and scrambled it to make a type specimen book. It has survived not only five centuries.</p>
            </div>
        </div>

    </div>

    <?php
    $footername = "Application Page";
    include("function/footer.php");
    ?>
</body>

</html>