<?php
$name = $_REQUEST["name"];
$email = $_REQUEST["email"];
$phone = $_REQUEST["phone"];
$vin = $_REQUEST["vin"];
$textarea = $_REQUEST["textarea"];
$zip = $_REQUEST["zip"];

// Email to Adminstrator 
if (isset($email) && isset($name)) {
    $to = "contact@autoquotable.com"; /* <= Change this Email ID to yours */
    $subject = "$name Needs A Quote"; /* <= Change the Subject If you want */
    $attachments = [];
    $random_hash = md5(date('r', time())); 
    
    $headers = "From: $email\r\nReply-To: $email"; 
    $headers .= "\r\nContent-Type: multipart/mixed; boundary=\"PHP-mixed-".$random_hash."\"";

    if ( isset($_FILES["photo"]) ) {
        foreach ( $_FILES["photo"]["tmp_name"] as $index => $tmpName ) {
            $attachments[] = [
                "type" => $_FILES["photo"]["type"][$index],
                "name" => $_FILES["photo"]["name"][$index],
                "data" => chunk_split(base64_encode(file_get_contents($tmpName))),
            ];
        }
    } 

    $message = "--PHP-mixed-" . $random_hash . "\r\n";
    $message .= "Content-Type: multipart/alternative; boundary=\"PHP-alt-" . $random_hash . "\"\r\n\r\n";
    $message .= "--PHP-alt-" . $random_hash . "\r\n";
    $message .= "Content-Type: text/plain; charset=\"iso-8859-1\"\r\nContent-Transfer-Encoding: 7bit\r\n\r\n";
    $message .= "Name: " . $name . "\r\nEmail: " . $email . "Message: " . $textarea . "\r\n\r\n";
    $message .= "--PHP-alt-" . $random_hash . "\r\n";
    $message .= "Content-Type: text/html; charset=\"iso-8859-1\"\t\nContent-Transfer-Encoding: 7bit\r\n\r\n";
    $message .= "<h2 style='margin:auto; background-color: #2196F3; color: #fff; text-align: center; padding: 10px; width: 300px; border-radius: 60px; position: absolute; left: 0; right: 0; top: 0; font-family: sans-serif; font-weight: 300;'>New Quote Requested</h2><table rules='all' style='border-color: #666; margin: auto; margin-top: 40px; width: 300px; font-family: sans-serif' cellpadding='10'><tbody style='border: 1px solid #666;'><tr style='background: #eee; border: 1px solid #666;'><td style='border: 1px solid #666;  padding-top: 20px;'><strong>Name:</strong></td><td style='border: 1px solid #666;  padding-top: 20px;'>". $name . "</td></tr><tr><td><strong>Email:</strong></td><td>". $email . "</td></tr><tr><td><strong>Phone:</strong></td><td>". $phone . "</td></tr><tr><td><strong>Zip:</strong></td><td>". $zip . "</td></tr><tr><td><strong>VIN:</strong></td><td>". $vin . "</td></tr><tr><td><strong>Message:</strong></td><td>". $textarea . "</td></tr><tr><td><strong>Image:</strong></td><td><em>See Attached</em></td></tr></tbody></table>\r\n\r\n";

    if ( count($attachments) ) {
        foreach ($attachments as $attachment) {
            $message .= "--PHP-mixed-" . $random_hash . "\r\n";
            $message .= "Content-Type: " . $attachment["type"] . "; name=\"" . $attachment["name"] . "\"\r\n";
            $message .= "Content-Transfer-Encoding: base64\r\n";
            $message .= "Content-Disposition: attachment\r\n\r\n";
            $message .= $attachment["data"];
            $message .= "\r\n\r\n--PHP-mixed-" . $random_hash . "\r\n";
        }
    }
    
       $mail_sent = @mail( $to, $subject, $message, $headers, '-fcontact@autoquotable.com' );
    //if the message is sent successfully print "Mail sent". Otherwise print "Mail failed"
    
    echo $mail_sent ? "ok" : "failed"; 
} else {
    echo "failed";
}

// Email confirmation to client
if (isset($email) && isset($name)) {
    $subject = "Thanks for choosing Auto Quotable"; /* <= Change the Subject If you want */
    $to = $email;
		$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
$headers .= "From: Auto Quotable <contact@autoquotable.com>\r\n"."Reply-To: contact@autoquotable.com\r\n" ;
$msg     = "<table style='margin: auto; font-family: sans-serif;'><tr><td><img src='http://www.autoquotable.com/assets/images/AutoQuotable_logo.png' style='width: 200px; padding: 5px;'><div style='background-color: #F5F5F5; border: 1px solid #E0E0E0; border-radius: 4px; -webkit-border-radius: 4px; -moz-border-radius: 4px; max-width:500px; margin: auto; float: none;'><div style='background-color: #00C853; width: 100%; margin-top: -20px; margin-bottom: -30px; border-top-left-radius: 4px; border-top-right-radius: 4px;'><h2 style='color: #fff; text-align: center; padding: 10px; margin-top: 0px'>Quotes Are On The Way</h2></div><table style='padding: 10px;'><tr><td><p style='margin-top:30px;'>Hi $name,</p><p>Thanks for choosing Auto Quotable.</p><h4 style='text-align: left; line-height: 1.3em; margin-top: 30px; margin-bottom: 30px; width: 100%;'>Quotes from nearby, qualified auto body repair shops will be sent to your email soon.</h4></td></tr><tr style='font-size: 14px;'><td><p>FAQ<br/><a href='http://www.autoquotable.com/faq.php' style='color: gray;'>www.autoquotable.com/faq</a></p></td></tr><tr style='font-size: 14px;'><td><p>Contact Us <br/><a href='mailto:contact@autoquotable.com' style='color: gray;'>contact@autoquotable.com</a></p></td></tr></table></div></td><td></td></tr></table>\r\n\r\n";

    
    $mail_sent2 = @mail( $to, $subject, $msg, $headers, '-fcontact@autoquotable.com' );
} 

?>