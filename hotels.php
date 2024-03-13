<?php

// Load the HTML template
$htmlMainTemplate = file_get_contents('main.html');
$htmlTemplate = file_get_contents('hotels.html');

$htmlOut = '';
$htmlOutFin = ''; // Initialize the output variable

// Define data for hotels
$hotels = [
    ['name' => 'Hotel A', 'description' => 'Description of Hotel A...'],
    ['name' => 'Hotel B', 'description' => 'Description of Hotel B...'],
    ['name' => 'Hotel C', 'description' => 'Description of Hotel C...'],
];

// Loop through hotels and replace placeholders
foreach ($hotels as $hotel) {
    // Replace placeholders with actual data
    $html = $htmlTemplate;
    $html = str_replace("{hotel_name}", $hotel['name'], $html);
    $html = str_replace("{hotel_description}", $hotel['description'], $html);

    // Append the modified HTML for each hotel to the output variable
    $htmlOut .= $html;
}
$html2 = $htmlMainTemplate;
$html2 = str_replace("{headline}", "Hotels: ", $html2);
$html2 = str_replace("{hotels}", $htmlOut, $html2);
$htmlOutFin = $html2;



// Display the final HTML output
echo $htmlOutFin;
?>