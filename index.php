<?php

require 'vendor/autoload.php';

$foaf = new EasyRdf_Graph("http://localhost:8080/ontologijaAPI/begovic.rdf");
$foaf->load();

print_r($foaf);
