<?php

date_default_timezone_set('Europe/London');

$date = new DateTime();

$velorutionDepartureTime = (new DateTime)->setDate(2024, 06, 24)->setTime(10, 00, 00);

$timeUntilDeparture = $date->diff($velorutionDepartureTime);

$DaysUntilDeparture = $timeUntilDeparture->format('%a');
$HoursUntilDeparture = $timeUntilDeparture->format('%h');
$MinutesUntilDeparture = $timeUntilDeparture->format('%i');

$timeInformation = [
    'jours' => $DaysUntilDeparture,
    'heures' => $HoursUntilDeparture,
    'minutes' => $MinutesUntilDeparture,
];
