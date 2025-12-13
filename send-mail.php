<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $travel_date = $_POST['travel_date'];
    $pax = $_POST['pax'];
    $message = $_POST['message'];

    $to = "northeasttourplanner.in@gmail.com";
    $subject = "Tour Enquiry";

    $body = "
    --- New Enquiry Details ---

    Name: $name
    Phone: $phone
    Email: $email
    Travel Date: $travel_date
    Total Pax: $pax
    Message:
    $message

    ---------------------------
    ";

    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "<h2 style='text-align:center;color:green;'>Enquiry Sent Successfully!</h2>";
    } else {
        echo "<h2 style='text-align:center;color:red;'>Failed to Send Enquiry. Try Again.</h2>";
    }
}
?>