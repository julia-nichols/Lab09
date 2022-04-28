<?php
$count = 0;
$shipping = $_POST["shipping"];
echo "You chose: " . $shipping . " shipping" . "<br>";
$apples = $_POST["apples"];
$oranges = $_POST["oranges"];
$bananas = $_POST["bananas"];
$password = $_POST["password"];
echo "Your password is : " . $password . "<br>";
if($apples==on)
{
    echo "You bought: apples" . "<br>";
    $count = $count + 1.0;
}
if($oranges==on)
{
    echo "You bought: oranges" . "<br>";
    $count = $count + 1.5;
}
if($bananas==on)
{
    echo "You bought: bananas" . "<br>";
    $count = $count + 2.0;
}
echo "Total: $" . $count . "<br>";
?>