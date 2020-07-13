<?php
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
        header("Location: ../contact-form.php?mailsend");
    } else {
        header("Location: ../contact-form.php?mailsend=error");
    }

}
else {
    header("Location: contact-form.php?mailsend=from-uri");
}

function getProductName($uri) {
    $start = strpos($uri, "%2F") + 3;
    $end = strpos(substr($uri, $start), ".php");
    return substr($uri, $start, $end);
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
?>