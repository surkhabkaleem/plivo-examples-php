<?php
    require_once 'plivo.php';

    $convmap = array(0x80, 0xffff, 0, 0xffff);
    $body = mb_encode_numericentity("A rainha do aché comeu 1 maçã, 2 mamões e outras frutas às 15hs do dia 23/5/2012. Parabéns e abraços do vovô e da vovó.", $convmap, 'UTF-8'); 
    $url = 'http://examples.com/playTrumpet.mp3';
    $attributes = array (
        'loop' => 2,
    );

    $r = new Response();

    // Add speak element
    $r->addSpeak($body, $attributes);

    // Add play element
    $r->addPlay($url, $attributes);

    // Add wait element
    $wait_attribute = array(
        'length' => 3,
    );
    $r->addWait($wait_attribute);

    echo($r->toXML());
?>

