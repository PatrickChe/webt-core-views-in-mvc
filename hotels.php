<?php

// Load the HTML template
$htmlTemplate = file_get_contents('hotels.html');

$htmlOut = ''; // Initialize the output variable

// Define data for hotels
$hotels = [
    ['name' => 'Hotel A', 'description' => 'Description of Hotel A...'],
    ['name' => 'Hotel B', 'description' => 'Description of Hotel B...'],
    ['name' => 'Hotel C', 'description' => 'Description of Hotel C...'],
];

$i = 0;

// Loop through hotels and replace placeholders
foreach ($hotels as $hotel) {
    // Replace placeholders with actual data
    $html = $htmlTemplate;
    $html = str_replace("{hotel_name}", $hotel['name'], $html);
    $html = str_replace("{hotel_description}", $hotel['description'], $html);

    if ($i > 0) {
        $html = str_replace("{headline}", '', $html);
    }

    $html = str_replace("{headline}", 'Hotels: ', $html);

    // Append the modified HTML for each hotel to the output variable
    $htmlOut .= $html;

    $i++;
}



// Display the final HTML output
echo $htmlOut;
?>