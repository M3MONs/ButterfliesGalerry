<?php
if(isset($_POST['submit'])){
    $to      = 'mitlorgame@gmail.com';
    $subject = 'Butterfly Image';
    $message = $_POST['imagelink'];
    $headers = 'From: ButterfliesGallery@gmail.com';
    
    mail($to, $subject, $message, $headers); 
    header('Location: send.php');
}
?>