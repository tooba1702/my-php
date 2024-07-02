<?php

// $num = 55;

// if($num % 2 == 0){
//     // echo "even";
//     print("even");

// }
// else{
//    echo "odd";
// }


$math = 25;
$urdu = 20;
$eng = 25;
$physics = 35;
$bio = 88;

$obt_marks = $math + $urdu + $eng + $physics + $bio;

$total_marks = 500;
$percentage = $obt_marks/$total_marks * 100;
echo $percentage;

if ($percentage >= 80 && $percentage <= 100){
    echo "Grade A+";

}
else if ($percentage >= 70 && $percentage <= 79){
    echo "Grade A";
}
elseif ($percentage >= 60 && $percentage <=69) {
    echo "Grade B";
}
elseif ($percentage >= 50 && $percentage <=59) {
    echo "Grade C";
}
elseif ($percentage >= 40 && $percentage <=59) {
    echo "Grade D";
}

else{
    echo "Fail";
}
?>