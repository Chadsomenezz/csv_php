<?php


ini_set("auto_detect_line_endings",true);

$handler = fopen("us-500.csv","r");
$flag = true;
$recordCount = 1;
$header = [];
while( ($data = fgetcsv($handler)) !== FALSE){
    $num = count($data);

    if($flag) {$flag = false;continue;} //to skip the first row of the csv file

    echo "<h1>Record $recordCount</h1>";
    $recordCount++;
    echo "<ul>";
    for($i=0;$i<$num;$i++){
        switch ($i){
            case 0:
                echo "<li>" . "First Name: " . $data[$i] ."</li>";
                break;
            case 1:
                echo "<li>" . "Last Name: " . $data[$i] ."</li>";
                break;
            case 2:
                echo "<li>" . "Company Name: " . $data[$i] ."</li>";
                break;
            case 3:
                echo "<li>" . "Address: " . $data[$i] ."</li>";
                break;
            case 4:
                echo "<li>" . "City: " . $data[$i] ."</li>";
                break;
            case 5:
                echo "<li>" . "Country: " . $data[$i] ."</li>";
                break;
            case 6:
                echo "<li>" . "State: " . $data[$i] ."</li>";
                break;
            case 7:
                echo "<li>" . "Zip: " . $data[$i] ."</li>";
                break;
            case 8:
                echo "<li>" . "Phone 1: " . $data[$i] ."</li>";
                break;
            case 9:
                echo "<li>" . "Phone 2: " . $data[$i] ."</li>";
                break;
            case 10:
                echo "<li>" . "Email: " . $data[$i] ."</li>";
                break;
            case 11:
                echo "<li>" . "Web: " . $data[$i] ."</li>";
                break;
        }
    }
    echo "</ul>";
}
fclose($handler);