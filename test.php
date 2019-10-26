<?php

$from = "lthnh15032001@gmail.com";

$to = "lthnh15032001@gmail.com";

$subject = "Checking PHP mail";

$message = "PHP mail works just fine";

$headers = "From:" . $from;

if(mail($to,$subject,$message, $headers) == true){
	echo "thành công";
}
else
{
	echo "đéo thành công";
}

 ?>