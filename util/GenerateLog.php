<?php
echo '<body bcolor="yellow">';
$date_temp= date("M").'_'.date("d").'_'.date("y").'_'.date("h").'_'.date("m").'_'.date("s").'_'.date("A");
$fname= "..\Logs\Log_".$date_temp.".txt";
$fh=fopen($fname,'w') or die ('could not open file');
fwrite($fh,htmlspecialchars($_POST["joblog"])) or die ('could not write file');
fclose($fh);
echo 'Log Generated Successfully';
echo '<br>';
echo '<a href="../util/staff_main.php"> click here to go to the home page </a><br>';
echo '<a href="'.$fname.'"> click here to view log file page </a>';
echo '</body>';
?>