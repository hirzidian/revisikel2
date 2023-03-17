<?php 

$students = [
    [
        "nama" => "Annisa",
        "nis" => "12208902",
        "rayon" => "ciawi",
        "major" => "PPLG",

    ]

];

foreach ( $students as $student) {
    echo $student ["nama"];
    echo $student ["nis"];
    echo $student ["rayon"];
    echo $student ["major"];
}



?>
