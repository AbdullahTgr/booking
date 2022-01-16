<?php



$text = file_get_contents("http://pod.mohp.gov.eg/Register.aspx");




$explode1 = explode('</select>', $text);
$explode2 = explode('</div>', $explode1[7]);

echo $explode2[1];

?>