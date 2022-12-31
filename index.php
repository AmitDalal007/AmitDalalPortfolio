<?php
if(isset($_POST))
{
$name = $_POST['name'];
$mail = $_POST['email'];
$sub = $_POST['subject'];
$msg = $_POST['message'];

$to = "dalalamit.201@gmail.com";

$subject = "From Amit Dalal Portfolio";

$message = "<table colspan='5px' cellpadding='5px'>
<tr><td>Name :-</td><td>$name</td></tr>
<tr><td>Email :-</td><td>$mail</td></tr>
<tr><td>Subject :-</td><td>$sub</td></tr>
<tr><td>Message :-</td><td>$msg</td></tr>
</table>";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <amitdalal.201@gmail.com>' . "\r\n";
$headers .= 'Bcc: <amitdalal.201@gmail.com>' . "\r\n";
//$headers .= 'Cc: myboss@example.com' . "\r\n";

header('Location: https://epic-rosalind-324f79.netlify.app/friend.html');
@mail($to,$subject,$message,$headers);

echo "your request has been accepted successfully!";
}
else
{
    echo "your request denied something went wrong!";
}

?>