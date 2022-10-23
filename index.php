<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Dischi</title>
</head>
<body>

    <?php
        // inclusione database canzoni
        include __DIR__ . '/dischi.php';

        $research_text = '';

        if (isset($_GET['research_text'])){
            $research_text = strtolower ($_GET['research_text']);
            $data = [];
            
            foreach($databaseDischi as $songs){
                if(strlen($research_text) === 0 || strtolower($songs['genre']) == $research_text){
                    $data[] = $songs;
                }
            }
            $databaseDischi = $data;
        }
    ?>

    <header>
        <div class="container">
            <!-- ricerca -->
            <form action="./index.php" method="get">
                <input type="text" name="research_text" value="<?= $research_text ?>">
                <input type="submit" value="Search">
            </form>
        </div>
    </header>

    <main>
        <!-- container canzoni -->
        <div class="container">
            <div class="songs-container d-flex flex-wrap">
                <?php             
                    foreach($databaseDischi as $songs){

                ?>

                <div>
                    <?php
                        // inclusione formattazione album
                        include __DIR__ . '/album.php'
                    ?>
                </div>

                <?php
                    }
                ?>
            </div>
        </div>
    </main>
   
</body>
</html>