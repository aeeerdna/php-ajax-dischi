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