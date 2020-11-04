<?php

    // $email = $_POST['userEmailId'];
    // $subject = $_POST['subjectMailId'];
    // $message = $_POST['messageId'];
    // $admin = 'mail to: admin@gmail.com';
    // $body = ""

// if (isset($_POST['submit'])) {
//     # code...
//     if (mail($admin, $subject, $message, "From:", $email)) {
//         # code...
//         echo '<p> Thanks for contacting us. </p>'
//     }else{
//         echo '<p> Something went wrong, try once more </p>'
//     }
// }

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    # code...
    $email = strip_tags(trim($_POST['userEmailId']));
    $subject = strip_tags(trim($_POST['subjectMailId']));
    $message = strip_tags(trim($_POST['messageId']));
    $admin = 'festasignaturebeads@gmail.com';
    $body = "";

    mail($admin, $subject, $message, "From:", $email);
    header('location: feedback.html');
}else{
    header('location: errorPage.html');
}

?>