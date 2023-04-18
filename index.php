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

    $clicked= '';

    if (isset($_GET['parking'])) {
        $clicked = 'checked';

        $parking_hotels = [];
    
        foreach($hotels as $hotel) {
            if ($hotel['parking'])
            $parking_hotels[] = $hotel;
        }
    
        $hotels = $parking_hotels;

    }

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <title>Hotels</title>
    </head>
    <body>
        <div class="container mt-5">
            <h1>Hotels</h1>
            <form action="index.php" method="GET">
                <div class="d-flex justify-content-between">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="parking" name="parking" <?php echo $clicked ?>>
                        <label class="form-check-label" for="parking">
                           Hotels con parcheggio
                        </label>
                    </div>
                    <button class="btn btn-secondary">Filtra</button>
                </div>
            </form>

            <main>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Nome</th>
                            <th scope="col">Descrizione</th>
                            <th scope="col">Parcheggio</th>
                            <th scope="col">Stelle</th>
                            <th scope="col">Distanza dal centro</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($hotels as $hotel): ?>
                            <tr>
                                <th scope="row"><?php echo $hotel['name'] ?></th>
                                <td><?php echo $hotel['description'] ?></td>
                                <td><?php echo $hotel['parking'] ? 'Sì' : 'No' ?></td>
                                <td><?php echo $hotel['vote'] ?></td>
                                <td><?php echo $hotel['distance_to_center'] ?> Km</td>
                            </tr>
                        <?php endforeach ?>
                        
                    </tbody>
                </table>
                
            </main>
        </div> 
        
    </body>
</html>

