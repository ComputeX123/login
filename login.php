<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $dNo = $_POST["dNo"];

    $validUsername = array("d9516@dpsdubai.ae");
    $validPassword = array("9516");

    if ($email === $validUsername && $dNo === $validPassword) {
        // Authentication successful
        echo "Login successful! Welcome, " . $email;
    } else {
        // Authentication failed
        echo "Invalid email or dNo. Please try again.";
    }
}
?>




