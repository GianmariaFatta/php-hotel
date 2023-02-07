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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- AUTHOR -->
    <meta name="author" content="S.Gianmaria Fatta" >
    <!-- NAME -->
    <title>php-hotel</title>
    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css" integrity="sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- FONT-AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
    <div class="container">
    <table class="table">
 <tbody>
     <tr>
     <th scope="row">1</th>
    <?php foreach($hotels as $hotel) : ?>
        <td><?= $hotel["name"]?></td>
        <?php endforeach; ?>
    </tr>
    <tr>
    <th scope="row">2</th>
    <?php foreach($hotels as $hotel) : ?>
        <td><?= $hotel["description"]?></td>
        <?php endforeach; ?>
    </tr>
    <tr>
    <th scope="row">3</th>
    <?php foreach($hotels as $hotel) : ?>
        <td><?= $hotel["parking"]?></td>
        <?php endforeach; ?>
    </tr>
    <tr>
    <th scope="row">4</th>
    <?php foreach($hotels as $hotel) : ?>
        <td><?= $hotel["vote"]?></td>
        <?php endforeach; ?>
    </tr>
    <tr>
    <th scope="row">5</th>
    <?php foreach($hotels as $hotel) : ?>
        <td><?= $hotel["distance_to_center"]?></td>
        <?php endforeach; ?>
    </tr>
  </tbody>
</table>
    </div>
   <?php var_dump($hotels[0])?>
</body>
</html>