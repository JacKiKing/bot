<?php
    const TOKEN = '5462005495:AAHMvWfZrFYd4dR6mrSYg_A7LRJr4lxQB2M';

    echo $url = 'https://api.telegram.org/bot'.TOKEN.'/JacKiKing.github.io';

    $response = file_get_contens($url);

    var_dump($response);

?>
