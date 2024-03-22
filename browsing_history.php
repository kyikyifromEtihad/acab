<?php

$titlename = "Browsing History";
include("function/header.php");
$userid = $_SESSION["userid"];
?>



<div class="table">
<table border="1s" cellpadding="0" cellspacing="0" width="300">
    <tr>
        <th style="font-size: 18px">Search History</th>
        <th style="font-size: 18px">Remove</th>
    </tr>
    <?php
        $recordpage= 8;
        $current_page = isset($_GET['page']) ? $_GET['page'] : 1;
        $offset = ($current_page -1) * $recordpage;
        $sql = "select * from search_history where user_id=$userid limit $offset, $recordpage";
        $result = mysqli_query($conn, $sql);
        while($row = mysqli_fetch_assoc($result))
        {?>
                <tr>
                    <td style="text-align: center"><?php echo $row['search_name'] ?></td>
                    <td><a href="delete.php?id=<?php echo $row['search_id'] ?>">Delete</a></td>
                </tr>
        <?php } ?>
        </table>
        </div>
        <?php
        $totalRecords = $conn->query("SELECT COUNT(user_id) as total FROM search_history where user_id=$uid")->fetch_assoc()['total'];
        // $totalRecords = mysqli_query($conn, $sql1);
        $totalPages = ceil($totalRecords / $recordpage);

        echo "<div class='hello'>Page: ";
        for ($i = 1; $i <= $totalPages; $i++){
            echo "<a href='?page=$i'>$i</a>";
        }
        echo "</div>";
    ?>


<br>
<br>
<br>
<br>
<br>
<br>

<?php
$footername = "Browsing History";
include("function/footer.php");
?>
