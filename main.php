<?php
// $num=12;
// if($num%2 ===0){
//     echo "even";
// }
// else{
// echo "odd";
// }

$eng = 85;
$maths = 45;
$urdu = 75;
$phy = 50;
$chem = 70;
$total_marks = 500;
$obt_marks = $eng + $urdu + $maths + $phy + $chem;
// echo $obt_marks;
$percentage = $obt_marks/$total_marks*100;
echo $percentage;


if ($percentage >= 80 &&  $percentage <= 100){
    echo "Grade A+";
}
else if ($percentage >= 70 && $percentage <= 79){
    echo "Grade A";
}
else if ($percentage >= 60 && $percentage <= 69){
    echo "Grade B";
}
else if ($percentage >= 50 && $percentage <= 59){
    echo "Grade C";
}
else {
    echo "Fail";
}





?>