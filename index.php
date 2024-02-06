<?php

$hotels = [

    [
        'name' => 'Hotel Belvedere',
        'description' => 'Hotel Belvedere Descrizione',
        'parking' => true,
        'vote' => 4,
        'distance_to_center' => 10.4
    ],
    [
        'name' => 'Hotel Futuro',
        'description' => 'Hotel Futuro Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 2
    ],
    [
        'name' => 'Hotel Rivamare',
        'description' => 'Hotel Rivamare Descrizione',
        'parking' => false,
        'vote' => 1,
        'distance_to_center' => 1
    ],
    [
        'name' => 'Hotel Bellavista',
        'description' => 'Hotel Bellavista Descrizione',
        'parking' => false,
        'vote' => 5,
        'distance_to_center' => 5.5
    ],
    [
        'name' => 'Hotel Milano',
        'description' => 'Hotel Milano Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 50
    ],

];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>PHP Hotel</title>
</head>

<body>

    <table class="table">

        <thead>

            <tr>
                <th scope="col">NOME</th>
                <th scope="col">DESCRIPTION</th>
                <th scope="col">PARKING</th>
                <th scope="col">VOTE</th>
                <th scope="col">DISTANCE TO CENTER</th>
            </tr>
        </thead>
        <tbody>
        <?php
                foreach ($hotels as $singleHotel) {
                ?>
            <tr>
               
                    <th scope="row"><?php echo $singleHotel['name'] ?></th>
                    <td><?php echo $singleHotel['description'] ?></td>
                    <td><?php if ($singleHotel['parking'] == true) {
                         echo 'parking free';
                    }
                    else{
                        echo 'no parking';
                    } ?></td>
                    <td><?php echo $singleHotel['vote'] ?></td>
                    <td><?php echo $singleHotel['distance_to_center'] ?></td>
            </tr>
          
        <?php
                }
        ?>
        </tbody>

    </table>

</body>

</html>