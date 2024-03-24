<?php

function insertData($param) {
    $conn = $param['conn'];

    $sql = "INSERT INTO {$param['table']} (" . implode(', ', $param['fields']) . ") VALUES (" . rtrim(str_repeat('?, ', count($param['fields'])), ', ') . ")";
    $stmt = $conn->prepare($sql);

    if (!$stmt) {
        return ["success" => false, "message" => "Failed to prepare statement: " . $conn->error];
    }

    $values = array_values($param['data']);
    $stmt->bind_param(str_repeat('s', count($values)), ...$values);

    $result = $stmt->execute() ? ["success" => true, "message" => "Data inserted successfully."] : ["success" => false, "message" => "Error occurred while inserting data: " . $stmt->error];

    $stmt->close();
    return $result;
}




function populateFormData($formIn, $postData)
{
    foreach ($formIn['fields'] as $field) {
        if (isset($postData[$field])) {
            $formIn['data'][$field] = $postData[$field];
        } else {
            $formIn['data'][$field] = '';
            $formIn['empty'][] = $field;
        }
    }

    return $formIn;
}


function fetchData($conn, $f)
{
    $fields = implode(', ', $f['fields']);
    $table = $f['table'];

    $sql = "SELECT $fields FROM $table";

   // print_r($conn);

    $result = $conn->query($sql);

    if (!$result) {
        return ["error" => "Error: " . $conn->error];
    }

    if ($result->num_rows > 0) {
        // Fetch all rows into an associative array
        $userDetails = $result->fetch_all(MYSQLI_ASSOC);
       // print_r($userDetails);
        return $userDetails;
    } else {
        return [["message" => "No results found"]];
    }
}


function displayDetails($details)
{
    $content = '';

    if (isset($details['error'])) {
        $content.= "<p class='card-text'>Error: {".$details['error']."}</p>";
    } else {
        foreach ($details as $user) {
            $content.= '<div class="user-details">';
            foreach ($user as $key => $value) {
                $content.= "<p class='card-text'>$key: $value</p>";
            }
            $content.= '</div>';
        }
    }

    return $content;
}
