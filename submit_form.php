<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    $data = [
        'name' => $name,
        'email' => $email,
        'message' => $message
    ];

    $dataString = json_encode($data) . "\n";

    // Save data to a file
    file_put_contents('form_data.txt', $dataString, FILE_APPEND);

    echo "<p>Thank you for your inquiry! We will get back to you soon.</p>";
}
?>
