<?php
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $mailFrom = $_POST['email'];
    // $message = $_POST['message'];
    $subject = "Porozmawiajmy o projekcie";
    $mailTo = "hello@http.family";
    $headers = "From:".$mailFrom;
    $text = "Mail testowy";
    // ."\n\n".$message."\n\nPozdrawiam,\n".$name;

    if(mail($mailTo, $subject, $text, $headers)) {
        echo "It was sent";
        echo $mailTo, $subject, $text, $headers;
    } else {
        echo "Email was not sent";
    }
    // header("Location: single-page.php?mailsend");

}
else {
    header("Location: single-page.php?mailsend=error");
}
?>