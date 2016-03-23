<?
$name  = $_REQUEST["name"];
$email = $_REQUEST["email"];
$bshop = $_REQUEST["bodyshop"];
$msg   = $_REQUEST["msg"];
$zip = $_REQUEST["zip"];
$textarea = $_REQUEST["textarea"];
$to    = "contact@autoquotable.com"; /* <= Change this Email ID to yours */
if (isset($email) && isset($name)) {
    $subject = "$name at $bshop signed up for Auto Quotable"; /* <= Change the Subject If you want */
		$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
$headers .= "From: ".$name." <".$email.">\r\n"."Reply-To: ".$email."\r\n" ;
$msg     = "<h2 style='margin:auto; background-color: #2196F3; color: #fff; text-align: center; padding: 10px; width: 300px; border-radius: 60px; position: absolute; left: 0; right: 0; top: 0; font-family: sans-serif; font-weight: 300;'>New Pro Sign Up</h2><table rules='all' style='border-color: #666; margin: auto; margin-top: 40px; width: 300px; font-family: sans-serif' cellpadding='10'><tbody style='border: 1px solid #666;'><tr style='background: #eee; border: 1px solid #666;'><td style='border: 1px solid #666;  padding-top: 20px;'><strong>Name:</strong></td><td style='border: 1px solid #666;  padding-top: 20px;'>". $name . "</td></tr><tr><td><strong>Email:</strong></td><td>". $email . "</td></tr><tr><td><strong>Body Shop Name:</strong></td><td>". $bshop . "</td></tr><tr><td><strong>Zip:</strong></td><td>". $zip . "</td></tr><tr><td><strong>Message:</strong></td><td>". $textarea . "</td></tr></tbody></table>";
	
   $mail =  mail($to, $subject, $msg, $headers);
  if($mail)
	{
		echo 'sent';
	}

else
	{
		echo 'failed';
	}
}

?>