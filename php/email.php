<?php
   
    if(isset($_POST["email"]) && !empty($_POST["email"])){
        
        $name =  addcslashes($_POST["name"]);
        $email =  addcslashes($_POST["email"]);
        $message =  addcslashes($_POST["message"]);
    
        $to = "adrianojunior.dev97@gmail.com";
        $subject = "Info Contact Form";
        $body = "Name: ".$name."\r\n"
                ."Email: ".$email."\r\n"
                ."Message: ".$message;
        $header = "From:adrianojunior.dev97@gmail.com"."\r\n"
                    ."Reply-To:".$email."\r\n"
                    ."X=Mailler:PHP/".phpversion();

        if(mail($to,$subject,$body,$header)){
            echo("Email successfully sent!");
        }else{
            echo("Email not sent...");
        }
    }
?>