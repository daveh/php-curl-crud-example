<?php

$full_name = $_GET["full_name"];

$ch = require "init_curl.php";

curl_setopt($ch, CURLOPT_URL, "https://api.github.com/repos/$full_name");

$response = curl_exec($ch);

curl_close($ch);

$data = json_decode($response, true);

?>
<?php require "header.html" ?>
        
    <h1>Edit Repository</h1>
    
    <form method="post" action="update.php">
        
        <input type="hidden" name="full_name" value="<?= $data["full_name"] ?>">
        
        <label for="name">Name</label>
        <input type="text" name="name" id="name" value="<?= $data["name"] ?>">
        
        <label for="description">Description</label>
        <textarea name="description" id="description"><?= htmlspecialchars($data["description"]) ?></textarea>
        
        <button>Submit</button>
    </form>
    
<?php require "footer.html" ?>











