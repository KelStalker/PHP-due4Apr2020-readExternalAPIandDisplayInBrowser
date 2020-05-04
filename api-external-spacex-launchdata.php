<?php
// Submit a request to SpaceX for it's launch data
$spaceXLaunchDataJSONString = file_get_contents( 'https://api.spacexdata.com/v3/launches');
  // Convert the response to a PHP object.
  $spaceXLaunchDataObject = json_decode( $spaceXLaunchDataJSONString );
  
  // Collect the first user in the results array.
  $spaceXLaunchData = $spaceXLaunchDataObject->results[0];
?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>External API PHP SpaceX Launch Data</title>
</head>
<body>
  <h1>External API PHP SpaceX Launch Data</h1>
  <?php include './includes/navigation.php'; ?>