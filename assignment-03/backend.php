<?php
include 'header.php';

$role = "admine";

/*
if($role === "admine"){
    echo "Welcome Admine";
} else echo "Welcome User";
*/

echo $role === "admine" ? "Welcome Admine" :"Welcome User";
echo "<br>";

switch ($role){
    case "admine" : 
        echo "Welcome Admine";
        break;
    case "manager" : 
        echo "Welcome Manager";
        break;
    case "member" : 
        echo "Welcome Member";
        break;
}
echo "<br>";
echo "<br>";


$allUsers = ["allama", "iqbal", "mirza", "ghalib"];
foreach($allUsers as $user){
    echo "$user";
    echo "<br>";
}


?>