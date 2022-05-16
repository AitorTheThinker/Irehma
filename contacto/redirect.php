<?php
$location='http://www.irehma.es';
$redirect=true;

if($redirect && !empty($location)){
    header('Location:'. $location);
    exit;
}