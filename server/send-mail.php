<?php

function sendMail() {
    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $mailFrom = $_POST['email'];
        $productDescription = $_POST['productDescription'];

        $subject = "Porozmawiajmy o projekcie";
        $mailTo = "hello@http.family";
        $headers = "From:".$mailFrom;
    
        $text = "Cześć,\n\nChciałabym/chciałbym porozmawiać o:\n\n".$productDescription."\n\nPozdrawiam,\n".$name;
    
        if(mail($mailTo, $subject, $text, $headers)) {
            header("Location: ../thanks.php");
        } else {
            header("Location: ../contact-form-mail-error.php");
        }
    }
    else {
        header("Location: ../404.php");
    }

}
sendMail();

?>