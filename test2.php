<?php
    $requestData = $_REQUEST;
$totalData = 1;
$totalFiltered = 1;
$data = array();

    //while ($row = mysqli_fetch_array($query)) {  // preparing an array
    for($i = 0; $i < 2; $i++) {
        $nestedData = array();
        $nestedData[] = "employee_name" . $i;
        
        $nestedData[] = 1000;
        
        $nestedData[] = 37;
        

        
        $data[] = $nestedData;
    }
    //}
    $json_data = array(
        "draw" => intval($requestData['draw']),   // for every request/draw by clientside , they send a number as a parameter, when they recieve a response/data they first check the draw number, so we are sending same number in draw.
        "recordsTotal" => intval($totalData),  // total number of records
        "recordsFiltered" => intval($totalFiltered), // total number of records after searching, if there is no searching then totalFiltered = totalData
        "data" => $data   // total data array
    );
    echo json_encode($json_data);  // send data as json format