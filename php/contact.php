<?php
if (isset($_POST["submit"])) {
    $email = $_POST('email');
    $subject = $_POST('subject');
    $content = $_POST('content');

    $from = ''; 
    $to = 'weunbin@outlook.com'; 


    $body = "From: $email\n content:\n $content";

    if (!$_POST['subject']) {
        $errSubject = 'Please a subject';
    }else{
        $errSubject ='';
    }  
    if (!$_POST['content']) {
        $errContent = 'Please enter your message';
    }else{
        $errContent ='';
    }    
    if (!$errSubject && !$errContent) {
        if (mail ($to, $subject, $body, $from)) {
            $result='<div class="alert alert-success">Thank You! I will get back to you as soon as possible!</div>';
        } else {
            $result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again!</div>';
        }
    }
}

?>