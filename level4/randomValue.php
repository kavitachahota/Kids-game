<?php
    $resultArray = array();

    $characters = "12345678910";
    $randomString = '';
    
    for ($i = 0; $i < 6; $i++) {
        do{
            $index = rand(0, strlen($characters) - 1);
        }while(in_array($characters[$index], $resultArray));
        $randomString .= "" . $characters[$index];
        array_push($resultArray, $characters[$index]);
    }

    #var_dump($randomString);

    echo "<h2>$randomString</h2>";

    $sort = str_split($randomString);

    rsort($sort);

    #var_dump($sort);

    $sort = implode($sort);
    #var_dump($sort);

?>