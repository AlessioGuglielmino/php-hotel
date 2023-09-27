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

    ]

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PHP-BADWORDS</title>

    <!-- FOGLIO DI STILE CSS -->
    <link rel="stylesheet" href="./style.css" />

    <!-- CDN BOOTSTRAP -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
</head>

<body>
    <div class="container mt-5">
        <h1>
            Hotel List
        </h1>

        <div class="card">
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Descrizione</th>
                            <th scope="col">Parcheggio</th>
                            <th scope="col">Voto</th>
                            <th scope="col">Distanza dal centro</th>

                        </tr>
                    </thead>
                    <tbody>

                        <?php  foreach($hotels as $index => $hotel):   ?>
                        <tr>
                            <th scope="row"><?php echo $index +1  ?>
                            </th>
                            <td> <?php echo $hotel ['name']  ?></td>
                            <td><?php echo $hotel ['description']  ?></td>
                            <td><?php echo $hotel ['parking'] ? 'Si' : 'No'  ?></td>
                            <td><?php echo $hotel ['vote']  ?></td>
                            <td><?php echo $hotel ['distance_to_center']  ?></td>

                        </tr>
                        <?php  endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>

        <ul>

        </ul>

    </div>

</body>

</html>



<?php    ?>