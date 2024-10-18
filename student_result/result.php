<?php
echo "Five Subject Marks:";
echo "<br>";
echo "<br>";
echo "Subject-1  :  ",  $s1=57;
echo "<br>";
echo "Subject-2  :  ",  $s2=55;
echo "<br>";
echo "Subject-3  :  ",  $s3=42;
echo "<br>";
echo "Subject-4  :  ",  $s4=40;
echo "<br>"; 
echo "Subject-5  :  ",  $s5=38;
echo "<br>";
echo "<br>";


$total=$s1+$s2+$s3+$s4+$s5;
echo "Total Marks  = ", $total;
echo "<br>";
echo "<br>";

$average=$total/5;
echo "Average  = ", $average;
echo "<br>";
echo "<br>";


switch (true) {
    case ($average<=100 && $average>= 80);
    echo "Grade =  A+";
    break;
    case ($average<= 79 && $average>= 70);
    echo "Grade =  A";
    break;
    case ($average<= 69 && $average>= 60);
    echo "Grade =  A-";
    break;
    case ($average<= 59 && $average>= 50);
    echo "Grade =  B";
    break;
    case ($average<= 49 && $average>= 40);
    echo "Grade =  C";
    break;

    case ($average<= 39 && $average>= 33);
    echo "Grade =  D";
    break;

    case ($average<33);
    echo "Grade =  F";
    break;

}
