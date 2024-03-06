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

// Loop through hotels and replace placeholders
foreach ($hotels as $hotel) {
    // Replace placeholders with actual data
    $html = $htmlTemplate;
    $html = str_replace("{hotel_name}", $hotel['name'], $html);
    $html = str_replace("{hotel_description}", $hotel['description'], $html);

    // Append the modified HTML for each hotel to the output variable
    $htmlOut .= $html;
}

// Display the final HTML output
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

<body>
    <div class="container">
        <h1>Hotels on the Strip</h1>
        $htmlOut
    </div>
</body>

</html>
HTML;
?>
