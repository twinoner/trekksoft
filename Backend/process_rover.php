<?php
require_once 'Rover.php'; // Include the Rover class

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $roversData = $_POST['rovers']; // Array containing rover data

    $results = [];

    foreach ($roversData as $roverId => $roverData) {
        $x = $roverData['x'];
        $y = $roverData['y'];
        $direction = $roverData['direction'];
        $commands = str_split($roverData['commands']); // Split comma-separated commands

        // Transform and validate commands: Allow only 'R', 'L', and 'M'
        $validCommands = ['R', 'L', 'M'];
        $filteredCommands = array_filter($commands, function ($command) use ($validCommands) {
            return in_array(trim(strtoupper($command)), $validCommands);
        });

        $rover = new Rover($x, $y, $direction);
        $rover->move($filteredCommands);

        $results[$roverId] = [
            'position' => $rover->getPosition(),
        ];
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Rover Movement Simulator - Result</title>
</head>
<body>
    <h1>Rover Movement Simulator - Result</h1>
    <?php if (!empty($results)) : ?>
        <h2>Results:</h2>
        <ul>
            <?php foreach ($results as $roverId => $result) : ?>
                <li>Rover <?php echo $roverId; ?>: <?php echo $result['position']; ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>
    <a href="index.html">Go Back</a>
</body>
</html>
