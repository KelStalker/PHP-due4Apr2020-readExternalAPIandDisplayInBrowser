<?php
// Submit a request to SpaceX for it's launch data
$spaceXLaunchDataJSONString = file_get_contents( 'https://api.spacexdata.com/v3/launches/latest');
  // Convert the response to a PHP object.
  $spaceXLaunchDataObject = json_decode( $spaceXLaunchDataJSONString );
  
  // Should collect the second launch in the array. (array[1] is the second entry)
  $spaceXLaunchData = $spaceXLaunchDataObject->results[1];
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
  <h2>SpaceX Launch Info (2nd entry in array)</h2>
    <dl>
      <dt>Flight Info</dt>
        <dd>
          <?php echo $spaceXLaunchData->flight_number;?>
        </dd>

        <dd>
          <?php echo $spaceXLaunchData->mission_name; ?>
        </dd>

        <dd>
          <?php echo $spaceXLaunchData->launch_year;?>
        </dd>
    </dl>
  </body>