<?php
$data = file('form_data.txt');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submitted Data</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="data-container">
        <h2>Submitted Form Data</h2>
        <?php
        foreach ($data as $entry) {
            $entryData = json_decode($entry, true);
            echo "<pre>Name: " . $entryData['name'] . "</pre>";
            echo "<pre>Email: " . $entryData['email'] . "</pre>";
            echo "<pre>Message: " . $entryData['message'] . "</pre>";
            echo "<hr>";
        }
        ?>
    </div>
</body>
</html>
