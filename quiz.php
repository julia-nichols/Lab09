<?php
//access the global array called $_POST to get the values from the text fields

$count = 0;
$year = $_POST["year"];
echo "What year is it?" . "<br>";
echo "You answered: " . $year . "<br>";
echo "Correct answer: 2022" . "<br>";
if($year=="2022")
{
    $count = $count + 1;
}
echo "</b><br>";
echo "</b><br>";

$capital = $_POST["capital"];
echo "What is the capital of Kansas?" . "<br>";
echo "You answered: " . $capital . "<br>";
echo "Correct answer: Topeka" . "<br>";
if($capital=="Topeka")
{
    $count = $count + 1;
}
echo "</b><br>";
echo "</b><br>";

$class = $_POST["class"];
echo "What EECS class was this quiz made for?" . "<br>";
echo "You answered: " . $class . "<br>";
echo "Correct answer: 448" . "<br>";
if($class=="448")
{
    $count = $count + 1;
}
echo "</b><br>";
echo "</b><br>";

$countries = $_POST["countries"];
echo "How many countries are there in North America?" . "<br>";
echo "You answered: " . $countries . "<br>";
echo "Correct answer: 23" . "<br>";
if($countries=="23")
{
    $count = $count + 1;
}
echo "</b><br>";
echo "</b><br>";

$planet = $_POST["planet"];
echo "What is the largest planet?" . "<br>";
echo "You answered: " . $planet . "<br>";
echo "Correct answer: Jupiter" . "<br>";
if($planet=="Jupiter")
{
    $count = $count + 1;
}
echo "</b><br>";
echo "</b><br>";

echo "You answered " . $count . " questions correctly" . "<br>";
if($count==0)
{
    echo "You got a score of 0%" . "<br>";
}
else if(count==1)
{
    echo "You got a score of 20%" . "<br>";
}
else if(count==2)
{
    echo "You got a score of 40%" . "<br>";
}
else if(count==3)
{
    echo "You got a score of 60%" . "<br>";
}
else if(count==4)
{
    echo "You got a score of 80%" . "<br>";
}
else
{
    echo "You got a score of 100%" . "<br>";
}

?>