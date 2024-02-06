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
$userSearch = [];
$searchParking = $_GET['parking'] != 0 ? $_GET['parking'] : '';
$searchVote = $_GET['valutation'] != 0 ? $_GET['valutation'] : '';

foreach ($hotels as $hotel) {

    $luxury = $hotel['vote'] >= intval($searchVote);
    $rentCar = ($searchParking == 'parking' && $hotel['parking']) || ($searchParking == 'no-parking' && !$hotel['parking'] );
    
    if(($luxury && $_GET['valutation'] != 0) || $_GET['valutation'] == 0){
        if(($rentCar && $_GET['parking'] != 0) || $_GET['parking'] == 0){
            $userSearch[] = $hotel;
        }
    }
        
}

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

    <div class=" container ">

        <div class=" text-center ">
            <h1>Cerca il tuo Hotel</h1>
        </div>
        <form action="" class="d-flex" method="GET">
             <select name="parking" class="form-select" aria-label="Default select example">
                <option value="0" selected>Parking?</option>
                <option value="no-parking">no</option>
                <option value="parking">yes</option>
            </select>
            <select name="valutation" class="form-select" aria-label="Default select example">
                <option value="0" selected>Valutation</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>

            <button type="submit" class="btn btn-primary">Ricerca</button>
        </form>

        <table class="table my-2 ">

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
                foreach ($userSearch as $singleHotel) {
                ?>
                    <tr>

                        <th scope="row"><?php echo $singleHotel['name'] ?></th>
                        <td><?php echo $singleHotel['description'] ?></td>
                        <td><?php if ($singleHotel['parking'] == true) {
                                echo 'parking free';
                            } else {
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
    </div>
</body>

</html>