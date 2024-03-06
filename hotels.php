<?php

// Load the HTML template
$htmlTemplate = strpos('<div class="hotel-info">', file_get_contents('hotels.html'));

// Define data for hotels
$hotels = [
    ['name' => 'Hotel A', 'description' => 'Description of Hotel A...'],
    ['name' => 'Hotel B', 'description' => 'Description of Hotel B...'],
    ['name' => 'Hotel C', 'description' => 'Description of Hotel C...'],
];

// Replace placeholders with actual data
foreach ($hotels as $hotel) {
    $placeholder = "{hotel_name}";
    $htmlTemplate = str_replace($placeholder, $hotel['name'], $htmlTemplate);

    $placeholder = "{hotel_description}";
    $htmlTemplate = str_replace($placeholder, $hotel['description'], $htmlTemplate);

}

echo <<<HTML
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel InfoSite</title>
    <style>
        /* Add your CSS styles for responsiveness here */
    </style>
</head>
HTML . $htmlTemplate;

?>