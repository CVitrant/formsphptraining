<?php
$agedate = date('Y',strtotime($_POST['age']));
$todayDate = date("Y");
$age = $todayDate - $agedate;
echo "<script>alert(\"$agedate\")</script>";
echo "<script>alert(\"$age\")</script>";
if ($age < 18) {
    echo "<script>alert(\"Vous n'avez pas l'âge requis\")</script>";
}else {
    echo "<script>alert(\"Vous pouvez accéder au site\")</script>";
}
?>