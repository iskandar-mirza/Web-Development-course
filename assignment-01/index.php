<?php
echo "Welcome to SpectraDesk SaaS <br>";
print "Welcome to SpectraDesk SaaS <br>";

$userName = "abdullah";
$version = 4.2;
$userCount = 25;

echo $userName;
echo '<br>';
echo $version;
echo '<br>';
echo $userCount;
echo '<br>';

var_dump($userName, $version,$userCount);
echo '<br>';

$floatNamber = 42.751;
$intNumber = (int) $version;
$strNumber = (string) $intNumber;

var_dump($intNumber, $floatNamber, $strNumber);


$appName = "SpectraDesk"; 
$version = "v1.0"; 
?>

<h1>
    Welcome to <?= $appName ?> - <?= $version ?>
</h1>


