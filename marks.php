/*
Write PHP script that will display grade based on criteria given below using the marks
obtained in Examination
*/

<?php
$chem =90;
$phy = 80;
$math=90;
$total=$chem+$phy+$math;
$per = $total/3;
echo "Chemistry marks is : - $chem</br> ";
echo "Physics marks is : - $phy</br> ";
echo "Math marks is : - $math</br> ";
echo "Total Percentage marks is : - $per</br> ";
if($per>=70){
echo " Congratulations you passed with distinction <br>";
}
else if($per>=60){
echo " you passed with First Class <br>";
}
else if($per>=40){
echo " you passed with Second Class <br>";
}
else {
echo "You Failed";
}
?>