<?php

include 'db_connect.php';
$conn = connectToDB();

include './lib/lib.php';
include './data/booking/form.php';

// page variable
$PV = ['fields' => []];

// if ($_SERVER["REQUEST_METHOD"] != "POST") {
//     echo json_encode(["success" => false, "message" => "Invalid request method."]);
//     exit();
// }


if (@$_GET['f']) {

    $PV['def'] = $_GET['f'];
    $PV['def_path'] = "data/$PV[def]/form.php";

    if (is_file($PV['def_path'])) {

        include $PV['def_path'];

        $PV['fields'] = getFormFieldIdsAsArray($form['fields']);


        $formDef = [
            'table' => $form['table'],
            'fields' => $PV['fields'],
            'data' => [],
            'status' => false,
            'empty' => []
        ];

        $formDef = populateFormData($formDef, $_POST);



        $result = insertData([
            'conn' => $conn,
            'table' => $formDef['table'],
            'fields' => $formDef['fields'],
            'data' => $formDef['data']
        ]);


        // Output JSON response
        echo json_encode($result);


    } else {

        http_response_code(400);
        exit();
    }


} else {
    // exit
    http_response_code(400);
    exit();
}

function getFormFieldIdsAsArray($fields)
{
    $lv = ['fields' => []];

    // Traverse each field
    foreach ($fields as $k => $v) {

        $lv['fields'][] = $v['id'];  // Add the field ID to the array
    }

    // print_r($lv['fields']);
    // Return the array of field IDs
    return $lv['fields'];

}

$conn->close();