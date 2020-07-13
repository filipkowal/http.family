<?php

function sendMail() {
    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $mailFrom = $_POST['email'];
        $uri = $_POST['product'];
        $subject = "Porozmawiajmy o projekcie";
        $mailTo = "hello@http.family";
        $headers = "From:".$mailFrom;
        $productName = getProductName($uri);
        $productOptions = getOptions($uri);
    
        $text = "Cześć,\n\nChciałabym/chciałbym porozmawiać o:\n\n".$productName."\n\n".$productOptions."\n\nPozdrawiam,\n".$name;
    
        if(mail($mailTo, $subject, $text, $headers)) {
            header("Location: ../thanks.php");
        } else {
            header("Location: ../contact-form-mail-error.php");
        }
    
    }
    else {
        header("Location: ../404.php");
    }

    function getOptions($uri) {
        $options = explode("&", $uri);
        array_shift($options);
    
        $optionsString = "";
        foreach ($options as $option) {
            if ($option !== "slider=") {
                $optionsString .= $option."\n";
            }
        }
    
        return $optionsString;
    }
}
sendMail();

?>