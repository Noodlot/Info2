<?php
function getDb(){
    $link = mysqli_connect("localhost", "root", "") or die("Kapcsolódási hiba: " . mysqli_error());
    mysqli_select_db($link, "Hazi");
    mysqli_query ($link, "set character_set_results='utf8'");
    return $link;   
}

?>