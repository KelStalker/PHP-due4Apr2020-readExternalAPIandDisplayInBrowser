<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Get API data to Display in Browser</title>
</head>
<body>
    <h1>PHP - Get API Data & Display in Browser</h1>
    <?php
        echo 'PHP Homework Ass due 4 Apr 2020 - ';

        // Demontrate difference between single/double quotes
        // (unparsed vs parsed) - double quotes will check if part of the
        // string is a variable
        $kelsAssignmentIs = 'Kels assignment is: $assignmentDetails';
        $assignmentDetails = ' read an api and output in browser';
        echo "$kelsAssignmentIs " . "$assignmentDetails";
    ?>
</body>
</html>