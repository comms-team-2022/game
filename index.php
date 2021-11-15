<?php
// Set Timezone
date_default_timezone_set("Australia/Brisbane");

// Prevent opening game.php directly
define("IsIndex", TRUE);

// ! Remember to set to FALSE in production
define("DEV_MODE", TRUE);

$day = date("l");
$hour = date("H");
$minute = date("i");

$isBeforeSchool = $hour < 9 || ($hour == 8 && $minute < 30);
$isAfterSchool = $hour >= 16 || ($hour == 15 && $minute > 15);

if ($day == "Sunday" || $day == "Saturday" || $isBeforeSchool || $isAfterSchool || DEV_MODE) {
    require_once("game.php");
} else {
    require_once("blocked.php");
};

?>
