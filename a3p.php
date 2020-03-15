<?php
    
    $zip = $_GET["zip"];
    
    $url = "http://api.openweathermap.org/data/2.5/weather?zip=$zip,us&units=metric&appid="; //enter appid key

    $fp = fopen ( $url , "r" );
    $contents = "";
    while ( $more = fread ( $fp, 1000  ) ) {      $contents .=  $more ;   }
    echo $contents ;
    
?>
