<?php

try {
    $dsn ='mysql:host=localhost;dbname=tugasimk';
    $db = new PDO ($dsn, 'root','');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch(PDOException $e) {
    //show error
    echo '<p class="bg-danger">'.$e->getMessage().'</p>';
    exit;
}
?>
