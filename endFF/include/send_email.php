<?php
if (isset($_POST['email']) && isset($_POST['des'])) {
    $to = "fluffy.tails1111@gmail.com";
    $name = $_POST['name'];
    $email = $_POST['email'];
    $body = "From: $name\r\nReport A Rescue: " . $_POST['des'];
    $subject = "Complaint";

 
    //validate is the name is alphabets only
    if (!preg_match ("/^[A-Za-z_]+$/", $_POST['name'] ) ) {  
        $ErrMsg = "Name should only be alphabets.<br/>";  
        echo $ErrMsg; exit(0);
    }
    // Prepare the email headers
    $headers = "From: $email\r\n";
    // Send the email
    if (mail($to, $subject, $body, $headers)) {
        echo 
        '<script>
            alert("Message was sent successfully");
            sessionStorage.clear();
            history.back();
        </script>';

    } else {
        echo '<script>alert("Message failed to be sent");</script>';
    }
}
?>