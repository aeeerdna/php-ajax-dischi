<?php

include __DIR__ . '/../db-dischi.php';

header ("Content-Type: application/json");

echo json_encode($databaseDischi);

?>