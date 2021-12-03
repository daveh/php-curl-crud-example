<?php

$full_name = $_GET["full_name"];

$ch = require "init_curl.php";

curl_setopt($ch, CURLOPT_URL, "https://api.github.com/repos/$full_name");

$response = curl_exec($ch);

curl_close($ch);

$data = json_decode($response, true);

?>
<?php require "header.html" ?>
        
    <h1>Repository</h1>
    
    <dl>
        <dt>Name</dt>
        <dd><?= $data["name"] ?></dd>
        <dt>Description</dt>
        <dd><?= htmlspecialchars($data["description"]) ?></dd>
    </dl>

<a href="edit.php?full_name=<?= $data["full_name"] ?>">Edit</a>

<form method="post" action="delete.php">
    <input type="hidden" name="full_name" value="<?= $data["full_name"] ?>">
    <button>Delete</button>
</form>

<?php require "footer.html" ?>











