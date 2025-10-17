<?php
$tasks = ["Design UI", "Setup DB", "Write Docs"];

foreach ($tasks as $task) {
    echo $task . "<br>";
}

echo "<br>";

array_push($tasks, "Deploy App");

foreach ($tasks as $task) {
    echo $task . "<br>";
}

echo "<br>";

$team1 = ["Alice", "Bob"];
$team2 = ["Charlie", "Eve"];

$merged_team = array_merge($team1, $team2);
print_r($merged_team);
?>

