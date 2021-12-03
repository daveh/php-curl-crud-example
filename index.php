<?php

$ch = require "init_curl.php";

curl_setopt($ch, CURLOPT_URL, "https://api.github.com/user/repos");

$response = curl_exec($ch);

curl_close($ch);

$data = json_decode($response, true);

?>
<?php require "header.html" ?>
        
    <h1>Repositories</h1>
    
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
            
            <?php foreach ($data as $repository): ?>
                
                <tr>
                    <td>
                        <a href="show.php?full_name=<?= $repository["full_name"] ?>">
                            <?= $repository["name"] ?>
                        </a>
                    </td>
                    <td><?= htmlspecialchars($repository["description"]) ?></td>
                </tr>
                
            <?php endforeach; ?>
            
        </tbody>
    </table>
    
    <a href="new.php">New</a>
    
<?php require "footer.html" ?>











