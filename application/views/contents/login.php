<?php
    $ip_get = $this->input->ip_address();
    echo $ip_get;
    echo "</br>";
    $datestring = '%Y-%m-%d %H:%i:%s';
    $time = time();
    echo mdate($datestring, $time);
?>