<?php
function my_implode($delimeter, $names){

    $rnames = '';
    foreach ($names as $name){
        $rnames .= $name.$delimeter;
    }
    return $rnames;
}
