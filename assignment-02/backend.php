<?php
$basePrice = 100; 
$taxRate = 0.1;
$totalPrice = $basePrice + $basePrice * $taxRate ;
echo "Total price is : $totalPrice";
echo "<br>";

$isPremium = true;
if($isPremium){
    echo "This user is Premium";
}
echo "<br>";

$appName = "Spectra" . "Desk";
var_dump($appName);
echo "<br>";

$arr1 = [1, 2, 3];
$arr2 = [1, 2, 3, 4, 5];
var_dump(array_diff($arr2, $arr1));

?>