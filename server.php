<?php
session_start();

// connect to database
$db = mysqli_connect('localhost', 'root', '', 'festasignaturebeads');

// checking if is connected
// if ($db) {
//     # code...
//     echo 'successful';
// }

if (isset($_POST['submitId'])) {

    $email = mysqli_real_escape_string($db, $_POST['emailId']);
    $firstName = mysqli_real_escape_string($db, $_POST['firstNameId']);
    $ageGroup = mysqli_real_escape_string($db, $_POST['ageGroupId']);
    $phoneNumber = mysqli_real_escape_string($db, $_POST['phoneId']);
    $birthday = mysqli_real_escape_string($db, $_POST['birthdayId']);
    $festaBeads = mysqli_real_escape_string($db, $_POST['festaBeadsId']);
    $favoriteAccessory = mysqli_real_escape_string($db, $_POST['favouriteAccessoryId']);
    $occassion = mysqli_real_escape_string($db, $_POST['occassionId']);
    $comment = mysqli_real_escape_string($db, $_POST['commentId']);
    $stateLocation = mysqli_real_escape_string($db, $_POST['locationId']);
    
    $userEmail = "SELECT * FROM questionairetable WHERE email = '$email'";
    $queryUserEmail = mysqli_query($db, $userEmail);

    if(mysqli_num_rows($queryUserEmail) == 0){
    $query = "INSERT INTO questionairetable(email, firstName, ageGroup, phoneNumber, birthday, festaBeads, favoriteAcessory, occassion, comment, stateLocation) VALUES ('$email','$firstName','$ageGroup','$phoneNumber','$birthday','$festaBeads','$favoriteAccessory','$occassion','$comment', '$stateLocation')";

    mysqli_query($db, $query);
    
    header('location: matchi.html');

    }else{
        header('location: errorPage.html');
    }
}else{
    // for error page
    header('location: errorPage.html');
}

// if (isset($_POST['updateId'])) {
//     # code...
//     $email = mysqli_real_escape_string($db, $_POST['emailId']);
//     $firstName = mysqli_real_escape_string($db, $_POST['firstNameId']);
//     $ageGroup = mysqli_real_escape_string($db, $_POST['ageGroupId']);
//     $phoneNumber = mysqli_real_escape_string($db, $_POST['phoneId']);
//     $birthday = mysqli_real_escape_string($db, $_POST['birthdayId']);
//     $festaBeads = mysqli_real_escape_string($db, $_POST['festaBeadsId']);
//     $favoriteAccessory = mysqli_real_escape_string($db, $_POST['favouriteAccessoryId']);
//     $occassion = mysqli_real_escape_string($db, $_POST['occassionId']);
//     $comment = mysqli_real_escape_string($db, $_POST['commentId']);

//     $query = "UPDATE customers SET email = '$email', firstName = '$firstName', ageGroup = '$ageGroup', phoneNumber = '$phoneNumber, birthday = '$birthday' , festaBeads = '$festaBeads' , favoriteAcessory ='$favoriteAccessory', occassion = '$occassion, comment = '$comment' WHERE email = $email ";
// }else{
//     echo 'unsuccessful';
// }

?>