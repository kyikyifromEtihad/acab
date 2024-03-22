<?php
$titlename = "News API";
include("function/header.php");
?>

<style>
    .box-container {
        width: 100%;
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
    }

    .box {
        width: 300px;
        margin: 20px;
        border: 1px solid #ccc;
        border-radius: 8px;
        overflow: hidden; 
    }

    .box-img img {
        width: 100%;
        max-height: 150px; 
        object-fit: cover;
    }

    .box-text {
        padding: 10px;
    }

    .box-text p {
        margin: 0;
        overflow: hidden; 
        text-overflow: ellipsis; 
        white-space: nowrap; 
    }

    .box-text a {
        text-decoration: none;
        color: blue;
    }
</style>

<?php
$apiUrl ="https://newsapi.org/v2/everything?q=how+to+stay+safe+social+for+teenagers&sortBy=publishedAt&apiKey=258271544c824b3ab50ea84e0fff0938";

$curl = curl_init($apiUrl);

// Set cURL options
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_USERAGENT, 'Batch2'); // Set your application name as the User-Agent

// Execute cURL session and get the response
$response = curl_exec($curl);

// Check for cURL errors
if (curl_errno($curl)) {
    echo "cURL Error: " . curl_error($curl) . "\n";
}
else {
    // Parse the JSON response
    $data = json_decode($response, true);

    if (isset($data['status']) && $data['status'] === 'error') {
        echo "API Error: {$data['message']}\n";
    }else {
        $articles = $data['articles'] ?? [];
        $row = 1;
        echo "<div class='box-container'>";
        foreach($articles as $article)
        {?>
             <div class="box">
                <div class="box-img"><img style="width: 100%," src="<?php echo $article['urlToImage']?>" /></div> 
                <div class="box-text"><p><?php echo $article['title']?></p></div>
                <div class="box-text"><p><?php echo $article['description']?></p></div> 
                <div class="box-text"><a href="<?php echo $article['url']?>">Read More</a></div> 
            </div>

                        <?php
                            $row++;
                            if($row > 8)
                            break;
                        ?>
            <?php }
        echo "</div>";
    }
}
curl_close($curl);
?>

<?php 
$footername = "News API";
include("function/footer.php");
?>