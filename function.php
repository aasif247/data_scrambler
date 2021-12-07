<?php
function displayKey($key){
    printf(" value = '%s' ",$key);
}

function scrambleData($orginalData, $key){
    $originalkey ='abcdefghijklmnopqrstuvwxyz1234567890';
    $data = '';
    $length = strlen($orginalData);
    for ($i = 0; $i < $length; $i++){
        $currentChar = $orginalData[$i];
        $position = strpos($originalkey,$currentChar);
        if($position !== false){
            $data .= $key[$position];
        }else{
            $data .= $currentChar;
        }
    }

    return $data;
}


function decodeData($orginalData, $key){
    $originalkey ='abcdefghijklmnopqrstuvwxyz1234567890';
    $data = '';
    $length = strlen($orginalData);
    for ($i = 0; $i < $length; $i++){
        $currentChar = $orginalData[$i];
        $position = strpos($key,$currentChar);
        if($position !== false){
            $data .= $originalkey[$position];
        }else{
            $data .= $currentChar;
        }
    }

    return $data;
}