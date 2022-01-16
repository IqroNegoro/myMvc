<?php 

$output = "";

foreach ($data["search"] as $x) {
    if ($output != "") {$output .= ",";};
        $output .= '{ "id" : "' . $x["id"] . '", "profile" : "' . $x["profile"] . '", "nama" : "' . $x["nama"] . '", "email" : "' . $x["email"] . '", "jurusan" : "' . $x["jurusan"] . '"}';
}

$output = '{ "data" : [' . $output . ']}';

echo($output);