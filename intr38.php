<html>
   
   <head>
      <title>Sending HTML email using PHP</title>
   </head>
   
   <body>
      
      <?php
         $to = "koushik.paul1999@gmail.com";
         $subject = "Need more updates";
         
         $message = "<b>This is HTML message.</b>";
         $message .= "<h1>This is headline.</h1>";
         
         $header = "From:akashsadhuofficial@gmail.com \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
		 /*set_ini()
		[mail function]
		; For Win32 only.
		; http://php.net/smtp
		SMTP = localhost
		; http://php.net/smtp-port
		smtp_port = 25

		; For Win32 only.
		; http://php.net/sendmail-from
		;sendmail_from = akashsadhuofficial@gmail.com*/
         
         $retval = mail ($to,$subject,$message,$header);
         
         if( $retval == true ) {
            echo "Message sent successfully...";
         }else {
            echo "Message could not be sent...";
         }
      ?>
      
   </body>
</html>