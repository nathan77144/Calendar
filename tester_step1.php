<?php

function display_event($event){

    $name='RDV Client Smith';
    $date = '31-12-2019';
    $location = 'Nantes';
    $event =[$name,$date,$location];
    

     echo "The ". " '$name' ". "event will take place on". " $date " ."in $location";

}

display_event([
    'name' => 'RDV Client Smith',
    'date' => '20191231',
    'location' => 'Nantes'
    ]);
    


    



